<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Util\Blacklist;

 

Route::group(['middleware'=>'logOutMiddleware'],function(){


    Route::get('admin/register-form',[
        'uses'  => 'App\Http\Controllers\AdminController@registerForm',
        'as'    => 'admin-register-form'
    ]);
     
    Route::post('admin/register-submit',[
        'uses'  => 'App\Http\Controllers\AdminController@registerSubmit',
        'as'    => 'register-submit'
    ]);
    Route::get('login',[
        'uses'  => 'App\Http\Controllers\AdminController@adminLoginForm',
        'as'    => 'admin-login-form'
    ]);
     
    Route::post('admin/login-submit',[
        'uses'  => 'App\Http\Controllers\AdminController@loginSubmit',
        'as'    => 'login-submit'
    ]);



}); //


 

Route::group(['middleware'=>'loginCheckMiddleware'],function (){
     
    Route::get('dashboard',[
        'uses'  => 'App\Http\Controllers\DashboardController@dashboard',
        'as'    => 'dashboard'
    ]); 
    Route::get('admin/logout',[
        'uses'  => 'App\Http\Controllers\AdminController@adminLogout',
        'as'    => 'admin-logout'
    ]);  
    Route::get('orders/current-orders',[
        'uses'  => 'App\Http\Controllers\DashboardController@currentOrders',
        'as'    => 'current-orders'
    ]);
    Route::get('orders',[
        'uses'  => 'App\Http\Controllers\DashboardController@orders',
        'as'    => 'all-orders'
    ]);
    Route::post('orders',[
        'uses'  => 'App\Http\Controllers\DashboardController@filteredOrders',
        'as'    => 'filter-orders'
    ]);
    
Route::get('orders/confirm-orders',[
    'uses'  => 'App\Http\Controllers\DashboardController@confirmOrders',
    'as'    => 'confirm-orders'
]);      
Route::post('orders/filter-confirm-orders',[
    'uses'  => 'App\Http\Controllers\DashboardController@filterConfirmOrders',
    'as'    => 'filter-confirm-orders'
]);    




Route::get('orders/pending-orders',[
    'uses'  => 'App\Http\Controllers\DashboardController@pendingOrders',
    'as'    => 'pending-orders'
]);      
Route::post('orders/filter-pending-orders',[
    'uses'  => 'App\Http\Controllers\DashboardController@filterpendingOrders',
    'as'    => 'filter-pending-orders'
]);    
     
Route::post('orders/order-note',[
    'uses'  => 'App\Http\Controllers\OrderNoteController@orderNoteSubmit',
    'as'    => 'order-note'
]);    




Route::get('orders-home-delivery',[
    'uses'  => 'App\Http\Controllers\DashboardController@homeDeliveryOrders',
    'as'    => 'home-delivery-orders'
]);

Route::get('orders-courier-delivery',[
    'uses'  => 'App\Http\Controllers\DashboardController@courierDeliveryOrders',
    'as'    => 'courier-orders'
]);

Route::get('order-all-advance',[
    'uses'  => 'App\Http\Controllers\DashboardController@allAdvnce',
    'as'    => 'all-advance'
]);

Route::post('payment/filter-advance',[
    'uses'  => 'App\Http\Controllers\DashboardController@filterAdvance',
    'as'    => 'filter-advance'
]);
Route::get('payment/todaypick-advance',[
    'uses'  => 'App\Http\Controllers\DashboardController@todayPickAdvnce',
    'as'    => 'todaypick-advance'
]);
Route::post('payment/filter-today-pick-advance',[
    'uses'  => 'App\Http\Controllers\DashboardController@filterTodayPickAdvnce',
    'as'    => 'filter-today-pick-advance'
]);

Route::get('payment/today-delivery',[
    'uses'  => 'App\Http\Controllers\ReportController@todayDelivery',
    'as'    => 'today-delivery'
]);

Route::post('payment/filter-today-delivery',[
    'uses'  => 'App\Http\Controllers\ReportController@filterTodayDelivery',
    'as'    => 'filter-today-delivery'
]);



Route::post('report/excel-date-filter-orders',[
    'uses'  => 'App\Http\Controllers\ReportController@filterOrderExcel',
    'as'    => 'excel-date-filter-orders'
]);



Route::get('excel/today-orders',[
    'uses'  => 'App\Http\Controllers\ReportController@todayOrders',
    'as'    => 'excel-today-orders'
]);

Route::get('orders-view-detail/{id}',[
    'uses'  => 'App\Http\Controllers\DashboardController@orderViewDetails',
    'as'    => 'order-view-detail'
]);
Route::get('edit-order/{id}',[
    'uses'  => 'App\Http\Controllers\OrderController@orderEdit',
    'as'    => 'order-edit'
]);
Route::post('editing-order',[
    'uses'  => 'App\Http\Controllers\OrderController@editOrderSubmit',
    'as'    => 'order-edit-submit'
]);
Route::get('order-confirmation/{id}',[
    'uses'  => 'App\Http\Controllers\OrderController@orderConfirmation',
    'as'    => 'changing-status-confirmed'
]);
Route::get('order-picked/{id}',[
    'uses'  => 'App\Http\Controllers\OrderController@orderpicked',
    'as'    => 'changing-status-picked'
]);
Route::get('order-deliveried/{id}',[
    'uses'  => 'App\Http\Controllers\OrderController@orderDeliveried',
    'as'    => 'changing-status-deliveried'
]);
Route::get('order-returned/{id}',[
    'uses'  => 'App\Http\Controllers\OrderController@orderReturned',
    'as'    => 'changing-status-returned'
]);
Route::get('order-cancelation/{id}',[
    'uses'  => 'App\Http\Controllers\OrderController@orderCancellation',
    'as'    => 'changing-status-cencelled'
]);


Route::get('invoice/{id}',[
    'uses'  => 'App\Http\Controllers\DashboardController@invoice',
    'as'    => 'order-invoice'
]);






}); //



