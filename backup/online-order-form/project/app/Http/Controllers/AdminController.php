<?php

namespace App\Http\Controllers;

use Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function registerForm( )
   {
     return view('back-end.admin.register');
   } 
   public function adminRegisterInfoValidate($request)
   {
        $this->validate($request,[
            'adminName'    =>'required',
            'adminEmail'   =>'required | unique:App\Models\Admin,adminEmail',
            'password'     =>'required',
            'rePassword'   =>'required'
        ],[
           'adminName.required'    =>'Name field  required',
           'adminEmail.required'   =>'Email field  required',
           'rePassword.required'   =>'Re-password field  required',
        ]);
   }


 
public function registerSubmit(Request $request)
{
    $this->adminRegisterInfoValidate($request);
      if($request->password==$request->rePassword){
            Admin::adminRegisterInfoSubmit($request);
            Alert::warning('Pending','Please Waite For Aproved');
            return redirect('/login'); 
      }else{
        Alert::error('Wrong Password','Please input same password.');
          return redirect('admin/register-form');
           
      }
}

public function adminLoginForm( )
{
  return view('back-end.admin.login');
}
public function loginSubmit(Request $request)
{ 
  $admin = Admin::where('adminEmail',$request->email)->first();
   
  if ($admin) {
      if (password_verify($request->password, $admin->password)) {
          if ($admin->adminType==9) {
              Alert::warning('Pending','Please Waite For Aproved');
              return redirect('/login');
          }else{
              if ($admin->adminType==8) {
                   Alert::error('Blocked','You are Block this Site');
                   return redirect('/login');
              }else{
                  Session::put('adminId',$admin->id);
                  Session::put('adminName',$admin->adminName);
                  return redirect('orders/current-orders')->with(['msg'=>'WellCome','msgType'=>'success']); 
              }
             

          }
      } else {
        Alert::error('Invalid','Your Password is Invalid');
          return redirect()->back();
      }
  }else{
      Alert::error('Invalid','Your Email is Invalid');
      return redirect()->back();
  }
}


public function adminLogout()
{
    Session::forget('adminId');
    Session::forget('adminName');
    return redirect('/login')->with(['msg'=>'Logged Out !','msgType'=>'error']);
}
    
}//
