
<!DOCTYPE html>
<html>
<head>
    
  @include('backend.partials._head')
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('backend.navs.top')
  
  @include('backend.navs.left')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  @include('backend.partials.footer')

</div>
<!-- ./wrapper -->

  
  @include('backend.partials.js')

</body>
</html>
