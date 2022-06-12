<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\UserDetail;
use Auth;
use Lang;

class InsuranceController extends Controller
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
        $category = Category::where('type','Insuarance')->pluck('title','id');
        
        return view('insurance.index',compact('category'));
    }

    public function store(Request $request){
        $type = $request->type;
        if($type == 'first'){
            $employement = $request->employment;
            $category = $request->category;
            
            $categories = Category::where('id',$category)->pluck('title','id');
            
            if($category == '9'){
                // Health Insurance
                return view('insurance.health',compact('employement','category','categories'));                
            } else if($category == '11'){
                // Vehicle Insurance
                return view('insurance.vehicle',compact('employement','category','categories'));    
            } else if($category == '10'){
                // Term Insurance
                return view('insurance.term',compact('employement','category','categories'));    
            } else if($category == '13'){
                // Trevel Insurance
                return view('insurance.travel',compact('employement','category','categories'));    
            } else if($category == '12'){
                // Property Insurance
                return view('insurance.property',compact('employement','category','categories'));    
            } else if($category == '14'){
                // Personal Accident
                return view('insurance.personal_accident',compact('employement','category','categories'));    
            } else if($category == '15'){
                // Fire Accident
                return view('insurance.fire',compact('employement','category','categories'));    
            }    

            return view('insurance.create',compact('employement','category'));
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
            
            if($request->hasFile('three_year_policy')) {
                $path = 'uploads/documents/'.$request->three_year_policy;
                $input['dfile_type'] = $request->three_year_policy->getClientOriginalExtension();
                $input['three_year_policy'] = $request->three_year_policy->getClientOriginalName();
                // Checking data is Product Id or User Id
                $fname = uniqid('three_yr_policy').'_'.$_FILES['three_year_policy']['name'];
                $request->three_year_policy->storeAs('documents',$fname);
                $input['three_year_policy'] = $fname;
            }

            if($request->hasFile('photo')) {
                $path = 'uploads/documents/'.$request->photo;
                $input['dfile_type'] = $request->photo->getClientOriginalExtension();
                $input['photo'] = $request->photo->getClientOriginalName();
                // Checking data is Product Id or User Id
                $fname = uniqid('photo_').'_'.$_FILES['photo']['name'];
                $request->photo->storeAs('documents',$fname);
                $input['photo'] = $fname;
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

            if($request->hasFile('last_year_policy')) {
                $path = 'uploads/documents/'.$request->last_year_policy;
                $input['dfile_type'] = $request->last_year_policy->getClientOriginalExtension();
                $input['last_year_policy'] = $request->last_year_policy->getClientOriginalName();
                // Checking data is Product Id or User Id
                $fname = uniqid('policy_').'_'.$_FILES['last_year_policy']['name'];
                $request->last_year_policy->storeAs('documents',$fname);
                $input['last_year_policy'] = $fname;
            }

            if($request->hasFile('passport_file')) {
                $path = 'uploads/documents/'.$request->passport_file;
                $input['dfile_type'] = $request->passport_file->getClientOriginalExtension();
                $input['passport_file'] = $request->passport_file->getClientOriginalName();
                // Checking data is Product Id or User Id
                $fname = uniqid('passport_').'_'.$_FILES['passport_file']['name'];
                $request->passport_file->storeAs('documents',$fname);
                $input['passport_file'] = $fname;
            }



            \Mail::to('dodiyachirag09@gmail.com')->send(new \App\Mail\UserDetail($input));
            
            UserDetail::create($input);

            $notification = array(
                'message' => Lang::get('Service Added Successfully!'),
                'alert-type' => 'success'
            );
            return redirect('home')->with($notification);
        }

    }

    

}

