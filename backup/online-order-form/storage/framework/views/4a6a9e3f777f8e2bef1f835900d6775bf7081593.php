

<?php $__env->startSection('title'); ?>
   Admin Register page 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
 
<div class="account-pages my-5 pt-sm-5">
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8 col-lg-6 col-xl-5">
               <div class="card overflow-hidden">
                   <div class=" " style="background: #d7f5f3">
                       <div class="row">
                           <div class="col-7">
                               <div class="text-primary p-4">
                                   <h5 class="text-primary">Welcome Back !</h5>
                                   <p>Register as a Admin to KRY INTERNATIONAL.</p>
                               </div>
                           </div>
                           <div class="col-5 align-self-end">
                               <img src="<?php echo e(asset('customImage/')); ?>kry-login-logo.jpg" alt="" class="img-fluid">
                           </div>
                       </div>
                   </div>
                   <div class="card-body pt-0">
                       <div>
                           <a href="index.html">
                               <div class="avatar-md profile-user-wid mb-4">
                                   <span class="avatar-title rounded-circle bg-light">
                                       <img src="<?php echo e(asset('/')); ?>customImage/kry-login-logo.jpg" alt="" class="rounded-circle"
                                           height="34">
                                   </span>
                               </div>
                           </a>
                       </div>
                       <div class="p-2">
                            <?php echo e(Form::open(['route'=>'register-submit','method'=>'POST','class'=>'form-horizontal'])); ?>

                                

                               <div class="form-group">
                                   <label for="username">Name</label>
                                   <input type="text" class="form-control" id="username"
                                     name="adminName"  placeholder="Enter username">
                               </div>

                               <div class="form-group">
                                   <label for="email">Email</label>
                                   <input name="adminEmail" type="text" class="form-control" id="email"
                                     name="email"  placeholder="Enter email">
                               </div>

                               <div class="form-group">
                                   <label for="userpassword">Password</label>
                                   <input type="password" class="form-control" id="userpassword"
                                     name="password"  placeholder="Enter password">
                               </div>
                               <div class="form-group">
                                   <label for="userpassword">Re-Password</label>
                                   <input type="password" class="form-control" id="userpassword"
                                     name="rePassword"  placeholder="Enter password">
                               </div>

                               <div class="custom-control custom-checkbox">
                                   <input type="checkbox" class="custom-control-input" id="customControlInline">
                                   <label class="custom-control-label" for="customControlInline">Remember
                                       me</label>
                               </div>

                               <div class="mt-3">
                                   <button class="btn btn-primary btn-block waves-effect waves-light"
                                       type="submit" style="background: #04d9ce">Register</button>
                               </div>


                               <div class="mt-4 text-center">
                                   <a href="auth-recoverpw.html" class="text-muted"><i
                                           class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                               </div>
                          <?php echo e(Form::close()); ?>

                       </div>

                   </div>
               </div>
               <div class="mt-5 text-center">

                   <div>
                       <p>Already have an account ? <a href="<?php echo e(route('admin-login-form')); ?>"
                               class="font-weight-medium text-primary"> Login now </a> </p>
                       <p>?? 2022 KYR INTERNATIONAL <i class="mdi mdi-heart text-danger"></i> KRY</p>
                   </div>
               </div>

           </div>
       </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/admin/register.blade.php ENDPATH**/ ?>