// Super admin Routs 
Route::group(['middleware'=>'superAdminMiddleware'], function(){
    Route::get('admin/all-users',[
        'uses'  => 'App\Http\Controllers\SuperAdminController@allUsers',
        'as'    =>'all-users'
    ]);
    Route::get('admin/change-approval-user-status/{id}',[
        'uses'  => 'App\Http\Controllers\SuperAdminController@changeAprovalStatus',
        'as'    =>'change-approval-user-status'
    ]);
    Route::get('admin/change-block-user-status/{id}',[
        'uses'  => 'App\Http\Controllers\SuperAdminController@changeBlockStatus',
        'as'    =>'change-block-user-status'
    ]);
    Route::get('admin/change-unblock-user-status/{id}',[
        'uses'  => 'App\Http\Controllers\SuperAdminController@changeUnblockStatus',
        'as'    =>'change-unblock-user-status'
    ]);
    //Prty Route
    Route::resource('party', App\Http\Controllers\PartyController::class);



    //CASH Routes here....
    Route::post('cash/cash-in',[
        'uses'  => 'App\Http\Controllers\CashController@cashIn',
        'as'    =>'cash-in'
    ]);
    Route::post('cash/payment',[
        'uses'  => 'App\Http\Controllers\CashController@payment',
        'as'    =>'payment'
    ]); 
    Route::post('cash/purchase',[
        'uses'  => 'App\Http\Controllers\CashController@purchase',
        'as'    =>'purchase'
    ]);

    //Reports Routes Here......
    Route::get('cash/today-payments',[
        'uses'  =>'App\Http\Controllers\ReportController@todayPayments',
        'as'    =>'today-payments'
    ]);
    Route::post('cash/today-filter-payments',[
        'uses'  =>'App\Http\Controllers\ReportController@todayPaymentsFilter',
        'as'    =>'today-filter-payments'
    ]);
    Route::get('cash/picked-orders',[
        'uses'  =>'App\Http\Controllers\ReportController@pickedOrders',
        'as'    =>'picked-orders'
    ]);

    Route::get('cash/cash-in-report',[
        'uses'  =>'App\Http\Controllers\ReportController@cashInReport',
        'as'    =>'cash-in-report'
    ]);
    Route::get('party/party-history/{id}',[
        'uses'  =>'App\Http\Controllers\ReportController@partyHistory',
        'as'    =>'party-history'
    ]);
    Route::get('cash/cash-statement',[
        'uses'  =>'App\Http\Controllers\ReportController@cashStatement',
        'as'    =>'cash-statement'
    ]);



});  //







 
Route::get('/',[
    'uses'  => 'App\Http\Controllers\VisitorController@form',
    'as'    => '/'
]);

//  Front end Route 
Route::get('order-form',[
    'uses'  => 'App\Http\Controllers\VisitorController@form',
    'as'    => 'our-order-form'
]);
Route::post('order-form-submit',[
    'uses'  => 'App\Http\Controllers\OrderController@formSubmit',
    'as'    => 'form-submit'
]); 

Route::get('confirm-massage',[
    'uses'  => 'App\Http\Controllers\OrderController@confirmMassage',
    'as'    => 'confirm-massage-page'
]);

 



 
