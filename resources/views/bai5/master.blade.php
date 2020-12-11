<!DOCTYPE html>
<html lang="en">

<head>
@include('bai5.link')
</head>

<body>

  @include('bai5.nav')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('asset/bai2/img/home-bg.jpg')">
    @include('bai5.header')
  </header>

  @yield('main')

  <hr>

  <!-- Footer -->
  <footer>
    @include('bai5.footer')
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
