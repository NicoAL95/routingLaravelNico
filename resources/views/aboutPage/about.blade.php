<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-xl text-center">
    <a href="" @if(!Route::is('/')) class="text-red-500" @endif>Ini About Ges</a>
  </h1>
</body>
</html>