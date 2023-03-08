<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="g-sidenav-show  bg-gray-100">
  @include('layouts.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.navbar')

    @yield('content')
  </main>

  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  @yield('script')
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/soft-ui-dashboard.min.js?v=1.0.7')}}"></script>

</body>

</html>