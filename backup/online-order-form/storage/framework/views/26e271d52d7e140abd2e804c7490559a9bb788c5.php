
<?php $__env->startSection('title'); ?>
    Confirm Order
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
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
                                                    আপনার অর্ডারটি সফলভাবে সাবমিট হয়েছে। অর্ডারটি আপাতত পর্যাবেক্ষনাধীন রয়েছে। কিছুক্ষনের মধ্যেই আপনাকে ইমেল অথাবা ফোন কল করে অর্ডারটি নিশ্চিত করা হবে। অনুগ্রহ পূর্বক আমাদের সাথেই থাকুন। <br> ধন্যবাদ।
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/front-end/pages/confirm.blade.php ENDPATH**/ ?>