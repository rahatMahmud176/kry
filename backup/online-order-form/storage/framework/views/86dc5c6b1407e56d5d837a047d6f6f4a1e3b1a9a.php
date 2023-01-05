
<?php $__env->startSection('title'); ?>
    Order Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
<div class="row">
    <div class="col-lg-11 mx-auto">
        <div class="card">
            <div class="card-body">

                 
                <div class="row"> 

                    <div class="col-md-4">
                        <div class="form-group ">
                            <h2>Customer Info</h2>
                            <hr>
                             <strong class="text-">Name :</strong> <?php echo e($order->firstName.' '.$order->lastName); ?> <br>
                            <strong>Phone Number:</strong>  <?php echo e($order->phoneNumber); ?> <br>
                             <strong>Email :</strong> <?php echo e($order->email); ?> <br>
                             <strong>Zone:  </strong> 
                                <strong class="<?php echo e($order->zone=='insideDhaka'?'text-warning':'text-success'); ?> btn-sm btn-rounded"><?php echo e($order->zone); ?></strong>
                             <br>
                             <strong>Shipping Method: </strong><?php echo e($order->shippingMethod=='cashOnDelivery'?'C.O.D':' '); ?>  <?php echo e($order->shippingMethod=='freeShipping'?'Free Shipping':' '); ?><br>
                             <strong>Address:</strong> <?php echo e($order->address); ?> <br> 
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="form-group ">
                            <h2>Product Info</h2>
                            <hr>
                            <strong>Product Type : </strong> <?php echo e($order->productType=='mobile'?'Mobile Phone':'Gadgets'); ?> <br>
                             <strong>Product Name :</strong> <?php echo e($order->productName); ?> <br>
                             <strong>#Variant :</strong>  <?php echo e($order->variant); ?>       <br>
                             <strong>#Price  :</strong> <?php echo e($order->price); ?> <br>
                             
                        </div>
                    </div> 


                    <div class="col-md-4">
                        <div class="form-group ">
                            <h2>Payment Info</h2>
                            <hr>
                            <strong>Payment Method:</strong> 
                              <strong class="text-success"><?php echo e($order->payMethod=='bank'?'Bank Payment':''); ?> </strong>
                              <strong style="color:orangered"><?php echo e($order->payMethod=='nagad'?'Nagad':''); ?> </strong>
                              <strong style="color:red"> <?php echo e($order->payMethod=='bkash'?'Bkash':''); ?> </strong>
                             <strong style="color:blueviolet"><?php echo e($order->payMethod=='rocket'?'Rocket':''); ?> </strong>
                              
                              <br>
                             <strong>Our Account:</strong> <?php echo e($order->ourAccountNo); ?><br>
                             <strong>Customer Account No :</strong><?php echo e($order->customerAccountNo); ?>         <br>
                             <strong>TransitionID :</strong> <?php echo e($order->tnxId); ?> <br>
                             <strong>#Advance :</strong> <?php echo e($order->payAmount); ?><br>
                             <strong>#Due:</strong> <?php echo e($order->price - $order->payAmount); ?>      <br> 
                        </div>
                    </div> 
                    
                   

                    <div class="col-md-12 mt-5 mb-0 ">
                        <div class="form-group ">
                            <h2>You Need Actions:</h2>
                           
                        </div>
                    </div> 
                    <div class="bg-danger container-fluid col-md-12 mb-4" style="max-height: 1px">- </div>

                    <div class="col-md-4 ">
                        <div class="form-group ">
                            <h6>Current Status</h6>
                            <?php if($order->status==0): ?>
                                <button type="button" class="btn btn-warning btn-sm btn-rounded" data-toggle="modal" data-target=".exampleModal">
                                    pending
                                  </button>
                                <?php endif; ?>
                                <?php if($order->status==1): ?>
                                 <button class="btn btn-sm btn-rounded"  style="background: #03fcbe">Confirmed</button> 
                                <?php endif; ?>
                                <?php if($order->status==3): ?>
                                 <button class="btn btn-info btn-sm btn-rounded">Picked</button>
                                 <a href="<?php echo e(route('order-invoice', ['id' => $order->id])); ?>"
                                    title="Click for Order Deliveried"
                                    class="btn btn-success btn-sm btn-rounded">Invoice</a> 
                                <?php endif; ?>
                                <?php if($order->status==5): ?>
                                 <button class="btn btn-success btn-sm btn-rounded">Deliveried</button> 
                                <?php endif; ?>
                                <?php if($order->status==4): ?>
                                 <button class="btn btn-danger btn-sm btn-rounded">Returned</button> 
                                <?php endif; ?>
                                <?php if($order->status==9): ?>
                                 <button class="btn btn-danger btn-sm btn-rounded">Cancelled</button> 
                                 <?php endif; ?>
                        </div>
                    </div> 

                    <div class="col-md-4">
                        <div class="form-group ">
                            <h6>Press for Cancell or Edit</h6>
                            <a href="<?php echo e(route('changing-status-cencelled',['id'=>$order->id])); ?>" class="btn btn-danger btn-sm btn-rounded" >Cancell</a> 
                            <a href="<?php echo e(route('order-edit',['id'=>$order->id])); ?>" class="btn btn-info btn-sm btn-rounded">Edit</a>
                            
                        </div>
                    </div> 

                    <div class="col-md-4">
                        <div class="form-group ">
                            <h6>.</h6>
                            <?php if($order->status==0): ?> 
                                    <a href="<?php echo e(route('changing-status-confirmed',['id'=>$order->id])); ?>" title="Click for Order confirmed" class="btn btn-sm btn-rounded"  style="background: #03fcbe">Confirm</a> 
                                 <?php endif; ?>
                                <?php if($order->status==1): ?>
                                 <a href="<?php echo e(route('changing-status-picked',['id'=>$order->id])); ?>" title="Click for Order Picked" class="btn btn-sm btn-info btn-rounded">Picking</a> 
                                <?php endif; ?>
                                <?php if($order->status==3): ?>
                                 <a href="<?php echo e(route('changing-status-deliveried',['id'=>$order->id])); ?>" title="Click for Order Delivery" class="btn btn-success btn-sm btn-rounded">Delivery</a> 
                                <?php endif; ?>
                                <?php if($order->status==5): ?>
                                 <a href="<?php echo e(route('changing-status-returned',['id'=>$order->id])); ?>" title="Click for Order Return" class="btn btn-success btn-sm btn-rounded">Return </a> 
                                <?php endif; ?> 
                                <?php if($order->status==4): ?>
                                 <a href="<?php echo e(route('changing-status-deliveried',['id'=>$order->id])); ?>" title="Click for Order Re-deliveried" class="btn btn-success btn-sm btn-rounded">Re-Delivery</a> 
                                <?php endif; ?>
                                <?php if($order->status==9): ?>
                                 <a href="<?php echo e(route('changing-status-confirmed',['id'=>$order->id])); ?>" title="Click for Order Re-Confirm" class="btn btn-success btn-sm btn-rounded">Re-Confirm</a> 
                                 <?php endif; ?>
                        </div>
                    </div> 

                    

                </div>



            </div>
        </div>
        <!-- end select2 -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/orders/order-view-details.blade.php ENDPATH**/ ?>