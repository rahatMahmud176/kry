<?php

namespace App\Models;

use Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['adminName','adminEmail','password','adminType'];

    public static function adminRegisterInfoSubmit($request)
    {
        $superAdmin     = Admin::where('adminType',1)->first();
    
         $admin = new Admin();
         $admin->adminName         = $request->adminName;
         $admin->adminEmail         = $request->adminEmail;
         $admin->password           = bcrypt($request->password);
         if ($superAdmin) {
            $admin->adminType          = 9;
         }else{
            $admin->adminType          = 1;
         } 
         $admin->save();    
    
         if ($admin->adminType==9) {
             
         }else{
          Session::put('adminId',$admin->id);
          Session::put('adminName',$admin->adminName);
         } 
    }
    
    public static function logincheck()
    {
        if (Session::get('adminId')) {
            $id = Session::get('adminId');
            $admin = Admin::find($id);
            if($admin->adminType==8){
                Session::forget('adminId');
                Session::forget('adminName');
            }else{
                return $id;
            }
            
        }
    }
    public static function superAdminCheck() 
    {
        $id = Session::get('adminId');
        $superAdmin = Admin::find($id);
        if ($superAdmin->adminType==1) {
            $id = Admin::where('adminType',1)->first();
            return $id;
        }
        
    }
    

}//
