@extends('back-end.master')
@section('title')
    Courier Delivery
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

                        <h4 class="card-title">Buttons example</h4>
                        <p class="card-title-desc">The Buttons extension for DataTables
                            provides a common set of options, API methods and styling to display
                            buttons on a page that will interact with a DataTable. The core library
                            provides the based framework upon which plug-ins can built.
                        </p>

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
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($orders as $item)
                                <tr>
                                    <td>KRYINT#00{{ $item->id }}</td>
                                    <td>{{ date('d-M-y', strtotime($item->created_at)) }}</td>
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
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
@endsection
