@extends('front-end.master')
@section('title')
    Confirm Order
@endsection
@section('mainContent')
<div class="container-fluid">
 

    <div class="row">
         

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4"></h4>

                    <div id="progrss-wizard" class="twitter-bs-wizard">
                        

                         
                         
                        <div class="tab-pane" id="seller-details">
                            <div class="tab-pane" id="progress-confirm-detail">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                            </div>
                                            <div>
                                                <h5>Order Submitted Successfully</h5>
                                                <p class="text-muted solaimanlipi">
                                                    আপনার অর্ডারটি সফলভাবে সাবমিট হয়েছে। আপনার অর্ডার নাম্বার <strong class="text-info">#KRYINT00{{ Session::get('orderId') }}</strong> অর্ডারটি আপাতত পর্যাবেক্ষনাধীন রয়েছে। কিছুক্ষনের মধ্যেই আপনাকে ইমেল অথাবা ফোন কল করে অর্ডারটি নিশ্চিত করা হবে। অনুগ্রহ পূর্বক অর্ডার নাম্বারটি নোট করে রাখুন। আমাদের সাথেই থাকুন। <br> ধন্যবাদ।
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container-fluid -->
</div>
@endsection