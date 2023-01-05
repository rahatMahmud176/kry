
<?php $__env->startSection('title'); ?>
    Advance 
    <?php if(isset($requestDate)): ?>
        <?php echo e(date('d-M-y', strtotime($requestDate))); ?>

    <?php else: ?>
        <?php echo e(date('d-M-y')); ?>

    <?php endif; ?>
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
                        <?php echo e(Form::open(['route' => 'filter-advance', 'method' => 'POST'])); ?>

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
                                    <th>Order Number</th>
                                    <th>Method</th>
                                    <th>Our A/C NO.</th>
                                    <th>Customer A/C NO.</th>
                                    <th>Amount</th>
                                    
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
                                        <td>KRYINT#00<?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->payMethod); ?></td>
                                        <td><?php echo e($item->ourAccountNo); ?></td>
                                        <td><?php echo e($item->customerAccountNo); ?></td>
                                        <td><?php echo e($item->payAmount); ?></td>

                                        
                                    </tr>
                                    <?php
                                        $total = $total + $item->payAmount;
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>Total</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td colspan="" class="text-right"><strong>TOTAL = </strong></td>
                                    <td colspan="" class="">
                                        <strong><?php echo e($total); ?></strong>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>

                    </div>

                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/payment/all-advance.blade.php ENDPATH**/ ?>