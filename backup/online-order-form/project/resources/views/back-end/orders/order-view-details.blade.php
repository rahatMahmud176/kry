@extends('back-end.master')
@section('title')
    Order Details
@endsection
@section('mainContent')
<div class="row">
    <div class="col-lg-11 mx-auto">
        <div class="card">
            <div class="card-body">

                 
                <div class="row"> 

                    <div class="col-md-4">
                        <div class="form-group ">
                            <h2>Customer Info | KRYINT#00{{ $order->id }}</h2>
                            <hr>
                             <strong class="text-">Name :</strong> {{ $order->firstName.' '.$order->lastName }} <br>
                            <strong>Phone Number:</strong>  {{ $order->phoneNumber }} <br>
                             <strong>Email :</strong> {{ $order->email }} <br>
                             <strong>Zone:  </strong> 
                                <strong class="{{ $order->zone=='insideDhaka'?'text-warning':'text-success' }} btn-sm btn-rounded">{{ $order->zone }}</strong>
                             <br>
                             <strong>Shipping Method: </strong>{{ $order->shippingMethod=='cashOnDelivery'?'C.O.D':' ' }}  {{ $order->shippingMethod=='freeShipping'?'Free Shipping':' ' }}<br>
                             <strong>Address:</strong> {{ $order->address }} <br> 
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="form-group ">
                            <h2>Product Info</h2>
                            <hr>
                            <strong>Product Type : </strong> {{ $order->productType=='mobile'?'Mobile Phone':'Gadgets' }} <br>
                             <strong>Product Name :</strong> {{ $order->productName }} <br>
                             <strong>#Variant :</strong>  {{ $order->variant }}       <br>
                             <strong>#Price  :</strong> {{ $order->price }} <br>
                             
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="form-group ">
                            <div class="clearfix mb-0">
                                <h2 class="d-inline float-left">Payment Info</h2>
                               <button class="btn btn-info btn-sm float-right m-0" data-toggle="modal" data-target="#orderModal">Add Note<i class="bx bx-plus"></i></button>
                            </div>
                            <hr>
                            <strong>Payment Method:</strong> 
                              <strong class="text-success">{{ $order->payMethod=='bank'?'Bank Payment':'' }} </strong>
                              <strong style="color:orangered">{{ $order->payMethod=='nagad'?'Nagad':'' }} </strong>
                              <strong style="color:red"> {{ $order->payMethod=='bkash'?'Bkash':'' }} </strong>
                             <strong style="color:blueviolet">{{ $order->payMethod=='rocket'?'Rocket':'' }} </strong>
                              
                              <br>
                             <strong>Our Account:</strong> {{ $order->ourAccountNo }}<br>
                             <strong>Customer Account No :</strong>{{ $order->customerAccountNo }}         <br>
                             <strong>TransitionID :</strong> {{ $order->tnxId }} <br>
                             <strong>#Advance :</strong> {{ $order->payAmount }}<br>
                             <strong>#Due:</strong> {{ $order->price - $order->payAmount}}      <br> 
                        </div>
                    </div> 
                    
                   

                    <div class="col-md-12 mt-3 mb-0 ">
                        
                        
                            @foreach ($order->note as $item)
                            <blockquote class="blockquote">
                               <p class="mb-0">{{ $item->description }}</p>
                               <footer class="blockquote-footer"><cite title="Source Title">{{ $item->admin->adminName }} ({{ date('d-M   h:i a', strtotime($item->created_at) ) }})</cite></footer>
                             </blockquote>
                            @endforeach
                         
                    </div> 
                    
                    <div class="bg-danger container-fluid col-md-12 mb-4" style="max-height: 1px">- </div>

                    <div class="col-md-4 ">
                        <div class="form-group ">
                            <h6>Current Status</h6>
                            @if ($order->status==0)
                                <button type="button" class="btn btn-warning btn-sm btn-rounded" data-toggle="modal" data-target=".exampleModal">
                                    pending
                                  </button>
                                @endif
                                @if ($order->status==1)
                                 <button class="btn btn-sm btn-rounded"  style="background: #03fcbe">Confirmed</button> 
                                @endif
                                @if ($order->status==3)
                                 <button class="btn btn-info btn-sm btn-rounded">Picked</button>
                                 <a href="{{ route('order-invoice', ['id' => $order->id]) }}"
                                    title="Click for Order Deliveried"
                                    class="btn btn-success btn-sm btn-rounded">Invoice</a> 
                                @endif
                                @if ($order->status==5)
                                 <button class="btn btn-success btn-sm btn-rounded">Deliveried</button> 
                                @endif
                                @if ($order->status==4)
                                 <button class="btn btn-danger btn-sm btn-rounded">Returned</button> 
                                @endif
                                @if ($order->status==9)
                                 <button class="btn btn-danger btn-sm btn-rounded">Cancelled</button> 
                                 @endif
                        </div>
                    </div> 

                    <div class="col-md-4">
                        <div class="form-group ">
                            <h6>Press for Cancell or Edit</h6>
                            <a href="{{ route('changing-status-cencelled',['id'=>$order->id]) }}" class="btn btn-danger btn-sm btn-rounded" >Cancell</a> 
                            <a href="{{ route('order-edit',['id'=>$order->id]) }}" class="btn btn-info btn-sm btn-rounded">Edit</a>
                            
                        </div>
                    </div> 

                    <div class="col-md-4">
                        <div class="form-group ">
                            <h6>.</h6>
                            @if ($order->status==0) 
                                    <a href="{{ route('changing-status-confirmed',['id'=>$order->id]) }}" title="Click for Order confirmed" class="btn btn-sm btn-rounded"  style="background: #03fcbe">Confirm</a> 
                                 @endif
                                @if ($order->status==1)
                                 <a href="{{ route('changing-status-picked',['id'=>$order->id]) }}" title="Click for Order Picked" class="btn btn-sm btn-info btn-rounded">Pick</a> 
                                @endif
                                @if ($order->status==3)
                                 <a href="{{ route('changing-status-deliveried',['id'=>$order->id]) }}" title="Click for Order Delivery" class="btn btn-success btn-sm btn-rounded">Delivery</a> 
                                @endif
                                @if ($order->status==5)
                                 <a href="{{ route('changing-status-returned',['id'=>$order->id]) }}" title="Click for Order Return" class="btn btn-success btn-sm btn-rounded">Return </a> 
                                @endif 
                                @if ($order->status==4)
                                 <a href="{{ route('changing-status-deliveried',['id'=>$order->id]) }}" title="Click for Order Re-deliveried" class="btn btn-success btn-sm btn-rounded">Re-Delivery</a> 
                                @endif
                                @if ($order->status==9)
                                 <a href="{{ route('changing-status-confirmed',['id'=>$order->id]) }}" title="Click for Order Re-Confirm" class="btn btn-success btn-sm btn-rounded">Re-Confirm</a> 
                                 @endif
                        </div>
                    </div> 

                    

                </div>



            </div>
        </div>
        <!-- end select2 -->
    </div>
</div>


{{-- Moal  --}}
{{ Form::open(['route'=>'order-note','method'=>'POST']) }}
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Note for Order NO. KRYINT#00{{ $order->id }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="orderId" value="{{ $order->id }}">
          <textarea name="description" id="" class="form-control" placeholder="Write Note Here...."></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submti" class="btn text-light" style="background:#04d9ce">Noted</button>
        </div>
      </div>
    </div>
  </div>
{{ Form::close() }}
@endsection