<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <section class="mainLayout">
    <div class="mainWrapper">
      <ul class="listFlex">
        <li>
          <a href="/" class="navText {{ (request()->is('/')) ? 'navActive' : '' }}">Home</a>
        </li>
        <li>
          <a href="/about" class="navText @if(!Route::is('/about')) ? 'navActive' : '' @endif">About</a>
        </li>
        <li>
          <a href="/profile" class="navText @if(!Route::is('/profile')) navActive @endif">Profile</a>
        </li>
        <li>
          <a href="/photos" class="navText @if(!Route::is('/photos')) navActive @endif">About</a>
        </li>
      </ul>
    </div>
  </section>
</body>
</html>