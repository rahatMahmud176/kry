@extends('back-end.master')
@section('title')
    All Users
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
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{ $item->adminName }}</td>
                                    <td>{{ $item->adminEmail }}</td> 
                                    <td>
                                        @if ($item->adminType == 9)
                                            <button type="button" class="btn btn-warning btn-sm btn-rounded"
                                                data-toggle="modal" data-target=".exampleModal">
                                                pending
                                            </button>
                                        @endif
                                        @if ($item->adminType == 1)
                                            <a href="#"
                                                 class="btn btn-sm btn-rounded"
                                                style="background: #03fcbe">Super Admin</a>
                                        @endif
                                        @if ($item->adminType == 2)
                                            <a href="#"
                                                 class="btn btn-sm btn-rounded"
                                                style="background: #03fcbe">Approved</a>
                                        @endif
                                        @if ($item->adminType == 8)
                                            <a href="{{ route('changing-status-deliveried', ['id' => $item->id]) }}" 
                                                class="btn btn-danger btn-sm btn-rounded">Blocked</a>
                                        @endif  
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        @if ($item->adminType == 9)
                                            <a href="{{ route('change-approval-user-status',['id'=>$item->id]) }}"
                                                 class="btn btn-success btn-sm btn-rounded">Approve</a>
                                        @endif
                                        @if ($item->adminType == 2)
                                            <a href="{{ route('change-block-user-status',['id'=>$item->id]) }}"
                                                 class="btn btn-danger btn-sm btn-rounded">Block</a>
                                        @endif
                                        @if ($item->adminType == 8)
                                            <a href="{{ route('change-unblock-user-status',['id'=>$item->id]) }}"
                                                 class="btn btn-info btn-sm btn-rounded">Un-Block</a>
                                        @endif

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

</div> <!-- container-fluid -->
@endsection