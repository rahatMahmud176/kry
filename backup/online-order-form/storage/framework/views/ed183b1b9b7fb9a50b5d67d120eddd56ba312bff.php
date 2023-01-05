

<?php $__env->startSection('title'); ?>
    All Orders
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
        <?php echo e(Form::open(['route' => 'filter-orders', 'method' => 'POST'])); ?>

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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">



                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>

                                <tr>
                                    <th>Date</th>
                                    <th>Order Number</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Phone Number</th>
                                    <th>Product Name</th>
                                    <th>Status</th>
                                    <th>View Details</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(date('d-M-y', strtotime($item->created_at))); ?></td>
                                        <td>KRYINT#00<?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->firstName); ?></td>
                                        <td><?php echo e($item->address); ?> <sup
                                                class="badge <?php echo e($item->zone == 'outsideDhaka' ? 'badge-primary' : 'badge-success'); ?>">
                                                <?php echo e($item->zone == 'outsideDhaka' ? 'C.O.D' : 'H.D'); ?>

                                            </sup> </td>
                                        <td><?php echo e($item->phoneNumber); ?></td>
                                        <td><?php echo e($item->productName); ?></td>
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
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="<?php echo e(route('order-view-detail', ['id' => $item->id])); ?>"
                                                class="btn btn-primary btn-sm btn-rounded">View Details</a>

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

<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/orders/all-orders.blade.php ENDPATH**/ ?>