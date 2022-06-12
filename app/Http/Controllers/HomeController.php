<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Lang;

class HomeController extends Controller
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
        return view('home');
    }

    public function privacy(){
        return view('privacy');
    }

    public function edit_profile(){
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();

        return view('profile',compact('user'));
    }

    public function about_us(){
        return view('about_us');
    }
    public function profile_update(Request $request){
        $id = $request->id;

        $user = User::where('id',$id)->first();

        $input = $request->all();

        // if($request->hasFile('photo')) {
        //     $path = 'uploads/documents/'.$request->photo;
        //     $input['dfile_type'] = $request->photo->getClientOriginalExtension();
        //     $input['photo'] = $request->photo->getClientOriginalName();

        //     $fname = uniqid('_profile_').'_'.$_FILES['photo']['name'];
        //     $request->photo->storeAs('documents',$fname);
        //     $input['photo'] = $fname;
        // }
        $input['date_of_birth'] = date('Y-m-d',strtotime($request->date_of_birth));

        $user->update($input);
        
        $notification = array(
            'message' => Lang::get('Profile Updated Successfully!'),
            'alert-type' => 'success'
        );

        return redirect('home')->with($notification);
    }

    public function displayImage($filename)
    {
        return response()->download(storage_path('app/documents/'.$filename),null,[],null);    
    }

}

