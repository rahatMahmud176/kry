
<?php $__env->startSection('title'); ?>
    Orders Date
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Data Tables</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo e(Form::open(['route'=>'excel-date-filter-orders','method' => 'POST'])); ?>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="">-</label>
                                <button type="submit" class="btn btn-outline-warning container-fluid">Filter</button>
                            </div>
                        </div>
                    </div>
                    <?php echo e(Form::close()); ?>


                    <div class="col-md-3 mx-auto">
                        <h3 class="">
                            <u>
                            <?php if(isset($requestDate)): ?>
                                <?php echo e(date('d-M-y', strtotime($requestDate))); ?>

                            <?php else: ?>
                                <?php echo e(date('d-M-y')); ?>

                            <?php endif; ?>
                            </u>
                        </h3>
                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr> 
                                <th>SL.</th>
                                <th>Date</th>
                                <th>Product Name</th>
                                <th>Zone</th>
                                <th>Location</th>
                                <th>Shipping Method</th>
                                <th>Pay Method</th>
                                <th>Price</th> 
                                <th>Advance</th>
                                <th>Due</th>
                                <th>Delivery Status</th>
                                
                                
                            </tr>
                        </thead>

                        <?php
                            $i = 1;
                            $total = 0;
                        ?>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e(date('d-M-y', strtotime($item->created_at))); ?></td>
                                    <td><?php echo e($item->productName); ?></td>
                                    <td><?php echo e($item->zone=='outsideDhaka'?'Outside Dhaka':'Inside Dhaka'); ?></td>
                                    <td><?php echo e($item->address); ?></td>
                                    <td><?php echo e($item->shippingMethod); ?></td>
                                    <td><?php echo e($item->payMethod); ?></td>
                                    <td><?php echo e($item->price); ?></td>
                                    <td><?php echo e($item->payAmount); ?></td>
                                    <td><?php echo e($item->price-$item->payAmount); ?></td> 
                                    <td>
                                        <?php if($item->status == 0): ?>
                                        <button type="button" class="btn btn-warning btn-sm btn-rounded"
                                            data-toggle="modal" data-target=".exampleModal">
                                            pending
                                        </button>
                                    <?php endif; ?>
                                    <?php if($item->status == 1): ?>
                                        <a href="<?php echo e(route('changing-status-picked', ['id' => $item->id])); ?>"
                                            title="Click for Order Picked" class="btn btn-sm btn-rounded"
                                            style="background: #03fcbe">Confirmed</a>
                                    <?php endif; ?>
                                    <?php if($item->status == 3): ?>
                                        <a href="<?php echo e(route('changing-status-deliveried', ['id' => $item->id])); ?>"
                                            title="Click for Order Deliveried"
                                            class="btn btn-info btn-sm btn-rounded">Picked</a>
                                        
                                    <?php endif; ?>
                                    <?php if($item->status == 5): ?>
                                        <a href="<?php echo e(route('changing-status-returned', ['id' => $item->id])); ?>"
                                            title="Click for Order Returned"
                                            class="btn btn-success btn-sm btn-rounded">Deliveried</a>
                                    <?php endif; ?>
                                    <?php if($item->status == 4): ?>
                                        <a href="<?php echo e(route('changing-status-deliveried', ['id' => $item->id])); ?>"
                                            title="Click for Order Re-Deliveried"
                                            class="btn btn-danger btn-sm btn-rounded">Returned</a>
                                    <?php endif; ?>
                                    <?php if($item->status == 9): ?>
                                        <a href="<?php echo e(route('changing-status-confirmed', ['id' => $item->id])); ?>"
                                            title="Click for Order Re-Confirmation"
                                            class="btn btn-danger btn-sm btn-rounded">Cancelled</a>
                                    <?php endif; ?>    
                                    </td> 

                                    
                                </tr>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </tbody>
                        
                    </table>

                </div>

            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/reports/today-orders.blade.php ENDPATH**/ ?>