<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\UserDetail;
use Auth;
use Lang;

class BankerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('type','Banker')->pluck('title','id');
        
        return view('banker.index',compact('category'));
    }

    public function store(Request $request){
        $type = $request->type;
        if($type == 'first'){
            $employement = $request->employment;
            $category = $request->category;
            $sub_category = $request->sub_category;
            $categories = Category::where('id',$category)->pluck('title','id');    
            
            return view('banker.create',compact('employement','category','sub_category','categories'));
        } else {
            $input = $request->all();
            $input['user_id'] = Auth::user()->id;


            if($request->hasFile('adharcard_filename')) {
                $path = 'uploads/documents/'.$request->adharcard_filename;
                $input['dfile_type'] = $request->adharcard_filename->getClientOriginalExtension();
                $input['adharcard_filename'] = $request->adharcard_filename->getClientOriginalName();
                // Checking data is Product Id or User Id
                $fname = uniqid('adharcard_').'_'.$_FILES['adharcard_filename']['name'];
                $request->adharcard_filename->storeAs('documents',$fname);
                $input['adharcard_filename'] = $fname;
            }

            if($request->hasFile('pancard_filename')) {
                $path = 'uploads/documents/'.$request->pancard_filename;
                $input['dfile_type'] = $request->pancard_filename->getClientOriginalExtension();
                $input['pancard_filename'] = $request->pancard_filename->getClientOriginalName();
                // Checking data is Product Id or User Id
                $fname = uniqid('pancard_').'_'.$_FILES['pancard_filename']['name'];
                $request->pancard_filename->storeAs('documents',$fname);
                $input['pancard_filename'] = $fname;
            }

            if($request->hasFile('bank_statement')) {
                $path = 'uploads/documents/'.$request->bank_statement;
                $input['dfile_type'] = $request->bank_statement->getClientOriginalExtension();
                $input['bank_statement'] = $request->bank_statement->getClientOriginalName();
                $fname = uniqid('pancard_').'_'.$_FILES['bank_statement']['name'];
                $request->bank_statement->storeAs('documents',$fname);
                $input['bank_statement'] = $fname;
            }            
            
            \Mail::to('dodiyachirag09@gmail.com')->send(new \App\Mail\UserDetail($input));
            
            UserDetail::create($input);

            $notification = array(
                'message' => Lang::get('Banker Service Added Successfully!'),
                'alert-type' => 'success'
            );
            return redirect('home')->with($notification);
        }

    }

    

}

