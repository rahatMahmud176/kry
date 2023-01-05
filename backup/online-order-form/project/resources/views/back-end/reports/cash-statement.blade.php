@extends('back-end.master')
@section('title')
    Cash Statement 
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
        
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">  
                    <h3 >Cash Statement</h3>
                    <table id=" " class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr> 
                                <th>SL.</th>
                                <th>Date</th>  
                                <th>Description</th> 
                                
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>

                        @php
                            $i = 1;
                            $total = 0;
                        @endphp
                        <tbody>
                            @foreach ($statements as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ date('d-M-y | h:i A', strtotime($item->created_at)) }}</td>  
                                    <td>{{ $item->description }}</td>
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