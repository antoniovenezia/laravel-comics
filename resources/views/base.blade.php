<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASE PAGE - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

    <!-- HEADER -->
     <head>
    @include('header')
     </head>


     <!-- MAIN -->
     <div>
        @yield("content")
     </div>


     <!-- FOOTER -->
     <footer>
     @include('footer')
     </footer>
    
</body>
</html>