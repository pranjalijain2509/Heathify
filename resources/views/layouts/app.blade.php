<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Healthify</title>

    <link rel="stylesheet" href="css/app.css">

    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />






    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/themify-icons/themify-icons.min.css') }}">
    <link href="{{ asset('vendor/animate.css/animate.min.css" rel="stylesheet" media="screen') }}">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen') }}">
    <link href="{{ asset('vendor/switchery/switchery.min.css" rel="stylesheet" media="screen') }}">
    <link
        href="{{ asset('vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen') }}">
    <link href="{{ asset('vendor/select2/select2.min.css" rel="stylesheet" media="screen') }}">
    <link
        href="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen') }}">
    <link
        href="{{ asset('vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen') }}">

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />
    <link href="{{ asset('assets/css/themes/theme-1.css" id="skin_color') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/themes/theme-1.css" id="skin_color') }}" />
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>





    @yield('content')




    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>

    </body>



</html>
