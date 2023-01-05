
<?php $__env->startSection('title'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Detail</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <h4 class="float-right font-size-16">KRYINT#00<?php echo e($order->id); ?></h4>
                        <div class="mb-4">
                            <h2>KRY International</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                <strong>Billed From:</strong><br>
                                KRY International<br>
                                LEVEL-5<br> 
                                BLOCK-C<br> 
                                SHOP-55,66<br> 
                            </address>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <address class="mt-2 mt-sm-0">
                                <strong>Shipped To:</strong><br>
                               <strong>Name:</strong> <?php echo e($order->firstName.' '.$order->lastName); ?><br>
                               <strong>Address:</strong> <?php echo e($order->address); ?><br>
                               <strong>Phone: </strong> <?php echo e($order->phoneNumber); ?><br>
                               <strong>Email: </strong> <?php echo e($order->email); ?><br>
                                 
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            <address>
                                <strong>Payment Info:</strong><br>
                               <strong>Method:</strong> <?php echo e($order->payMethod); ?><br>
                                <strong>Transition ID:</strong> <?php echo e($order->tnxId); ?>

                            </address>
                        </div>
                        <div class="col-sm-6 mt-3 text-sm-right">
                            <address>
                                <strong>Order Date:</strong><br>
                               <?php echo e(date("d-M-y", strtotime($order->created_at))); ?><br><br>
                            </address>
                        </div>
                    </div>
                    <div class="py-2 mt-3">
                        <h3 class="font-size-15 font-weight-bold">Products</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">No.</th>
                                    <th>Item</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td><?php echo e($order->productName.' '.$order->variant); ?></td>
                                    <td class="text-right"><?php echo e($order->price); ?>.00/-</td>
                                </tr> 
                                 
                                

                                 
                                <tr>
                                    <td colspan="2" class="text-right">Sub Total</td>
                                    <td class="text-right"><?php echo e($order->price); ?>.00 /-</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0 text-right">
                                        <strong>Advance:</strong></td>
                                    <td class="border-0 text-right"> (-) <?php echo e($advance = $order->payAmount); ?>.00/-</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0 text-right">
                                        <strong>Shipping</strong>  </td>
                                    <td class="border-0 text-right">(+)<?php echo e($shippingCharge = 120+($order->price-$order->payAmount)*0.01); ?>.00/-</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0  text-right">
                                        <strong>Total</strong></td>
                                    <td class="border-0 text-right"><h4 class="m-0"><?php echo e($order->price+$shippingCharge-$advance); ?>.00/-</h4></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0  text-left">
                                       <h2>Warranty Policy</h2>
                                       <p>* 10 Days Replacement. <br>
                                        * 30 Days Parts Warranty without Display. <br>
                                        * Lifetime Service Warranty.
                                        

                                       </p>
                                    </td>
                                    <td class="border-0 text-right"> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-print-none">
                        <div class="float-right">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
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
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/reports/invoice.blade.php ENDPATH**/ ?>