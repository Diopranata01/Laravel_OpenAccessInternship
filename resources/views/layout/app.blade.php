<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c99aa1cc40.js" crossorigin="anonymous"></script>
>>>>>>> 5f2c9e4c770ad4174878d37215b618b38cfc6ef3
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>IMISSYO | {{ @$title }}</title>
</head>
<body>
<<<<<<< HEAD
    @yield('content')
=======
        
    @include('partial.navbar')
    @yield('content')
    @yield('content2')
>>>>>>> 5f2c9e4c770ad4174878d37215b618b38cfc6ef3
    
</body>
</html>