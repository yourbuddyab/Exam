<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   {{-- <script src="https://use.fontawesome.com/2fc2280883.js"></script> --}}
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
