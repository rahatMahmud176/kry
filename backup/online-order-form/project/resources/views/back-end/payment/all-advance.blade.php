@extends('back-end.master')
@section('title')
    Advance 
    @if (isset($requestDate))
        {{ date('d-M-y', strtotime($requestDate)) }}
    @else
        {{ date('d-M-y') }}
    @endif
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
                        {{ Form::open(['route' => 'filter-advance', 'method' => 'POST']) }}
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" name="date" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-md-2">
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

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Date</th>
                                    <th>Order Number</th>
                                    <th>Method</th>
                                    <th>Our A/C NO.</th>
                                    <th>Customer A/C NO.</th>
                                    <th>Shipping Method</th>
                                    <th>Amount</th>
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
                                        <td>KRYINT#00{{ $item->id }}</td>
                                        <td>{{ $item->payMethod }}</td>
                                        <td>{{ $item->ourAccountNo }}</td>
                                        <td>{{ $item->customerAccountNo }}</td>
                                        <td class="{{ $item->zone=='outsideDhaka'?'text-danger':'text-success' }}">{{ $item->zone=='outsideDhaka'?'COD':'HD' }}</td>
                                        <td>{{ $item->payAmount }}</td>

                                        {{-- <td>
                            <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                            <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                        </td> --}}
                                    </tr>
                                    @php
                                        $total = $total + $item->payAmount;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td>Total</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td>.</td>
                                    <td colspan="" class="text-right"><strong>TOTAL = </strong></td>
                                    <td colspan="" class="">
                                        <strong>{{ $total }}</strong>
                                    </td>
                                </tr>
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
