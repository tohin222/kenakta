@extends('Fontend.external.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

    <!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
<!-- Head css part -->

<body class="home">
    <!-- Header -->
    <!-- ./Header -->
    <!-- Slide -->
   @include('Fontend.home.slider')
	<!-- ./Slide -->
    <!-- Tab product -->
   @include('Fontend.home.trending')
    
    <!-- ./Tab product -->
    <!-- Colection -->
   @include('Fontend.home.collection')
	
    <!-- Colection -->
    <!-- Tab product -->
   @include('Fontend.home.arrival')
	
     <!-- ./Tab product -->
     
     <!-- parallax -->
   @include('Fontend.home.paralex')
    
    <!-- parallax -->
    <!-- Blog -->
   @include('Fontend.home.blog')
   
    <!-- ./Blog -->

	<!-- client say -->
   @include('Fontend.home.client')

   <!-- footer part -->
   <!-- Js part -->
  
    <!-- type js -->
	@include('Fontend.home.typejs')
</body>

<!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
</html>
@endsection