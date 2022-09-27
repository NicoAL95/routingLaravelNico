<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="bg-[#FFFEF4] overflow-x-hidden">
  <header>
    <nav>
      <div>
        <a href="Nico" class="navLogo">Nico Abel Laia</a>
      </div>
      <div class="xl:hidden cursor-pointer" id="hamburger">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>        
      </div>
      <ul class="navLinks right-[-50%] bg-[#FFFEF4] xl:bg-transparent" id="navLinks">
        <li class="flex justify-between space-x-10 xl:hidden">
          <h1 class="hidNav">Nico Abel Laia</h1>
          <div class="cursor-pointer" id="navClose">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            
          </div>
        </li>
        <li>
          <a href="/" class="navLink {{ Request::is('/') ? 'active' : 'navLink' }}">Home</a>
        </li>
        <li>
          <a href="/about" class="navLink {{ Request::is('about') ? 'active' : 'navLink' }}">About</a>
        </li>
        <li>
          <a href="/news" class="navLink {{ Request::is('news') ? 'active' : 'navLink' }}">News</a>
        </li>
        <li class="relative">
          <a href="#" class="navLink {{ Request::is('recipes/fruit') ? 'active' : '' }} {{ Request::is('recipes/dairy') ? 'active' : '' }}" id="recipe">Recipes</a>

          <div class="hidden" id="recipeHover">
            <a href="/recipes/fruit" class="navLink hovItem rounded-t-md {{ Request::is('recipes/fruit') ? 'active' : 'navLink' }}">Fruit</a>
            <a href="/recipes/dairy" class="hovItem rounded-b-md">Dairy</a>
          </div>

        </li>
        <li class="relative">
          <a href="#" class="navLink {{ Request::is('community/forum') ? 'active' : '' }} {{ Request::is('community/gallery') ? 'active' : '' }}" id="community">Community</a>

          <div class="hidden" id="communityHover">
            <a href="/community/forum" class="hovItem rounded-t-md">Forum</a>
            <a href="/community/gallery" class="hovItem rounded-b-md">Gallery</a>
          </div>

        </li>
        <li>
          <a href="/contact" class="navLink {{ Request::is('contact') ? 'active' : 'navLink' }}">Contact</a>
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
              <h1>Halo Semua<br>Ini Adalah Tampilan<br>About Page</h1>
            </div>
            <h1 class="headMedium">Tugas Routing Nico Abel Laia - 20215520010 - TI Matana 2021 | Pemrograman Website Menggunakan Framework Laravel 9 dan Tailwindcss</h1>
          </div>
        </div>
        <div class="bodyCol">
          <img src="/img/svg/illustrator-head-2.svg" alt="">
        </div>
      </div>
    </section>
  </main>
  <footer></footer>
</body>
</html>