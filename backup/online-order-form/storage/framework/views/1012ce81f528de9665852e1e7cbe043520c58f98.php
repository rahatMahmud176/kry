
<?php $__env->startSection('title'); ?>
    All Users
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



                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>

                            <tr> 
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type/Status</th>
                                <th>Action</th> 
                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->adminName); ?></td>
                                    <td><?php echo e($item->adminEmail); ?></td> 
                                    <td>
                                        <?php if($item->adminType == 9): ?>
                                            <button type="button" class="btn btn-warning btn-sm btn-rounded"
                                                data-toggle="modal" data-target=".exampleModal">
                                                pending
                                            </button>
                                        <?php endif; ?>
                                        <?php if($item->adminType == 1): ?>
                                            <a href="#"
                                                 class="btn btn-sm btn-rounded"
                                                style="background: #03fcbe">Super Admin</a>
                                        <?php endif; ?>
                                        <?php if($item->adminType == 2): ?>
                                            <a href="#"
                                                 class="btn btn-sm btn-rounded"
                                                style="background: #03fcbe">Approved</a>
                                        <?php endif; ?>
                                        <?php if($item->adminType == 8): ?>
                                            <a href="<?php echo e(route('changing-status-deliveried', ['id' => $item->id])); ?>" 
                                                class="btn btn-danger btn-sm btn-rounded">Blocked</a>
                                        <?php endif; ?>  
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <?php if($item->adminType == 9): ?>
                                            <a href="<?php echo e(route('change-approval-user-status',['id'=>$item->id])); ?>"
                                                 class="btn btn-success btn-sm btn-rounded">Approve</a>
                                        <?php endif; ?>
                                        <?php if($item->adminType == 2): ?>
                                            <a href="<?php echo e(route('change-block-user-status',['id'=>$item->id])); ?>"
                                                 class="btn btn-danger btn-sm btn-rounded">Block</a>
                                        <?php endif; ?>
                                        <?php if($item->adminType == 8): ?>
                                            <a href="<?php echo e(route('change-unblock-user-status',['id'=>$item->id])); ?>"
                                                 class="btn btn-info btn-sm btn-rounded">Un-Block</a>
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
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/admin/all-users.blade.php ENDPATH**/ ?>