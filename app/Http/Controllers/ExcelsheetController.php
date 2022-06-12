<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excelsheet;
use DB;
use Illuminate\Support\Facades\Schema;

class ExcelsheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->hasFile('file')){ 

            // Step 1 getting data from xml and converting to the array
            $xmlString = file_get_contents($request->file('file'));
            $xmlObject = simplexml_load_string($xmlString,'SimpleXMLElement', LIBXML_NOCDATA);
            
            $xml_single_array = json_decode(json_encode((array) $xmlObject), true);
            $xml_array = array($xmlObject->getName() => $xml_single_array);
            $xml_array = $xml_array['products'];
            
            $field_array = array([
                'id','pname','tags','parent_product_id','group_id','category','category_singular','subcategory','subcategory_plural',
                'subsubcategory','sku','mrp_price','selling_price','brand','main_image','image_variable_image','series'
            ]);

            

            // Step 2 sending data for the data mapping 
            return view('xml.data_mapping',compact('xml_single_array','field_array','xml_array'));
        } else {
            $newTableName = 'product';
            $field_array = $request->field_array;
            $columns = '';
            $xml_keys = array();
            $i = 0;
            $columns_array = array();

            // Step 3 split the result of data mapping and making how many columns for creating the supplier product table
            foreach ($field_array as $key => $value) {
                if(!empty($value)){
                    $data = explode("-",$value);
                    $columns .= $data[0].' TEXT NULL DEFAULT NULL,';
                    $columns_array[$i] = $data[0];
                    $xml_keys[$i] = $data[1];
                    $i++;
                }                    
            }
            $columns = rtrim($columns,",");
                        
            // Step 4 making table if not exist 
            if(!Schema::hasTable($newTableName)){
                $createTableSqlString ="CREATE TABLE $newTableName (
                product_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                $columns
                )
                COLLATE='utf8_general_ci'
                ENGINE=InnoDB
                AUTO_INCREMENT=1;";

                DB::statement($createTableSqlString);    
            } else {
                foreach($columns_array as $column){

                    if (!Schema::hasColumn($newTableName,$column)) {
                        $alterTable = "ALTER TABLE $newTableName ADD $column TEXT NULL DEFAULT NULL";
                        DB::statement($alterTable);    
                    }    

                }
            
            }

            $xml_data = unserialize(base64_decode($request->xml_data));
            $count_xml_key = count($xml_keys);
            
            foreach ($xml_data as $key => $value) {
                $values = array();
                foreach ($xml_keys as $l_key => $l_value) {
                    $column_key = $columns_array[$l_key];
                    if(is_array($value[$l_value])){

                        //$values[$column_key] = $value[$l_value];
                    } else {
                        $values[$column_key] = $value[$l_value];    
                    }
                    
                }
                DB::table($newTableName)->insert($values);
            }
        }


        // $xmlFilename = $request->file('file')->getClientOriginalName();
        // $xml_tmu = simplexml_load_file($xmlFilename);
        // $request->file('file')->move(public_path('xml_files'), $xmlFilename);   
        
        return redirect('')->with('message', 'Data Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public  function displayNode($node, $offset) {
        if (is_object($node)) {
            $node = get_object_vars($node);
            foreach ($node as $key => $value) {
                echo str_repeat(" ", $offset) . "-" . $key . "<br>";
                $this->displayNode($value, $offset + 1);
            }
        } elseif (is_array($node)) {
            foreach ($node as $key => $value) {
                if (is_object($value))
                    $this->displayNode($value, $offset + 1);
                else
                    echo str_repeat(" ", $offset) . "-" . $key . "<br>";
            }
        }
    }
}
