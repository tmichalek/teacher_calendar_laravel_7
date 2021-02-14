<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <title>Nauczyciel-online</title>
</head>
<body>
    <nav class="navbar_top">
        @yield('nav')
    </nav>

   @yield('content') 
   
</body>
<script src="js/app.js" ></script>
</html>