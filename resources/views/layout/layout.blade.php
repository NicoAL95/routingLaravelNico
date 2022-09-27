<!--

    Mohon NPM RUN DEV Sebelum PHP ARTISAN SERVE menjalankan program
    Terimakasih

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/custom.js')
    <title>@yield('title')</title>
</head>
<body class="overflow-x-hidden 
{{ Request::is('/') ? 'bg-superWhite' : '' }}
{{ Request::is('about') ? 'bg-[#FFFEF4]' : '' }}
{{ Request::is('community/forum') ? 'bg-[#ECF6FF]' : '' }}
{{ Request::is('community/gallery') ? 'bg-[#ECF6FF]' : '' }}
{{ Request::is('contact') ? 'bg-[#FBE5FF]' : '' }}
{{ Request::is('news') ? 'bg-[#FFFEDE]' : '' }}
{{ Request::is('recipes/dairy') ? 'bg-[#FFECF0]' : '' }}
{{ Request::is('recipes/fruit') ? 'bg-[#FFECF0]' : '' }}
">
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
          <ul class="navLinks right-[-50%] xl:bg-transparent
            {{ Request::is('/') ? 'bg-superWhite' : '' }}
            {{ Request::is('about') ? 'bg-[#FFFEF4]' : '' }}
            {{ Request::is('community/forum') ? 'bg-[#ECF6FF]' : '' }}
            {{ Request::is('community/gallery') ? 'bg-[#ECF6FF]' : '' }}
            {{ Request::is('contact') ? 'bg-[#FBE5FF]' : '' }}
            {{ Request::is('news') ? 'bg-[#FFFEDE]' : '' }}
            {{ Request::is('recipes/dairy') ? 'bg-[#FFECF0]' : '' }}
            {{ Request::is('recipes/fruit') ? 'bg-[#FFECF0]' : '' }}
          " id="navLinks">
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
          </ul>
        </nav>
    </header>
    
    @yield('content')

    <footer>
        <div class="footer">
          <h1>Made with ❤ by Nico Abel Laia | TI Matana 2021</h1>
        </div>
    </footer>
</body>
</html>

<!--

    Mohon NPM RUN DEV Sebelum PHP ARTISAN SERVE menjalankan program
    Terimakasih

-->