<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;
    protected $fillabl = [
        'suplierId',
        'debit',
        'credit',
        'amount',
        'description'
    ];

static $cash;
static $supplier;

public static function creditCash($request)
{
    self::$supplier = Party::find($request->partyId);

    self::$cash = new Cash();
    self::$cash->partyId     = $request->partyId;
    self::$cash->credit      = $request->amount;
    self::$cash->description = $request->amount.' '.'tk Credited by'.' '.self::$supplier->name;
    self::$cash->save();
}

public static function debitCash($request)
{
    self::$supplier = Party::find($request->partyId);

    self::$cash = new Cash();
    self::$cash->partyId     = $request->partyId;
    self::$cash->debit      = $request->amount;
    self::$cash->description = $request->amount.' '.'tk Debited by'.' '.self::$supplier->name;
    self::$cash->save();
}


public function party()
{
    return $this->belongsTo('App\Models\Party','partyId');
}





}
