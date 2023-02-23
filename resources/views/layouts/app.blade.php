<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

        <title>Attendance Management</title>

        <!--- CSRF Token --->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!--- Favicons --->
        <link href="{{ URL('images/favicon.png') }}" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!--- Google Fonts --->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">/*stay in head tag*/</script>
        
        <!--- Vendor CSS Files --->
        <link href="{{ URL ('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL ('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ URL ('vendor/simple-datatables/simple-datatables.css') }}" rel="stylesheet">

        <link href="{{ URL('vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet"/>
        <script src="{{ URL('vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}">/*stay in head tag*/</script>
    
        

        <!--- Template Main CSS File --->
        <link href="{{ URL('css/main.css') }}" rel="stylesheet">
    </head>
    
    <body>

        <!---  Header  --->
        @include('layouts.header')

    
        <!--- Left Sidebar --->
        @include('layouts.sidebar')


        <!--- Main Content--->
        <main id="main" class="main">
            <section class="section dashboard">
                @yield('content')
            </section>
        </main>


        <!--- Footer --->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>AHSchool</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">ICT Division</a>
            </div>
        </footer>



        <!--- Back Top Button --->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!--- Vendor JS Files --->
        <script src="{{ URL('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL('vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ URL('vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ URL('vendor/jquery-library.js') }}"></script>
        
        
        
        <!--- Template Main JS File --->
        <script src="{{ URL('js/main.js') }}"></script>

    </body>

</html>