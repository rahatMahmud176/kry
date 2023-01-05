<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuperAdminController extends Controller
{

public $admin;

    public function allUsers()
    {
        return view('back-end.admin.all-users',[
            'users'     => Admin::orderBy('id','desc')->get(),
        ]);
    }

public function changeAprovalStatus($id)
{
    $this->admin =  Admin::find($id);
    $this->admin->adminType = 2;
    $this->admin->save();
    Alert::success('Approved','This user approved successfully!');
    return redirect()->back();
}

public function changeBlockStatus($id)
{
    $this->admin =  Admin::find($id);
    $this->admin->adminType = 8;
    $this->admin->save();
    Alert::warning('Block','This user blocked !');
    return redirect()->back();
}
public function changeUnblockStatus($id)
{
    $this->admin =  Admin::find($id);
    $this->admin->adminType = 2;
    $this->admin->save();
    Alert::success('Unblocked','This user unblock successfully !');
    return redirect()->back();
}








}//
