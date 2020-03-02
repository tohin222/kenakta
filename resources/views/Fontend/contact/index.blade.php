@extends('Fontend.external.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

    <!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8">
    <title>Leka - Contact Us</title>
    
</head>
<body class="">
    <!-- Header -->
  
    <!-- ./Header -->
  @include('Fontend.contact.banner')
    <div class="maincontainer page-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     @include('Fontend.contact.info')

                </div>
                                   @include('Fontend.contact.message')

            </div>
        </div>
      @include('Fontend.contact.map')
    </div>
</body>

    <!-- Theme pixel 14 Jan 2020 05:51:28 GMT -->
</html>
@endsection