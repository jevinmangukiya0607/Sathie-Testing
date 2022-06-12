<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\SubCategory;
use App\Model\UserDetail;
use Lang;
use Auth;
use Session;

class AccountController extends Controller
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
        $category = Category::where('type','Accountant')->pluck('title','id');
        
        return view('accoutant',compact('category'));
    }

    public function store(Request $request){
        $type = $request->type;
        $user_id = Auth::user()->id;
        if($type == 'first'){
            $employement = $request->employment;
            $category = $request->category;
            $sub_category = $request->sub_category;
            $subcat = SubCategory::where('id',$sub_category)->pluck('title','id');

            

            return view('account_create',compact('employement','category','sub_category','subcat'));
        } else {
            $input = $request->all();
            $input['user_id'] = $user_id;
            
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

            \Mail::to('dodiyachirag09@gmail.com')->send(new \App\Mail\UserDetail($input));
            \Mail::to('jemsmangukiya28@gmail.com')->send(new \App\Mail\UserDetail($input));
            \Mail::to('garbdynasty@gmail.com')->send(new \App\Mail\UserDetail($input));
            
            UserDetail::create($input);
            
            $notification = array(
                'message' => Lang::get('Service Added Successfully!'),
                'alert-type' => 'success'
            );
            return redirect('home')->with($notification);
            
        }

    }

    public function get_sub_category(Request $request){
        $cat_id = $request->cat;
        $subcat = SubCategory::where('category_id',$cat_id)->pluck('title','id');
        $options = '';
        foreach ($subcat as $key => $value) {
            $options .= '<option value="'.$key.'">'.$value.'</option>';
        }
        return $options;
    }

}

