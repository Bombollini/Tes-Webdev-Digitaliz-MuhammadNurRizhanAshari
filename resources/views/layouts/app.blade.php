<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')Kursus Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar" style="height: 100px; background-color: rgb(62, 31, 31); color:white;">
        <div class="container-fluid">
           
          <h1 style="font-weight: bold"> <img src="{{ asset('img/logo.png') }}" alt="Logo" width="50" class="d-inline-block align-text-top">APLIKASI KURSUS</h1>
        </div>
      </nav>
      

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
