@extends('back-end.master')
@section('title')
    Manage Party
@endsection
@section('mainContent')
 
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <h4 class="card-header mt-0">Party Register Form:</h4>
                <div class="card-body">
                    {{ Form::open(['route'=>'party.store']) }}
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" name="name" id="" class="form-control" maxlength="40" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Party Name Here</small>
                        </div>
                        <div class="form-group">
                          <label for="">Description</label> 
                          <textarea name="description" id="" class="form-control" ></textarea>
                          <small id="helpId" class="text-muted">Party description Here</small>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success container-fluid">Save</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <h4 class="card-header mt-0">Party List</h4>
                <button class="btn btn-primary container" style="width: 20%" data-toggle="modal" data-target="#purchase">Purchase +</button>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Deu</th>
                            <th>Action</th> 
                        </tr>
                        </thead>


                        <tbody>
                    @foreach ($parties as $party)
                    <tr>
                        <th>Prt#00{{ $party->id }}</th>
                        <th>{{ $party->name }}</th>
                        <th>{{ $party->description }}</th>
                        <th>{{ $party->due }}</th>
                        <th>
                            <a href="{{ route('party-history',['id'=>$party->id]) }}"
                                class=" "><i class="fa fa-eye" aria-hidden="true"></i></a> 
                        </th> 
                    </tr>
                    @endforeach
                        
                        
                        
                      
                         
                        
                         
                         
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>

         

         
    </div>
    <!-- end row -->
<!-- end row -->


<div class="modal fade" id="purchase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Purchase</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ Form::open(['route'=>'purchase','method'=>'POST']) }}
                <div class="form-group">
                    <label for="">Party:</label>
                    <select name="partyId" class="form-control select2" id="" style="width: 100%">
                        @foreach ($parties as $party)  
                        <option value="{{ $party->id }}">{{ $party->name }}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Amount</label>
                    <input name="amount" class="form-control" type="number" id="">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" ></textarea>
                </div>
               
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Purchase</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
 
@endsection