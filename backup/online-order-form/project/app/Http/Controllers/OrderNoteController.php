<?php

namespace App\Http\Controllers;

use App\Models\OrderNote;
use Illuminate\Http\Request;

class OrderNoteController extends Controller
{
    public function orderNoteInfoValidate($request)
    {
        $this->validate($request,[
            'description' => 'max:250',
        ]);
    }
   public function orderNoteSubmit(Request $request)
   {
      $this->orderNoteInfoValidate($request);
      OrderNote::newNote($request); 
      return redirect()->back()->with(['msg'=>'Saved this note','msgType'=>'success']);
   }  
}//
