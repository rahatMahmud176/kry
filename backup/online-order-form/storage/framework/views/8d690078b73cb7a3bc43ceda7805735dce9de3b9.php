<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:14 GMT -->

<head>

    <meta charset="utf-8" />
    <title> <?php echo $__env->yieldContent('title'); ?> | KRY INTERNATIONAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <?php echo $__env->make('front-end.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body data-sidebar="dark">

    <div class="container mt-5">
       <?php echo $__env->yieldContent('mainContent'); ?>
    </div>
    <!-- end row -->

<?php echo $__env->make('front-end.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:17 GMT -->

</html>



<?php /**PATH C:\laragon\www\form\resources\views/front-end/master.blade.php ENDPATH**/ ?>