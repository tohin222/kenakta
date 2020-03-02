<!DOCTYPE html>
<html lang="en">

    <!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
<!-- Head css part -->
@include('Fontend.external.css')
<body class="home">
    <!-- Header -->
	@include('Fontend.external.header')
    <!-- ./Header -->
    <!-- Slide -->
    @yield('content')
	<!-- ./Slide -->
<!-- end client say -->
<!-- footer part -->
 @include('Fontend.external.footer')
   <!-- Js part -->
   @include('Fontend.external.js')
</body>

<!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
</html>