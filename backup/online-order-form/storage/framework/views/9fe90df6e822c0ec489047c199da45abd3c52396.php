<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li> 

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('all-orders')); ?>">All Orders</a></li>
                        <li><a href="<?php echo e(route('home-delivery-orders')); ?>">Home Delivery</a></li>
                        <li><a href="<?php echo e(route('courier-orders')); ?>">Courier</a></li> 
                    </ul>
                </li>

  
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Payment Advance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('all-advance')); ?>">Advance</a></li>
                         
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Report for excel</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('excel-today-orders')); ?>">Today Orders</a></li>
                        <li><a href="<?php echo e(route('all-advance')); ?>">Today Courier</a></li>
                        <li><a href="<?php echo e(route('all-advance')); ?>">Today Home Delivery</a></li>
                        <li><a href="<?php echo e(route('all-advance')); ?>">Today Advance</a></li>
                         
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('all-users')); ?>">All Users</a></li> 
                         
                    </ul>
                </li>

              

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div><?php /**PATH C:\laragon\www\form\resources\views/back-end/includes/sidebar.blade.php ENDPATH**/ ?>