<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //admin dashboard
    public function admin(){
        return view('backend.index');
    }

    // admin login function

    public function adminLogin(){
        return view('backend.login');
    }



        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


            $admin = Admin::where("name", $request->username)->first();

            if($admin  && (Hash::check($request->password, $admin->password))){
                session(['adminSess' => $admin]);
                return redirect()->route('admin')->with('success', 'Admin Login Successful');;
            }else{
                return redirect()->route('adminLogin')->with('error', 'Invalid username/password!');
            }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function adminLogout()
    {
        session()->forget('adminSess');
        return redirect()->route('adminLogin');
    }



}
