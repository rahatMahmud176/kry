<?php

namespace App\Models;

use Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderNote extends Model
{
    use HasFactory;
    protected $fillable = ['description'];
static $note;

public static function newNote($request)
{
     self::$note = new OrderNote();
     self::$note->orderId     = $request->orderId;
     self::$note->adminId     = Session::get('adminId');
     self::$note->description = $request->description;
     self::$note->save();
}

public function admin()
{
    return $this->belongsTo('app\Models\Admin','adminId');
}

}
