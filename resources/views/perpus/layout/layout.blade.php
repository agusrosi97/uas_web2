<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('paper/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('paper/assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('paper/assets/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  {{-- <link href="{{ asset('paper/assets/demo/demo.css" rel="stylesheet" /> --}}
</head>

<body class="">
  <div class="wrapper ">
   
    @include('perpus.layout.sidebar')
    <div class="main-panel">
      <!-- Navbar -->

      @include('perpus.layout.navbar')

      @yield('content')
      @include('perpus.layout.footer')

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('paper/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ asset('paper/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('paper/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('paper/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  {{-- <script src="{{ asset('paper/assets/js/core/jquery.dataTables.min.js')}}"></script> --}}
  {{-- <script src="{{ asset('paper/assets/js/core/dataTables.bootstrap4.min.js')}}"></script> --}}
  <!--  Google Maps Plugin    -->

  <!-- Chart JS -->
  <script src="{{ asset('paper/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('paper/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('paper/assets/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  {{-- <script type="text/javascript">
    $(document).ready(function() {
      $('#tb_index').DataTable();
    } );
  </script> --}}
  <script src="{{ asset('paper/assets/demo/demo.js')}}"></script>
    <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  {{-- <script type="text/javascript">
    $(function() {
      $('#tb_index').DataTable();
    });
  </script> --}}
  <script>
    $(".btn-delete").on("submit", function(){
      return confirm("Anda yakin ingin menghapus data?");
    });
  </script>
</body>

</html>
