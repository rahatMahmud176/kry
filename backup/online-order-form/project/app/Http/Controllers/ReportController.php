<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Order;
use App\Models\Party;
use App\Models\Purchase;
use App\Models\TodayDelivery;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ReportController extends Controller
{
  public $today;
  public $date;
  public $orders;
  public $currentMonth;
  public function todayOrders()
  {
    $this->today = date('Y-m-d') . ' 00:00:00';
    return view('back-end.reports.today-orders', [
      'orders'  => Order::where([['status', '!=', 0], ['status', '!=', 9], ['created_at', '>=', $this->today]])->orderBy('id', 'desc')->get()
    ]);
  }
  public function filterOrderExcel(Request $request)
  {
    $this->date = date('Y-m-d',);
    return view('back-end.reports.today-orders', [
      'orders'  => Order::where([['status', '!=', 0], ['status', '!=', 9]])->whereDate('created_at', '=', date($request->date))->orderBy('id', 'desc')->get(),
      'requestDate' => $request->date,
    ]);
  }



  public function todayDelivery()
  {
    $this->today = date('Y-m-d') . ' 00:00:00';
    return view('back-end.reports.today-delivery', [
      'orders'  => TodayDelivery::where([['created_at', '>=', $this->today]])->orderBy('id', 'desc')->get()
    ]);
  } 
  public function filtertodayDelivery(Request $request)
  { 
      return view('back-end.reports.today-delivery',[
        'orders'  => TodayDelivery::whereDate('created_at','=',date($request->date))->orderBy('id','desc')->get(),
        'requestDate' => $request->date, 
      ]);
  }
  
 
public function todayPayments()
{
   
  $this->today = date('Y-m-d') . ' 00:00:00';
  return view('back-end.reports.today-payments', [
    'payments'  => Cash::where([['created_at', '>=', $this->today],['debit','!=',0]])->orderBy('id', 'desc')->get()
  ]);
} 
public function todayPaymentsFilter(Request $request)
{
   
  $this->today = date('Y-m-d') . ' 00:00:00';
  return view('back-end.reports.today-payments', [
    'payments'  => Cash::where([['debit','!=',0]])->whereDate('created_at','=',date($request->date))->orderBy('id', 'desc')->get(),
    'requestDate' => $request->date,
  ]);
}

public function pickedOrders( )
{
   return view('back-end.reports.courier-due',[
    'orders'  => Order::where([['status','=',3]])->get()
   ]);
}

public function cashInReport( )
{
  $this->currentMonth = date('m');
    return view('back-end.reports.cash-in',[
      'cashes'  => Cash::whereRaw('MONTH(created_at) = ?',[$this->currentMonth])->get(),
      'month'   => $this->currentMonth,
    ]); 
}
public function partyHistory($id)
{
  $this->currentMonth = date('m');
  $this->party = Party::find($id);
  return view('back-end.reports.party-history',[
    'payments' => Cash::whereraw('MONTH(created_at) = ?',[$this->currentMonth])->orderBy('id','DESC')->where([['debit','!=',0],['partyId','=',$id]])->get(), 
    'purchases' => Purchase::whereraw('MONTH(created_at) = ?',[$this->currentMonth])->orderBy('id','DESC')->where([['partyId','=',$id]])->get(),
    'partyName' => $this->party->name,
  ]);

}

public function cashStatement( )
{
  $this->currentMonth = date('m');
   return view('back-end.reports.cash-statement',[
    'statements'  => Cash::whereraw('MONTH(created_at) = ?',[$this->currentMonth])->orderBy('id','DESC')->get(),
   ]);
}



}//
