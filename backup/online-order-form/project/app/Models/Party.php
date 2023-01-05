<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'deu', 
    ];

    static $party;

    public static function newParty($request)
    {
        self::$party = new Party();
        self::$party->name          = $request->name;
        self::$party->description   = $request->description;
        self::$party->save();

    }

    public static function debit($request)
    {
        self::$party = Party::find($request->partyId);
        self::$party->due = self::$party->due + $request->amount;
        self::$party->save();
    }


    public static function credit($request)
    {
        self::$party = Party::find($request->partyId);
        self::$party->due = self::$party->due - $request->amount;
        self::$party->save();
    }







}
