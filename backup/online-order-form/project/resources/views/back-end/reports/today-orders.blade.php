@extends('back-end.master')
@section('title')
    Orders Date
@endsection
@section('mainContent')
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
                    {{ Form::open(['route'=>'excel-date-filter-orders','method' => 'POST']) }}
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
                    {{ Form::close() }}

                    <div class="col-md-3 mx-auto">
                        <h3 class="">
                            <u>
                            @if (isset($requestDate))
                                {{ date('d-M-y', strtotime($requestDate)) }}
                            @else
                                {{ date('d-M-y') }}
                            @endif
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
                                
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>

                        @php
                            $i = 1;
                            $total = 0;
                        @endphp
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ date('d-M-y', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->productName }}</td>
                                    <td>{{ $item->zone=='outsideDhaka'?'Outside Dhaka':'Inside Dhaka' }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->shippingMethod }}</td>
                                    <td>{{ $item->payMethod }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->payAmount }}</td>
                                    <td>{{ $item->price-$item->payAmount }}</td> 
                                    <td>
                                        @if ($item->status == 0) 
                                            <a href="#" class="text-warning">pending<i class="bx bx-loader bx-spin font-size-16 align-middle mr-2"></i></a>
                                            @endif
                                        @if ($item->status == 1)
                                            <a href="#" style="color: #03fcbe">Confirm<i class="far fa-heart text-pink"></i></a>
                                            @endif
                                        @if ($item->status == 3)
                                            <a href="#" class="text-info">Picked <i class="fas fa-shuttle-van"></i> </a>
                                            @endif
                                        @if ($item->status == 5)
                                            <a href="#" class="text-success">Deliveried <i class="fa fa-check text-success" aria-hidden="true"></i></a>
                                            @endif
                                        @if ($item->status == 4)
                                            <a href="#" class="text-danger">Returned <i class="bx bx-block label-icon "></i></i></a>
                                            @endif
                                        @if ($item->status == 9)
                                            <a href="#"  class="text-danger">Cancelled <i class="fa fa-times text-danger" aria-hidden="true"></i></a>
                                            @endif
                                    </td> 

                                    {{-- <td>
                        <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                        <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                    </td> --}}
                                </tr>
                                
                            @endforeach 
                        </tbody>
                        {{-- <tfoot>
                        <tr>
                            <td>5</td>
                            <td>.</td>
                            <td>.</td>
                            <td>.</td>
                            <td>.</td>
                                <td colspan="" class="text-right"><strong>TOTAL = </strong></td>
                                <td colspan="" class="">  
                                    <strong>{{ $total }}</strong>
                                 </td>
                        </tr>
                    </tfoot> --}}
                    </table>

                </div>

            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->
@endsection