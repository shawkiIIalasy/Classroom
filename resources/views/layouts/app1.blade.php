<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('images/logo/logo.png') }}" rel="shortcut icon">
    <title>ClassRoom</title>
  <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<div>
 @yield('css')
</div>    

</head>
<body>
    <div id="app" >



       @include('inc.tnavbar')
 
        
        <div class="container" style="width:800px;margin-top: 50px;">
            @include('inc.messages')
            @yield('content')
        </div>
        
    </div>


<!-- Scripts -->
<div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
 
  <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

    @yield('script')
 </div>
</body>
</html>