<nav class="bg-primary w-full fixed top-0 left-0  flex justify-between items-center px-4 py-4 z-50 border-b-2 border-slate-800 border-solid" >
   <x-logo />
    <ul class="hidden md:flex gap-4 items-center ">
        <li class="font-title text-accent font-semibold relative underline-text">
            <a href="{{ route('product') }}">Product</a>
        </li>
        <li>
            <form action="{{ route('product.search') }}">
                <input type="search" name="keyword" placeholder="Cari Product ..." class="w-64 bg-accent text-black text-sm rounded-md px-1 py-2 placeholder:text-slate-700 after:content-['fdfdf'] after:w-8 after:h-8 after:inline-block ">
            </form>
        </li>
        @if (Auth::check())
            <li  class="flex gap-2 items-center ">
                <img src="{{ asset(auth()->user()->img) }}" alt="user picture" class="w-12 h-12 grid text-xs text-center place-items-center bg-accent rounded-full " />
                <div class="flex flex-col ">
                    <p class="text-white text-xs font-semibold">{{ auth()->user()->name }}</p>
                    <p class="text-white text-xs">{{auth()->user()->role }}</p>
                    
                </div>

            </li>
        @endif


        <li>
            @if (Auth::check())
                <a href="{{ route('logout') }}">
                    <button class="btn">Logout</button>
                </a>
            @else
            <a href="{{ route('login') }}">
                <button class="btn">Login</button>
            </a>
            @endif
           
        </li>
    </ul>
    <div class="block md:hidden cursor-pointer ">
        <img src="{{ asset("storage/list.svg") }}" alt="menu" class="w-8" id="menu">
        <img src="{{ asset("storage/x-lg.svg") }}" alt="menu" class="w-8 hidden" id="close" >
    </div>
</nav>

<x-nav-mobile />
<script>
    const menu = document.querySelector("#menu");
    const close = document.querySelector("#close");
    const menu_mobile = document.querySelector("#menu-mobile");

    menu.onclick = (e) => {
        menu.classList.add("hidden");
        close.classList.remove("hidden");
        menu_mobile.classList.remove("-right-8");
        menu_mobile.classList.add("right-0");
        menu_mobile.style.width = "16rem";

    } 
    close.onclick = (e) => {
        menu.classList.remove("hidden");
        close.classList.add("hidden");
        menu_mobile.classList.add("-right-8");
        menu_mobile.classList.remove("right-0");
        menu_mobile.style.width = "0";
    } 
</script>