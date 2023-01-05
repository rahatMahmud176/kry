<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:04 GMT -->

<head>

    <meta charset="utf-8" />
    <title> <?php echo $__env->yieldContent('title'); ?> | Kry international</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <?php echo $__env->make('back-end.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>
   <?php echo $__env->yieldContent('mainContent'); ?>

    <?php echo $__env->make('back-end.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:04 GMT -->

</html>
<?php /**PATH C:\laragon\www\form\resources\views/back-end/admin/master.blade.php ENDPATH**/ ?>