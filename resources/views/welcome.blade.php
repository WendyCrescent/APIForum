<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


    <title>{{ config('app.name') }}</title>

    <link href="css/app.css" rel="stylesheet" type="text/css">

  </head>
  <body>
    <div id="app">
      <app><app>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
