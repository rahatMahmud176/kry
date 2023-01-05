

<?php $__env->startSection('title'); ?>
    Edit Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
<div class="row">
    <div class="col-lg-11 mx-auto">
        <div class="card pt-5">
              <div class="card-body">

                <h1 class="solaimanlipi">KRYINT#00<?php echo e($item->id); ?> | Order Edit</h1>
                 
                <br>
                 

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <h2>Product Info</h2>

                <?php echo e(Form::open(['route' =>'order-edit-submit', 'method' => 'POST'])); ?>

                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group ">
                            <label for="" class=" ">Product Name:</label> <span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" name="productName" id="" value="<?php echo e($item->productName); ?>">
                            <input type="hidden" value="<?php echo e($item->id); ?>" name="id">
                        </div>

                        <div class="form-group ">
                            <label class="control-label  ">Variant</label> <br>
                            <small class="text-black-50 solaimanlipi">[পণ্যের ভেরিয়েন্ট লিখুন। যেমনঃ 10,000 MAh,
                                4/64GB]</small>
                            <input type="text" class="form-control " name="variant" id="" value="<?php echo e($item->variant); ?>">
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="form-group ">
                            <label for="" class="">Product Price:</label><span
                                class="text-danger">*</span>

                            <input type="text" class="form-control" name="price" id="" value="<?php echo e($item->price); ?>">
                        </div>

                        <div class="form-group ">
                            <label class="control-label ">Product Type</label> <span class="text-danger">*</span> <br>
                            <small class="text-black-50 solaimanlipi ">[আপনার পছন্দকৃত পন্যটি কোন ক্যাটাগরির?]</small>
                            <select name="productType" class="select2 form-control" id="">
                                <option value="mobile" <?php echo e($item->productType=='mobile'?'selected':''); ?>>Mobile Phones</option>
                                <option value="gadgets" <?php echo e($item->productType=='gadgets'?'selected':''); ?>>Gadgets</option>
                            </select>
                        </div>



                    </div>

                    <div class="col-lg-6">



                    </div>
                </div>



            </div>
        </div>
        <!-- end select2 -->
    </div>
</div>


<div class="row">
    <div class="col-lg-11 mx-auto">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Shipping Info:</h4>
                 


                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group ">
                            <label for="" class="">First Name:</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="firstName" id="" value="<?php echo e($item->firstName); ?>">
                        </div>
                        <div class="form-group ">
                            <label for="" class="">Phone Number:</label><span class="text-danger">*</span>
                            <input type="tel" class="form-control" name="phoneNumber" id="" value="<?php echo e($item->phoneNumber); ?>">
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form-group ">
                            <label for="" class="">Last Name:</label>
                            <input type="text" class="form-control" name="lastName" id="" value="<?php echo e($item->lastName); ?>"  placeholder="Optional">
                        </div>
                        <div class="form-group ">
                            <label for="" class="">Email:</label>
                            <input type="email" class="form-control" name="email" id="" value="<?php echo e($item->email); ?>" placeholder="Optional">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group ">
                            <label for="" class="">Address:</label><span class="text-danger">*</span>
                            <textarea name="address" class="form-control"><?php echo e($item->address); ?></textarea>
                        </div>
                    </div>

                    <div class="col-lg-6 pl-4">

                        <div class="form-group pt-3">

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm- pt-0">Zone</legend>
                                    <div class="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="zone"
                                                id="zone1" value="outsideDhaka" <?php echo e($item->zone=='outsideDhaka'?'checked':''); ?>>
                                            <label class="form-check-label" for="zone1">
                                                outside Dhaka
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="zone"
                                                id="zone2" value="insideDhaka" <?php echo e($item->zone=='insideDhaka'?'checked':''); ?>>
                                            <label class="form-check-label" for="zone2">
                                                Inside Dhaka
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>

                    <div class="col-lg-6 pl-4">

                        <div class="form-group pt-3">

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm- pt-0">Shipping Method</legend>
                                    <div class="">

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shippingMethod"
                                                id="shipping1" value="cashOnDelivery" <?php echo e($item->shippingMethod=='cashOnDelivery'?'checked':''); ?>>
                                            <label class="form-check-label" for="shipping1">
                                                Cash On Delivery
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="shippingMethod"
                                                id="shipping2" value="freeShipping" <?php echo e($item->shippingMethod=='freeShipping'?'checked':''); ?>>
                                            <label class="form-check-label" for="shipping2">
                                                Free Shipping (For Full Payment)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>



                </div>



            </div>
        </div>
        <!-- end select2 -->
    </div>
</div>

<div class="row">
    <div class="col-lg-11 mx-auto">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Payment Info:</h4>
                <p class="card-title-desc  solaimanlipi">পেমেন্ট সংক্রান্ত ইনফরমেশনগুলি দিন।</p>
                <br>
               
                 
                

                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group  ">
                            <label class="control-label">Payment Method</label>
                            <select name="payMethod" class="form-control select2">
                                <option>Select</option>
                                <option value="bank" <?php echo e($item->payMethod=='bank'?'selected':''); ?>>Bank Payment</option>
                                <option value="bkash" <?php echo e($item->payMethod=='bkash'?'selected':''); ?>>Bkash</option>
                                <option value="rocket" <?php echo e($item->payMethod=='rocket'?'selected':''); ?>>Rocket</option>
                                <option value="nagad" <?php echo e($item->payMethod=='nagad'?'selected':''); ?>>Nagad</option>
                            </select>
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Your Account Number</label> <br>
                            <small class="text-black-50 solaimanlipi">[ ব্যাংক পেমেন্ট করে থাকলে আপনার একাউন্ট
                                নাম্বারটি দিন অথাবা, বিকাশ/নগদ/রেকেট নাম্বারটি এখানে দিন]</small> 
                            <input type="number" class="form-control" name="customerAccountNo" id="" value="<?php echo e($item->customerAccountNo); ?>">
                        </div>

                    </div>


                    <div class="col-lg-6">

                        <div class="form-group  ">
                            <label class="control-label">Which Number</label>
                            <select name="ourAccountNo" class="form-control select2">
                                <option>Select</option>
                                <option value="01707545044" <?php echo e($item->ourAccountNo=='01707545044'?'selected':''); ?>>01707545044</option>
                                <option value="01978545044" <?php echo e($item->ourAccountNo=='01978545044'?'selected':''); ?>>01978545044</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="" class="">Transition ID:</label> <br>
                            <small class="text-black-50 solaimanlipi">[ আপনার পেমেন্টকৃত ট্রাঞ্জিশন আইডি টি এখানে দিন।
                                <br> যেমনঃ TrxID123abcD ]</small>

                            <input type="text" class="form-control" name="tnxId" id=""
                                placeholder="Optional" value="<?php echo e($item->tnxId); ?>">
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="form-group ">
                            <label for="" class="">Payment Amount:</label>
                            <input type="number" class="form-control" name="payAmount" id="" value="<?php echo e($item->payAmount); ?>">
                        </div>
                    </div>

                    <div class="col-lg-12"> 
                        <button type="submit" class="btn btn-success container-fluid">Save Changes</button>
                    </div>


                </div>

                <?php echo e(Form::close()); ?>


            </div>
        </div>
        <!-- end select2 -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/back-end/orders/edit-order.blade.php ENDPATH**/ ?>