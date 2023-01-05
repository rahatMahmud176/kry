<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li> 

                <li>
                    <a href="{{ route('dashboard') }}" class=""> 
                        <i class="fas fa-atlas"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    
                    <a href="{{ route('current-orders') }}" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('current-orders') }}">Current Orders</a></li> 
                        <li><a href="{{ route('all-orders') }}">All Orders</a></li> 
                    </ul>
                </li>  
               
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all-users') }}">All Users</a></li> 
                         
                    </ul>
                </li>

                
                <li class="menu-title">Cash & Party</li>

                

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Cash & Party</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('party.index') }}">Party Manage </a></li>  
                        <li><a href="#" data-toggle="modal" data-target="#modalCashIn">Cash In</a></li> 
                        <li><a href="#" data-toggle="modal" data-target="#modalExpense" >Expense/Payment</a></li>  
                    </ul>
                </li>

                 

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>All Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('today-payments') }}">Today Payments</a></li> 
                        <li><a href="{{ route('cash-in-report') }}">Cash In Report</a></li> 
                        <li><a href="{{ route('courier-orders') }}">Today Courier</a></li> 
                        <li><a href="{{ route('home-delivery-orders') }}">Today H.D</a></li>
                        <li><a href="{{ route('all-advance') }}">Today Advance</a></li>
                        <li><a href="{{ route('todaypick-advance') }}">Today Pick Advance</a></li>
                        <li><a href="{{ route('today-delivery') }}">Today Deliveried</a></li> 
                        <li><a href="{{ route('picked-orders') }}">Courier Due</a></li> 
                        <li><a href="{{ route('cash-statement') }}">Cash Statment</a></li> 
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Report for excel</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('excel-today-orders') }}">Today Orders</a></li> 
                    </ul>
                </li>
              

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>



<div class="modal fade" id="modalCashIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cash In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ Form::open(['route'=>'cash-in','method'=>'POST']) }}
                <div class="form-group">
                    <label for="">From</label>
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
               
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Cash In</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

  


  <div class="modal fade" id="modalExpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Expense/Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ Form::open(['route'=>'payment','method'=>'POST']) }}
                <div class="form-group">
                    <label for="">To</label>
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
               
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Pay</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
  