<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Order;
use App\Models\Party;
use App\Models\TodayDelivery;
use App\Models\TodayPick;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DashboardController extends Controller
{
  public $today;
  public $date;
  public $currentMonth;
 
  public function dashboard()
  {
    $currentMonth = date('m');
     return view('back-end.dashboard.dashboard',[
      'currentMonthOrders'  => Order::whereRaw('MONTH(created_at) = ?',[$currentMonth])->count(),
      'currentMonthConfirmOrders'  => Order::whereRaw('MONTH(created_at) = ?',[$currentMonth])->where([['status','!=','0'],['status','!=','9'],['status','!=','4']])->count(),
      'currentMonthConfirmOrders'  => Order::whereRaw('MONTH(created_at) = ?',[$currentMonth])->where([['status','!=','0'],['status','!=','9'],['status','!=','4']])->count(),
      'cashes'       =>Cash::all() 
     ]);
  }
 
  public function currentOrders()
  {
    return view('back-end.orders.current-orders',[
      'orders' => Order::orderBy('id','desc')->paginate(25),
    ]);
  }

    public function orders()
    {
       return view('back-end.orders.all-orders',[
         'orders' => Order::orderBy('id','desc')->get(),
       ]);
    }
    public function filteredOrders(Request $request)
    {   
       
      return view('back-end.orders.all-orders',[ 
        'orders' => Order::whereDate('created_at','=',date($request->date))->orderBy('id','desc')->get(),
        'requestDate'   => $request->date,
      ]);
 
    }

    public function invoice($id)
    { 
       return view('back-end.reports.invoice',[
        'order' => Order::find($id),
       ]);
    }
    public function orderViewDetails($id)
    {
       return view('back-end.orders.order-view-details',[
          'order' => Order::find($id)
       ]);
    }




    
public function confirmOrders()
{
  $this->today = date('Y-m-d').' 00:00:00';
  return view('back-end.orders.confirm-orders',[
      'orders'  => Order::where([['status','!=', 0],['status','!=', 9],['created_at','>=',$this->today ]])->orderBy('id','desc')->get(),
      'requestDate' => $this->today
    ]);
}     
public function filterConfirmOrders(Request $request)
{ 
  return view('back-end.orders.confirm-orders',[
      'orders'  => Order::where([['status','!=', 0],['status','!=', 9]])->whereDate('created_at','=',date($request->date))->orderBy('id','desc')->get(),
      'requestDate' => $request->date,
    ]);
} 








    
    
public function pendingOrders()
{
  $this->today = date('Y-m-d').' 00:00:00';
  return view('back-end.orders.pending-orders',[
      'orders'  => Order::where([['status','=', 0],['created_at','>=',$this->today ]])->orderBy('id','desc')->get(),
      'requestDate' => $this->today
    ]);
}     
public function filterpendingOrders(Request $request)
{ 
  return view('back-end.orders.pending-orders',[
      'orders'  => Order::where([['status','=', 0]])->whereDate('created_at','=',date($request->date))->orderBy('id','desc')->get(),
      'requestDate' => $request->date,
    ]);
} 





public function homeDeliveryOrders()
{
  $this->today = date('Y-m-d').' 00:00:00';
    return view('back-end.orders.home-delivery',[
      'orders'  => Order::where('zone','insideDhaka')->where([['status','!=', 0],['status','!=', 9],['created_at','>=',$this->today ]])->orderBy('id','desc')->get()
    ]);
}    
public function courierDeliveryOrders()
{
  $this->today = date('Y-m-d').' 00:00:00';
    return view('back-end.orders.courier',[
      'orders'  => Order::where('zone','outsideDhaka')->where([['status','!=', 0],['status','!=', 9],['created_at','>=',$this->today ]])->orderBy('id','desc')->get()
    ]);
}
 
public function allAdvnce()
{
  $this->today = date('Y-m-d').' 00:00:00';
    return view('back-end.payment.all-advance',[
      'orders'  => Order::where([['status','!=', 0],['status','!=', 9],['created_at','>=',$this->today ]])->orderBy('id','desc')->get()
    ]);
}
  

public function filterAdvance(Request $request)
{
   
    return view('back-end.payment.all-advance',[
      'orders'  => Order::where([['status','!=', 0],['status','!=', 9]])->whereDate('created_at','=',date($request->date))->orderBy('id','desc')->get(),
      'requestDate' => $request->date, 
    ]);
}


public function todayPickAdvnce()
{
  $this->today = date('Y-m-d').' 00:00:00';
    return view('back-end.payment.todaypick-advance',[
      'orders'  => TodayPick::where([['created_at','>=',$this->today ]])->orderBy('id','desc')->get()
    ]);
}
public function filterTodayPickAdvnce(Request $request)
{ 
    return view('back-end.payment.todaypick-advance',[
      'orders'  => TodayPick::whereDate('created_at','=',date($request->date))->orderBy('id','desc')->get(),
      'requestDate' => $request->date, 
    ]);
}






}

