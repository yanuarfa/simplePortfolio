{{-- Header --}}
<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/" class="font-bold text-lg text-primary block py-6">Yanuar F.</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburgerMenu" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="spanHamburger origin-top-left"></span>
                    <span class="spanHamburger"></span>
                    <span class="spanHamburger origin-bottom-left"></span>
                </button>

                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-5 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/"
                                class="text-base text-black hover:text-indigo-800 py-2 mx-8 flex font-semi-bold  {{ $active === 'home' ? 'text-indigo-800' : '' }} transition duration-300">Home</a>
                        </li>
                        <li class="group">
                            <a href="/portfolio"
                                class="text-base text-black hover:text-indigo-800 py-2 mx-8 flex {{ $active === 'portfolio' ? 'text-indigo-800' : '' }} font-semi-bold relative transition duration-300"
                                id="portfolio">Portfolio</a>
                        </li>
                        <li class="group">
                            <a href="/about"
                                class="text-base text-black hover:text-indigo-800 py-2 mx-8 flex {{ $active === 'about' ? 'text-indigo-800' : '' }} font-semi-bold transition duration-300">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
{{-- End Header --}}
