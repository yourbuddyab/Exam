<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
.btn-custom{
    padding: 0.255rem 0.50rem!important;
}
.custom-control-label{
  top: 2px;
}
</style>
</head>
<body>
  <div class="bg-dark p-3 text-white container-fluid">
    <div class="row">
        <div class="col-md-4"><h4></h4></div>
        <div class="col-md-4"><h4 class="text-center">Exam</h4></div>
        <div class="col-md-4"><h4 class="text-right" id="demo"></h4> </div>
    </div>
</div>
    <main class="py-4">
        @yield('section')
    </main>
</body>
</html>
