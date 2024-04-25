<script src="https://cdn.tailwindcss.com"></script>
@vite('resources/css/app.css')

		{{-- START OF HEADER --}}

<header class="mx-0 mt-0  ">
	<script src="../path/to/flowbite/dist/flowbite.js"></script>
	
	<nav class="px-10 relative flex justify-between items-center bg-white bg-white dark:bg-gray-800 ">
		<a class="pt-10 text-3xl font-bold leading-none w-1/8" href="#">
			<img src="{{asset('/images/autofixx_navbar_logo.png')}}" alt="profile Pic" height="20" width="200" margin="0" padding="0" >
		</a>
		<br>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-950 p-3">
				<svg class="block h-10 w-10 fill-current" viewBox="0 0 20 20" xmlns="images/autofixx_navbar_logo">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>

		{{-- NAVBAR LINKS --}}

		<ul class=" pt-10 hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			
		
			
			{{-- <li><a class=" hover:text-blue-950 {{ (Route::is('homepage')) ? 'text-lg text-blue-950   mb-4 w-1/8 font-bold' : '' }} nav-link"  href={{ route('homepage') }}>Home</a></li>
			<li class=" hover:text-blue-950 text-gray-300 active dark:bg-gray-800 dark:text-blue-500 hover:text-blue-950"></li>  --}}

			<li><a class=" {{ (Route::is('book-now')) ? 'text-lg text-blue-950 hover:text-blue-500  mb-4 w-1/8 semi-bold' : '' }} nav-link"  href={{ route('book-now') }}>Book Now</a></li>
			<li class="text-gray-300 active dark:bg-gray-800 dark:text-blue-500 hover:text-blue-950"></li>

			<li><a class=" {{ (Route::is('services')) ? 'text-lg text-blue-950 hover:text-blue-500  mb-4 w-1/8 semi-bold' : '' }} nav-link"  href={{ route('services') }}>Services</a></li>
			<li class="text-gray-300 active dark:bg-gray-800 dark:text-blue-500"></li>

			<li><a class=" {{ (Route::is('about')) ? 'text-lg text-blue-950 hover:text-blue-500  mb-4 w-1/8 semi-bold' : '' }} nav-link"  href={{ route('about') }}>About Us</a></li>
			<li class="text-gray-300 active dark:bg-gray-800 dark:text-blue-500"></li>

			<li><a class=" {{ (Route::is('contact')) ? 'text-lg text-blue-950 hover:text-blue-500  mb-4 w-1/8 semi-bold' : '' }} nav-link"  href={{ route('contact') }}>Contact Us</a></li>
			<li class="text-gray-300 active dark:bg-gray-800 dark:text-blue-500"></li>

            
            {{-- <a class=" {{ (Route::is('login')) ? 'text-lg text-blue-950 hover:text-blue-500 w-1/8 float-right mb-4 font-bold' : '' }} nav-link"  href={{ route('login') }}>Sign in</a>
        <a class=" {{ (Route::is('register')) ? 'text-lg text-blue-950 hover:text-blue-500 w-1/8 float-right mb-4 font-bold' : '' }} nav-link"  href={{ route('register') }}>Sign up</a>
		</ul> --}}

        </ul>
        <a class="pt-10 hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-2 text-lg text-blue-950 -semi-bold  transition duration-200  w-1/8" href="login">Sign In</a>
		<a class="pt-10 hidden lg:inline-block py-2 px-6 dark:hover:bg-white text-lg text-blue-950 -semi-bold  transition duration-200  w-1/8" href="register">Sign up</a>
		
		{{-- <a class=" {{ (Route::is('login')) ? 'text-lg text-blue-950 hover:text-blue-500 w-1/8 mb-4 font-bold' : '' }} nav-link"  href={{ route('login') }}>Sign in</a>
        <a class=" {{ (Route::is('register')) ? 'text-lg text-blue-950 hover:text-blue-500 w-1/8 mb-4 font-bold' : '' }} nav-link"  href={{ route('register') }}>Sign up</a> --}}
		{{-- <a class="hidden lg:inline-block py-2 px-6 bg-blue-950 hover:bg-gray-700 dark:hover:bg-white text-sm text-white font-bold rounded-xl transition duration-200 mb-4 w-1/8" href="register">Sign up</a> --}}
	</nav>



    
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
					<a class="text-3xl font-bold leading-none pr-20 w-1000 h-1000" href="#">
						<img src="{{asset('/images/autofixx_navbar_logo.png')}}" alt="profile Pic" height="200" width="200" margin="0" padding="0">
					</a>
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="images/autofixx_navbar_logo" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>


			
			{{-- BURGER NAVBAR LINKS --}}

			<div>
				<ul>
						<br>
					<li class="mb-1">
						<a class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]" href="ediwow">Home</a>
					</li>

					<li class="mb-1">
						<a class="block p-4 text-4xl font-semibold text-slate-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="book-now">Book Now</a>
					</li>

					<li class="mb-1">
						<a class="block p-4 text-4xl font-semibold text-slate-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="services">Services</a>
					</li>

					<li class="mb-1">
						<a class="block p-4 text-4xl font-semibold text-slate-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="about">About Us</a>
					</li>

					<li class="mb-1">
						<a class="block p-4 text-4xl font-semibold text-slate-900 hover:bg-blue-50 hover:text-blue-600 rounded" href="contact">Contact Us</a>
					</li>
					
					<br><a class="block pt-6  leading-loose text-xl text-center font-semibold bg-gray-100 hover:bg-gray-300  rounded-xl" href="sign-in">Sign in</a>
					<br>
					<a class="block  pt-6  leading-loose text-xl text-center text-white font-semibold bg-blue-950 hover:bg-gray-700 dark:hover:bg-white  rounded-xl" href="auth/register">Sign Up</a>
				</ul>
			</div>
			
		</nav>
				
	{{-- </div>
	<hr class="h-px mt-3 bg-gray-200 border-0 dark:bg-gray-700">
    <div class="bg-gray-100">
    </div> --}}
    




				{{-- BURGER NAVBAR --}}

<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>


</header>






















  {{-- <div class="navbar bg-sky-900">
  <div class="flex-none">
    <button class="btn btn-square btn-ghost text-slate-50 ">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>
  </div>
  <div class="flex-1">
    <a class="btn btn-ghost text-xl text-slate-50">Autofixx</a>
  </div>
  <div class="flex-1">
    <a class="btn btn-ghost text-xl text-slate-50">Screen</a>
  </div>
  <div class="flex-1">
    <a class="btn btn-ghost text-xl text-slate-50">Autofixx</a>
  </div>
  <div class="flex-none">
    <button class="btn btn-square btn-ghost text-slate-50">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
    </button>
  </div>
</div>   --}}


