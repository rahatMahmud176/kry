@extends('back-end.master')
@section('title')
    Dashboard
@endsection
@section('mainContent')
<div class="container-fluid">

    <!-- start page title -->
 
    <!-- end page title -->
 

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>All Orders</h5>
                            <p class="text-muted ">All order Here </p>
                        </div>
                        <div class="ml-3">
                            <i class="fas fa-ambulance "></i>
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>#</small></sup> {{ $currentMonthOrders }}/ <span class="font-size-13">This month</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Show Here</a>
                    </div>

                     
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Confirmed Orders</h5>
                            <p class="text-muted">Comfirm orders here</p>
                        </div>
                        <div class="ml-3">
                            <i class="fas fa-check-double text-success"></i>
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>#</small></sup> {{ $currentMonthConfirmOrders }}/ <span class="font-size-13">This month</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Show Here</a>
                    </div> 
                     
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="card plan-box">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Total Cash</h5>
                            <p class="text-muted">Total here</p>
                        </div>
                        <div class="ml-3">
                            <i class="fas fa-check-double text-success"></i>
                        </div>
                    </div>
                    <div class="py-4">
                        @php
                            $debit =0;
                            $credit =0;
                        @endphp
                        @foreach ($cashes as $item)
                            <input type="hidden" value="{{ $debit = $debit + $item->debit }}">
                            <input type="hidden" value="{{ $credit = $credit + $item->credit }}">
                        @endforeach
                        <h2><sup><small>#</small></sup> {{ $credit - $debit }}/- <span class="font-size-13"></span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Show Here</a>
                    </div> 
                     
                </div>
            </div>
        </div>


        {{-- <div class="col-xl-3 col-md-6">
            <div class="card plan-box">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Cancelled</h5>
                            <p class="text-muted">Sed ut neque unde</p>
                        </div>
                        <div class="ml-3">
                            <i class="bx bx-cycling h1 text-primary"></i>
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 39/ <span class="font-size-13">Per month</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> Free Live Support</p>
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> Unlimited User</p>
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> No Time Tracking</p>
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> Free Setup</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card plan-box">
                <div class="card-body p-4">
                    <div class="media">
                        <div class="media-body">
                            <h5>Unlimited</h5>
                            <p class="text-muted">Itaque earum hic</p>
                        </div>
                        <div class="ml-3">
                            <i class="bx bx-car h1 text-primary"></i>
                        </div>
                    </div>
                    <div class="py-4">
                        <h2><sup><small>$</small></sup> 49/ <span class="font-size-13">Per month</span></h2>
                    </div>
                    <div class="text-center plan-btn">
                        <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Sign up Now</a>
                    </div>

                    <div class="plan-features mt-5">
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> Free Live Support</p>
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> Unlimited User</p>
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> No Time Tracking</p>
                        <p><i class="bx bx-checkbox-square text-primary mr-2"></i> Free Setup</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- end row -->

</div> <!-- container-fluid -->

@endsection