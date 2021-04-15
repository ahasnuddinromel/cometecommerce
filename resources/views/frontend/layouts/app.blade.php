<!DOCTYPE html>
<html lang="en">
<head>
    <title>64 Distric & World Collection</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @include('frontend.layouts.partial.styles')
  </head>

  <body>
    <!-- Navigation Bar-->
@include('frontend.layouts.header.header')


    <!-- Home Section-->
@section('main-content')

@show
    <!-- Footer-->
@include('frontend.layouts.footer.footer')
    <!-- end of footer-->

{{-- Scripts --}}
@include('frontend.layouts.partial.scripts')

  </body>
</html>
