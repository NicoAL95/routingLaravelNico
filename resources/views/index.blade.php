<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="bg-superWhite">
  <header>
    <nav>
      <div>
        <a href="Nico" class="navLogo">Nico Abel Laia</a>
      </div>
      <ul class="navLinks">
        <li>
          <a href="#" class="navLink active">Home</a>
        </li>
        <li>
          <a href="#" class="navLink">About</a>
        </li>
        <li>
          <a href="#" class="navLink">News</a>
        </li>
        <li class="relative">
          <a href="#" class="navLink" id="recipe">Recipes</a>

          <div class="hidden" id="recipeHover">
            <a href="#" class="hovItem rounded-t-md">Fruit</a>
            <a href="#" class="hovItem rounded-b-md">Diary</a>
          </div>

        </li>
        <li class="relative">
          <a href="#" class="navLink" id="community">Community</a>

          <div class="hidden" id="communityHover">
            <a href="#" class="hovItem rounded-t-md">Forum</a>
            <a href="#" class="hovItem rounded-b-md">Gallery</a>
          </div>

        </li>
        <li>
          <a href="#" class="navLink">Contact</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="mainBody">
      <div class="bodySplit">
        <div class="bodyCol flex items-center pl-[80px]">
          <div>
            <h1 class="headSmall">Nico Abel Laia</h1>
            <div class="headTitle">
              <h1>Halo Semua<br>Ini Adalah Tampilan<br>Home Page</h1>
            </div>
            <h1 class="headMedium">Tugas Routing Nico Abel Laia - 20215520010 - TI Matana 2021 | Pemrograman Website Menggunakan Framework Laravel 9 dan Tailwindcss</h1>
          </div>
        </div>
        <div class="bodyCol">
          <img src="/img/svg/illustrator-head.svg" alt="">
        </div>
      </div>
    </section>
  </main>
  <footer></footer>
</body>
</html>