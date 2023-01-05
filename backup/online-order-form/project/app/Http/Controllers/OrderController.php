<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Order;
use App\Models\TodayDelivery;
use App\Models\TodayPick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

  public $order;
  public $todayPick;
  public $todayDelivery;

  public function orderInfoValidation($request)
  {
    $this->validate(
      $request,
      [
        'firstName' => 'required | max:50',
        'lastName' => 'max:50',
        'phoneNumber' => 'required',
        'address' => 'required| max:250',
        'zone' => 'required',
        'shippingMethod' => 'required',
        'productName' => 'required | max:50',
        'price' => 'required | numeric ',
        'productType' => 'required ',
        'variant' => 'required',

      ],
      [
        'firstName.required' => 'Please input your First Name',
        'phoneNumber.required' => 'Please input your Phone Number',
        'address.required' => 'Please input your Address',
        'zone.required' => 'Please select your zone',
        'shippingMethod.required' => 'Please select your shipping method',
      ]
    );
  }

  public function formSubmit(Request $request)
  {
    $this->orderInfoValidation($request);
    $orderId = Order::newOrder($request);
    return redirect('confirm-massage')->with(['orderId' => $orderId]);
  }

  public function confirmMassage()
  {
    return view('front-end.pages.confirm');
  }

  public function orderEdit($id)
  {
    return view('back-end.orders.edit-order', [
      'item'  => Order::find($id)
    ]);
  }
  public function editOrderSubmit(Request $request)
  {

    $this->orderInfoValidation($request);
    Order::edit($request);
    Alert::success('Done', 'Order Edited Successfully');
    return redirect("orders-view-detail/$request->id");
  }


  public function orderConfirmation($id)
  {
    $this->order = Order::find($id);
    $this->order->status = 1;
    $this->order->save();
    Alert::success('Confirmed', 'This order has been Confirmed Successfully');
    return redirect()->back();
  }
  public function orderCancellation($id)
  {
    $this->order = Order::find($id);
    $this->order->status = 9;
    $this->order->save();
    Alert::error('Cencelled', 'This order has been Cencelled Successfully');
    return redirect()->back();
  }
  public function orderpicked($id)
  {

    DB::beginTransaction();

    try {
      $this->order = Order::find($id);
      $this->order->status = 3;
      $this->order->save();


      if (TodayPick::where('orderId', $id)->get()) {
        TodayPick::where('orderId', $id)->delete();
      }
      $this->todayPick = new TodayPick();
      $this->todayPick->orderId = $id;
      $this->todayPick->save();

      DB::commit();
    } catch (\Exception $e) {
      DB::rollback();
      Alert::error('Error!', 'Somthing is wrong!');
      return redirect()->back();
    }



    Alert::toast('Delivery Man Picked product for delivery!', 'success');
    return redirect()->back();
  }
  public function orderDeliveried($id)
  {
    DB::beginTransaction();

    try {
      $this->order = Order::find($id);
      $this->order->status = 5;
      $this->order->save();

      if (TodayDelivery::where('orderId', $id)->get()) {
        TodayDelivery::where('orderId', $id)->delete();
      }
      $this->todayDelivery = new TodayDelivery();
      $this->todayDelivery->orderId = $id;
      $this->todayDelivery->save();

      DB::commit();
      Alert::success('Deliveried !', ' This order Deliveried successfully');
      return redirect()->back();
    } catch (\Exception $e) {
      DB::rollback();
      Alert::error('Error!', 'Somthing is wrong!');
      return redirect()->back();
      // something went wrong
    }  
    
  }

  public function orderReturned($id)
  {
    $this->order = Order::find($id);
    $this->order->status = 4;
    $this->order->save();
    Alert::warning('Returned !', ' This order has been Returned');
    return redirect()->back();
  }
}//
