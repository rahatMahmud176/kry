@extends('back-end.master')

@section('title')
    Edit Order
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-11 mx-auto">
        <div class="card pt-5">
              <div class="card-body">

                <h1 class="solaimanlipi">KRYINT#00{{ $item->id }} | Order Edit</h1>
                 
                <br>
                 

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2>Product Info</h2>

                {{ Form::open(['route' =>'order-edit-submit', 'method' => 'POST']) }}
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group ">
                            <label for="" class=" ">Product Name:</label> <span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" name="productName" id="" value="{{ $item->productName }}">
                            <input type="hidden" value="{{ $item->id }}" name="id">
                        </div>

                        <div class="form-group ">
                            <label class="control-label  ">Variant</label> <br>
                            <small class="text-black-50 solaimanlipi">[পণ্যের ভেরিয়েন্ট লিখুন। যেমনঃ 10,000 MAh,
                                4/64GB]</small>
                            <input type="text" class="form-control " name="variant" id="" value="{{ $item->variant }}">
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="form-group ">
                            <label for="" class="">Product Price:</label><span
                                class="text-danger">*</span>

                            <input type="text" class="form-control" name="price" id="" value="{{ $item->price }}">
                        </div>

                        <div class="form-group ">
                            <label class="control-label ">Product Type</label> <span class="text-danger">*</span> <br>
                            <small class="text-black-50 solaimanlipi ">[আপনার পছন্দকৃত পন্যটি কোন ক্যাটাগরির?]</small>
                            <select name="productType" class="select2 form-control" id="">
                                <option value="mobile" {{ $item->productType=='mobile'?'selected':'' }}>Mobile Phones</option>
                                <option value="gadgets" {{ $item->productType=='gadgets'?'selected':'' }}>Gadgets</option>
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
                            <input type="text" class="form-control" name="firstName" id="" value="{{ $item->firstName }}">
                        </div>
                        <div class="form-group ">
                            <label for="" class="">Phone Number:</label><span class="text-danger">*</span>
                            <input type="tel" class="form-control" name="phoneNumber" id="" value="{{ $item->phoneNumber }}">
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form-group ">
                            <label for="" class="">Last Name:</label>
                            <input type="text" class="form-control" name="lastName" id="" value="{{ $item->lastName }}"  placeholder="Optional">
                        </div>
                        <div class="form-group ">
                            <label for="" class="">Email:</label>
                            <input type="email" class="form-control" name="email" id="" value="{{ $item->email }}" placeholder="Optional">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group ">
                            <label for="" class="">Address:</label><span class="text-danger">*</span>
                            <textarea name="address" class="form-control">{{ $item->address }}</textarea>
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
                                                id="zone1" value="outsideDhaka" {{ $item->zone=='outsideDhaka'?'checked':'' }}>
                                            <label class="form-check-label" for="zone1">
                                                outside Dhaka
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="zone"
                                                id="zone2" value="insideDhaka" {{ $item->zone=='insideDhaka'?'checked':'' }}>
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
                                                id="shipping1" value="cashOnDelivery" {{ $item->shippingMethod=='cashOnDelivery'?'checked':'' }}>
                                            <label class="form-check-label" for="shipping1">
                                                Cash On Delivery
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="shippingMethod"
                                                id="shipping2" value="freeShipping" {{ $item->shippingMethod=='freeShipping'?'checked':'' }}>
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
                                <option value="bkash" {{ $item->payMethod=='bkash'?'selected':''}}>Bkash</option>
                                <option value="rocket" {{ $item->payMethod=='rocket'?'selected':''}}>Rocket</option>
                                <option value="nagad" {{ $item->payMethod=='nagad'?'selected':''}}>Nagad</option>
                                <option value="bank" {{ $item->payMethod=='bank'?'selected':''}}>Bank Payment</option>
                            </select>
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Your Account Number</label> <br>
                            <small class="text-black-50 solaimanlipi">[ ব্যাংক পেমেন্ট করে থাকলে আপনার একাউন্ট
                                নাম্বারটি দিন অথাবা, বিকাশ/নগদ/রেকেট নাম্বারটি এখানে দিন]</small> 
                            <input type="number" class="form-control" name="customerAccountNo" id="" value="{{ $item->customerAccountNo }}">
                        </div>

                    </div>


                    <div class="col-lg-6">

                        <div class="form-group  ">
                            <label class="control-label">Which Number</label>
                            <select name="ourAccountNo" class="form-control select2"> 
                                <option value="01707545044" {{ $item->ourAccountNo=='01707545044'?'selected':''}}>01707545044 (Bkash Personal)</option> 
                                <option value="1502390409001-city" {{ $item->ourAccountNo=='1502390409001-city'?'selected':''}}>1502390409001 (City Bank)</option> 
                                <option value="255.110.2036-dbbl" {{ $item->ourAccountNo=='255.110.2036-dbbl'?'selected':''}}>255.110.2036 (DBBL)</option> 
                                <option value="0016-0210031760-mtb" {{ $item->ourAccountNo=='0016-0210031760-mtb'?'selected':''}}>0016-0210031760 (MTB)</option>  
                                <option value="1802101000002477-ucb" {{ $item->ourAccountNo=='1802101000002477-ucb'?'selected':''}}>1802101000002477 (UCB)</option> 
                                <option value="1531204640420001-brac" {{ $item->ourAccountNo=='1531204640420001-brac'?'selected':''}}>1531204640420001 (BRAC)</option>
                                <option value="others" {{ $item->ourAccountNo=='others'?'selected':''}}>Others way</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="" class="">Transition ID:</label> <br>
                            <small class="text-black-50 solaimanlipi">[ আপনার পেমেন্টকৃত ট্রাঞ্জিশন আইডি টি এখানে দিন।
                                <br> যেমনঃ TrxID123abcD ]</small>

                            <input type="text" class="form-control" name="tnxId" id=""
                                placeholder="Optional" value="{{ $item->tnxId }}">
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="form-group ">
                            <label for="" class="">Payment Amount:</label>
                            <input type="number" class="form-control" name="payAmount" id="" value="{{ $item->payAmount }}">
                        </div>
                    </div>

                    <div class="col-lg-12"> 
                        <button type="submit" class="btn btn-success container-fluid">Save Changes</button>
                    </div>


                </div>

                {{ Form::close() }}

            </div>
        </div>
        <!-- end select2 -->
    </div>
</div>
@endsection