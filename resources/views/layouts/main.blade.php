<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('test/img/mdb-favicon.ico') }}" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <!-- Menghubungkan file CSS -->
    <link rel="stylesheet" href="{{ asset('test/css/mdb.min.css') }}" />

  </head>
  <body class="">
    <!-- End your project here-->
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('test/js/mdb.umd.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
