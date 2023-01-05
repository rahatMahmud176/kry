  
        <script src="<?php echo e(asset('/')); ?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/node-waves/waves.min.js"></script>

        <script src="<?php echo e(asset('/')); ?>assets/libs/parsleyjs/parsley.min.js"></script>

        <script src="<?php echo e(asset('/')); ?>assets/js/pages/form-validation.init.js"></script>
        <!-- apexcharts -->
        <script src="<?php echo e(asset('/')); ?>assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="<?php echo e(asset('/')); ?>assets/js/pages/dashboard.init.js"></script>


        <script src="<?php echo e(asset('/')); ?>assets/libs/select2/js/select2.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/%40chenfengyuan/datepicker/datepicker.min.js"></script>

        <!-- form advanced init -->
        <script src="<?php echo e(asset('/')); ?>assets/js/pages/form-advanced.init.js"></script>
        <!-- dropzone plugin -->
        <script src="<?php echo e(asset('/')); ?>assets/libs/dropzone/min/dropzone.min.js"></script>
        <!-- Summernote js -->
        <script src="<?php echo e(asset('/')); ?>assets/libs/summernote/summernote-bs4.min.js"></script>
        <!-- init js -->
        <script src="<?php echo e(asset('/')); ?>assets/js/pages/form-editor.init.js"></script>
        <!-- Required datatable js -->
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/jszip/jszip.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo e(asset('/')); ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
         
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <?php if(Session::has('msg')): ?> 
        <script>
           toastr.<?php echo e(Session::get('msgType')); ?>("<?php echo e(Session::get('msg')); ?>")
        </script>   
      <?php endif; ?>
        
        <!-- Datatable init js -->
        <script src="<?php echo e(asset('/')); ?>assets/js/pages/datatables.init.js"></script>   
        <!-- App js -->
        <script src="<?php echo e(asset('/')); ?>assets/js/app.js"></script><?php /**PATH C:\laragon\www\form\resources\views/back-end/includes/script.blade.php ENDPATH**/ ?>