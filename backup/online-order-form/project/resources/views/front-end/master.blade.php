<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:14 GMT -->

<head>

    <meta charset="utf-8" />
    <title> @yield('title') | KRY INTERNATIONAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}/customImage/kry-login-logo-removebg-preview.png">

    @include('front-end.includes.style')

</head>

<body data-sidebar="dark">

    <div class="container mt-5">
       @yield('mainContent')
    </div>
    <!-- end row -->

@include('front-end.includes.script')
@include('sweetalert::alert')

</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:17 GMT -->

</html>



