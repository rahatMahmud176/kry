@extends('back-end.master')

@section('title')
    All Orders
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
        {{ Form::open(['route' => 'filter-orders', 'method' => 'POST']) }}
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
                    <label for="" class="d-none d-md-block">-</label>
                    <button type="submit" class="btn btn-outline-warning container-fluid">Filter</button>
                </div>
            </div>
            <div class="col-md-2 d-none d-md-block">
                <div class="form-group">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="" class="d-none d-md-block">-</label> 
                    <a href="{{ route('confirm-orders') }}" class="btn btn-success">Today Orders <i class="fas fa-check-circle"></i></a> 
                </div>
            </div> 
            <div class="col-md-3">
                <div class="form-group">
                    <label for="" class="d-none d-md-block">-</label> 
                    <a href="{{ route('pending-orders') }}" class="btn btn-warning">Today Pending <i class="bx bx-loader bx-spin font-size-16 align-middle mr-2"></i></a> 
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
                     
                @endif
                </u>
            </h3>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">



                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>

                                <tr>
                                    <th>Order Number</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Phone Number</th>
                                    <th>Product Name</th>
                                    <th>Status</th>
                                    <th>View </th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>KRYINT#00{{ $item->id }}</td>
                                        <td>{{ date('d-M | h:i A', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->firstName }}</td>
                                        <td>{{ Str::limit($item->address,15) }} <sup
                                            class="badge {{ $item->zone == 'outsideDhaka' ? 'badge-primary' : 'badge-success' }}">
                                            {{ $item->zone == 'outsideDhaka' ? 'Courier' : 'H.D' }}
                                        </sup>
                                     </td>
                                        <td>{{ $item->phoneNumber }}</td>
                                        <td>{{ $item->productName }}</td>
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
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('order-view-detail', ['id' => $item->id]) }}"
                                                class=" "><i class="fa fa-eye" aria-hidden="true"></i></a> 
                                        </td>
                                        {{-- <td>
                                <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                            </td> --}}
                                    </tr>
                                @endforeach 
                                   
                            </tbody>
                            
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
    <style>
svg {
overflow: hidden;
vertical-align: middle;
width: 30px;
}
p {
    margin-top: 15px;
    margin-bottom: 1rem;
}
    </style>
@endsection
