<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Dashboard</title>
      <link rel="stylesheet" href="css/style.css">
      @vite('resources/css/app.css')
  </head>
  <body>

    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')
    <script src="js/script.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  </body>
</html>