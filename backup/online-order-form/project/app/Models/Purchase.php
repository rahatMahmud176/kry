<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'partyId',
        'amount',
        'description'
    ];

    static $purchase;
    static $supplier;



    public static function new($request) 
    {
        self::$supplier = Party::find($request->partyId);

        self::$purchase = new Purchase();
        self::$purchase->partyId     = $request->partyId;
        self::$purchase->amount      = $request->amount;
        self::$purchase->description = $request->description;
        self::$purchase->save();
    }


}
