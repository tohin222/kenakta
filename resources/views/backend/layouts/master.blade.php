<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Theme Pixel</title>
    @include('backend.partials.css')
	

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    @include('backend.partials.header')



  <!-- Left side column. contains the sidebar -->
  @include('backend.partials.aside')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('contains')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('backend.partials.footer')

  <!-- Control Sidebar -->
 
  @include('backend.partials.aside2')


  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



@include('backend.partials.js')

</body>
</html>
