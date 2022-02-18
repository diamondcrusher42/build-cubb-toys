<!DOCTYPE html>
<html>
    <head>
        <title>Build Cubb Toys</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"> 
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
        <script src="/js/app.js"></script>
    </body>
</html>
