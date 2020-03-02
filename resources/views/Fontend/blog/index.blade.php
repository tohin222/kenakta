@extends('Fontend.external.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

    <!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8">
    <title>Blog Detail</title>
    
</head>
<body class="">
    <!-- Header -->
    <!-- ./Header -->
   @include('Fontend.blog.index')
   @include('Fontend.blog.content')
   @include('Fontend.blog.postcomment')
</body>

    <!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
</html>
@endsection