<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Smart Repair</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
  <div class="vertical-center text-center">
    <div class="container">
      <img src="storage/logo.png" class="img-responsive"width="100px" height="100px"></br>
      <p class="title">Smart Repair</p>

      <div class="container-fluid">
        <div class="col-md-12 text-center">
          <a  href="{{url('List_Merek')}}"><button class="btn btn-danger">Repair Now!</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
