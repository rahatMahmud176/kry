

<?php $__env->startSection('title'); ?>
    Order Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card pt-5">
                <img class="card-img-top" src="customImage/headerImage.png" alt="Card image cap">
                <div class="card-body">

                    <h1 class="solaimanlipi">Order Form | KRY INTERNATIONAL</h1>
                    <p class="card-title-desc">Please FillUp the Order Form for you your Order place</p>
                    <br>
                    <h2 class="solaimanlipi text-bold">Our Branches</h2>
                    <p class="text-dark bg-soft-info p-3">𝗠𝗮𝗶𝗻 𝗕𝗿𝗮𝗻𝗰𝗵 Level 05 | Block C | Shop No 55,66
                        Bashundhara City Shopping Complex, Dhaka <br>
                        𝗢𝘁𝗵𝗲𝗿𝘀 𝗕𝗿𝗮𝗻𝗰𝗵 Level 06 | Block B | Shop No 04 Level 05 | Block B | Shop No 41
                        Bashundhara City. <br>
                        𝗝𝗮𝗺𝘂𝗻𝗮 𝗕𝗿𝗮𝗻𝗰𝗵 Level 4 | Block A | Shop No 0026A Level 4 | Block D | Shop 05A
                        𝗛𝗲𝗹𝗽𝗹𝗶𝗻𝗲 | 01305701918 <br>
                        𝗨𝘁𝘁𝗮𝗿𝗮 𝗕𝗿𝗮𝗻𝗰𝗵 4th Floor | Shop No 40 | Amir Complex, Azompur, Uttara
                        𝗛𝗲𝗹𝗽𝗹𝗶𝗻𝗲 | 01758625157 [10am - 8pm]<br>
                        𝗘𝘅𝗰𝗵𝗮𝗻𝗴𝗲 𝗦𝗵𝗼𝗽 Level 05 | Block C | Shop No 55,66 Bashundhara City
                        𝗛𝗲𝗹𝗽𝗹𝗶𝗻𝗲 | 01709846037 [10am - 8pm]<br>
                        𝗚𝗔𝗗𝗚𝗘𝗧 & 𝗔𝗖𝗖. 𝗦𝗛𝗢𝗣 Level 05 | Block C Shop No 42 Basundhara City
                        𝗛𝗼𝘁𝗹𝗶𝗻𝗲 : 01304348701<br>
                        𝗦𝗲𝗿𝘃𝗶𝗰𝗲 𝗖𝗲𝗻𝘁𝗲𝗿 Level 05 | Block C | Shop No 56 Bashundhara City
                        𝗛𝗲𝗹𝗽𝗹𝗶𝗻𝗲 | 01306907459 [10am - 8pm]
                    </p>

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

                    <?php echo e(Form::open(['route' => 'form-submit', 'method' => 'POST'])); ?>

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group ">
                                <label for="" class=" ">Product Name:</label> <span
                                    class="text-danger">*</span>
                                <input required type="text" maxlength="100" class="form-control" name="productName" id="">
                            </div>

                            <div class="form-group ">
                                <label class="control-label  ">Variant<span class="text-danger">*</span></label> <br>
                                <small class="text-black-50 solaimanlipi">[পণ্যের ভেরিয়েন্ট লিখুন। যেমনঃ 10,000 MAh,
                                    4/64GB]</small>
                                <input required maxlength="100"  type="text" class="form-control " name="variant" id="">
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group ">
                                <label for="" class="">Product Price:</label><span
                                    class="text-danger">*</span>

                                <input required type="text" maxlength="15" class="form-control" name="price" id="">
                            </div>

                            <div class="form-group ">
                                <label class="control-label ">Product Type</label> <span class="text-danger">*</span> <br>
                                <small class="text-black-50 solaimanlipi ">[আপনার পছন্দকৃত পন্যটি কোন ক্যাটাগরির?]</small>
                                <select required name="productType" class="select2 form-control" id="">
                                    <option value="mobile">Mobile PHone</option>
                                    <option value="gadgets">Gadgets</option>
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
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Shipping Info:</h4>
                    <p class="card-title-desc solaimanlipi">আপনি আপনার পন্যটি কোন ঠিকানায় শিপিং চাচ্ছেন? </p>
                    <br>
                    <p class="  solaimanlipi text-dark  bg-soft-dark p-3">
                        সম্মানিত গ্রাহক, <br>
                        সাধারণত বাংলাদেশের জেলা পর্যায় পর্যন্ত মোবাইল কুরিয়ার করে নেয়া যায়। ফুল পেমেন্ট করে ক্যাশ অন
                        ডেলিভারি ব্যাতিত অর্থাৎ, কোন রকম বাকী/কন্ডিশন ছাড়া ফোন অর্ডার করলে বাংলাদেশের কিছু সংখ্যক উপজেলা আছে
                        যেখানে প্রোডাক্ট ডেলিভারি নেয়া সম্ভব।
                        আর যদি আপনি মোবাইল এক্সেসরিজ অর্ডার করে থাকেন সেক্ষেত্রে উপজেলা পর্যায় পর্যন্ত কুরিয়ার যাবে।
                    </p>


                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group ">
                                <label for=""  class="">First Name:</label><span class="text-danger">*</span>
                                <input type="text" required maxlength="50" class="form-control" name="firstName" id="">
                            </div>
                            <div class="form-group ">
                                <label for="" class="">Phone Number:</label><span class="text-danger">*</span>
                                <input type="tel" required maxlength="11" minlength="11" class="form-control" name="phoneNumber" id="">
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="form-group ">
                                <label for="" class="">Last Name:</label>
                                <input type="text" class="form-control"   maxlength="50" name="lastName" id=""
                                    placeholder="Optional">
                            </div>
                            <div class="form-group ">
                                <label for="" class="">Email:</label>
                                <input type="email" class="form-control"   maxlength="65" name="email" id=""
                                    placeholder="Optional">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group ">
                                <label for=""  class="">Address:</label><span class="text-danger">*</span>
                                <textarea required name="address"   maxlength="250" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 pl-4">

                            <div class="form-group pt-3">

                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm- pt-0">Zone<span class="text-danger">*</span></legend>
                                        <div class="">
                                            <div class="form-check">
                                                <input required checked class="form-check-input" type="radio" name="zone"
                                                    id="zone1" value="outsideDhaka">
                                                <label  class="form-check-label" for="zone1">
                                                    outside Dhaka
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="zone"
                                                    id="zone2" value="insideDhaka">
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
                                        <legend class="col-form-label col-sm- pt-0">Shipping Method<span class="text-danger">*</span></legend>
                                        <div class="">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="shippingMethod"
                                                    id="shipping1" checked value="cashOnDelivery">
                                                <label class="form-check-label" for="shipping1">
                                                    Cash On Delivery
                                                </label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="shippingMethod"
                                                    id="shipping2" value="freeShipping">
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
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Payment Info:</h4>
                    <p class="card-title-desc  solaimanlipi">পেমেন্ট সংক্রান্ত ইনফরমেশনগুলি দিন।</p>
                    <br>
                    <p class="text-dark bg-soft-dark p-3 solaimanlipi">
                        সম্মানিত গ্রাহক, <br>
                        আপনি যদি ঢাকার বাহিরে থেকে অর্ডার করে থাকেন তাহলে ফ্রি শিপিং নিতে পারেন কোন প্রকার কুরিয়ার চার্জ
                        ছাড়া। সেক্ষেত্রে আপনাকে পন্যের সম্পূর্ণ মূল্য
                        ব্যাংকের মাধ্যমে পরিশোধ করে অর্ডার করতে হবে। এছাড়া আপনি আমাদের থেকে ক্যাশ অন ডেলিভারিতে প্রোডাক্ট
                        নিতে পারেন। সেক্ষেত্রে আপনার কুরিয়ার চার্জ হবেঃ <br>
                        * ১২০৳ + কন্ডিশন-চার্জ (হাজারে ১০৳)। ক্যাশ অন ডেলিভারিতে অর্ডার করতে প্রথমে ১০২০ টাকা সেন্ডমানি করতে
                        হবে।
                    </p>
                    <h4 class="solaimanlipi">ঢাকার ভিতর?</h4>
                    <p class=" solaimanlipi text-dark  bg-soft-dark p-3">
                        সম্মানিত গ্রাহক, <br>
                        আপনি যদি ঢাকার ভিতরে থেকে অর্ডার করে থাকেন তাহলে মাত্র ১২ ঘন্টার মধ্যে ডেলিভারি পেয়ে যাবেন। চার্জ
                        হবে মাত্র ১০০ টাকা।
                        আর ফুল পেমেন্ট করে অর্ডার করলে ফ্রি শিপিং পাচ্ছেন। আর, ক্যাশ অন ডেলিভারিতে অর্ডার করতে আমাদের
                        বিকাশ/নগদ/রকেট এ ৫১০ টাকা সেন্ডমানি করে অর্ডার করে ফেলুন।
                    </p>

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group  ">
                                <label class="control-label">Payment Method</label>
                                <select name="payMethod" class="form-control select2">
                                    <option>Select</option>
                                    <option value="bkash">Bkash</option>
                                    <option value="rocket">Rocket</option>
                                    <option value="nagad">Nagad</option>
                                    <option value="bank">Bank Payment</option>
                                </select>
                            </div>

                            <div class="form-group ">
                                <label class="control-label">Your Account Number</label> <br>
                                <small class="text-black-50 solaimanlipi">[ ব্যাংক পেমেন্ট করে থাকলে আপনার একাউন্ট
                                    নাম্বারটি দিন অথাবা, বিকাশ/নগদ/রেকেট নাম্বারটি এখানে দিন]</small> 
                                <input  type="number"   maxlength="50" class="form-control" name="customerAccountNo" id="">
                            </div>

                        </div>


                        <div class="col-lg-6">

                            <div class="form-group  ">
                                <label class="control-label">Which Number</label>
                                <select name="ourAccountNo" class="form-control select2">
                                    <option value="">Select</option>
                                    <option value="01707545044">01707545044</option>
                                    <option value="01978545044">01978545044</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="" class="">Transition ID:</label> <br>
                                <small class="text-black-50 solaimanlipi">[ আপনার পেমেন্টকৃত ট্রাঞ্জিশন আইডি টি এখানে দিন।
                                    <br> যেমনঃ TrxID123abcD ]</small>

                                <input type="text" class="form-control" name="tnxId" id=""
                                    placeholder="Optional">
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <div class="form-group ">
                                <label for="" class="">Payment Amount:</label>
                                <input type="number" class="form-control" name="payAmount" id="">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h2 class="solaimanlipi">ওয়ারেন্টি পলিসিঃ</h2>
                            <p class="text-dark solaimanlipi text-light bg-soft-dark p-3">
                                সম্মানিত গ্রাহক, <br>
                                আমাদের থেকে পন্য কিনলে আপনি পাচ্ছেন ১০ দিনের রিপ্লেসমেন্ট যেকোন ম্যানুফেকচারিং ইস্যুতে। আর
                                থাকছে লাইফ টাইম সার্ভিস ওয়ারেন্টি।
                            </p>
                            <button type="submit" class="btn btn-success container-fluid">Order Place</button>
                        </div>


                    </div>

                    <?php echo e(Form::close()); ?>


                </div>
            </div>
            <!-- end select2 -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\form\resources\views/front-end/form/form.blade.php ENDPATH**/ ?>