<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicare Assist</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
  <link href="img/logoM.PNG" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  {{-- <link href="{{url('admin/img/favicon.png')}}" rel="icon"> --}}
  {{-- <link href="{{url('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{url('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{url('admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{url('admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
<link href="{{url('admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
<link href="{{url('admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{url('admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />


  <!-- Template Main CSS File -->
  {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
  <link href="{{url('admin/css/style.css')}}" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    @include('backend.layouts._header')

    @include('backend.layouts._sidebar')

    <main id="main" class="main">

            @yield('content')

    </main><!-- End #main -->

    {{-- @include('backend.layouts._footer') --}}



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

<script src="{{url('admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('admin/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{url('admin/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{url('admin/vendor/quill/quill.js')}}"></script>
<script src="{{url('admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{url('admin/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{url('admin/vendor/php-email-form/validate.js')}}"></script>




  <!-- Template Main JS File -->
  <script src="{{url('admin/js/main.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


</body>

</html>
