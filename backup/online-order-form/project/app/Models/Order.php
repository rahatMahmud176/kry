<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'address',
        'zone',
        'shippingMethod',
        'productName',
        'price',
        'productType',
        'variant',
        'payMethod',
        'customerAccountNo',
        'ourAccountNo',
        'tnxId',
        'payAmount', 
    ];
static $order;

public static function orderBesicInfo($request)
{
    self::$order->firstName             = $request->firstName;
    self::$order->lastName              = $request->lastName;
    self::$order->phoneNumber           = $request->phoneNumber;
    self::$order->email                 = $request->email;
    self::$order->address               = $request->address;
    self::$order->zone                  = $request->zone;
    self::$order->shippingMethod        = $request->shippingMethod;
    self::$order->productName           = $request->productName;
    self::$order->price                 = $request->price;
    self::$order->productType           = $request->productType;
    self::$order->variant               = $request->variant;
    self::$order->payMethod             = $request->payMethod;
    self::$order->customerAccountNo     = $request->customerAccountNo;
    self::$order->ourAccountNo          = $request->ourAccountNo;
    self::$order->tnxId                 = $request->tnxId;
    self::$order->payAmount             = $request->payAmount;
    self::$order->save();
}

public static function newOrder($request)
{
    self::$order = new Order();
    self::orderBesicInfo($request);
    return self::$order->id;
}


public static function edit($request)
{
    self::$order = Order::find($request->id);
    self::orderBesicInfo($request);
}

public function note()
{
   return $this->hasMany('App\Models\OrderNote','orderId')->orderBy('id','desc');
}


}
