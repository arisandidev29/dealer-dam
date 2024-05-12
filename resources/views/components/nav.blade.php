<nav class="bg-primary w-full fixed top-0 left-0  flex justify-between items-center px-4 py-4 z-50 border-b-2 border-slate-800 border-solid" >
    <div class="w-24">
    <img  src="{{ asset("storage/logo.png") }}" alt="logo" >
    </div>
    <ul class="hidden md:flex gap-4 items-center ">
        <li class="font-title text-accent font-semibold relative underline-text">
            <a href="">Product</a>
        </li>
        <li>
            <form action="">
                <input type="search" placeholder="Cari Product ..." class="w-64 bg-accent text-black text-sm rounded-md px-1 py-2 placeholder:text-slate-700 after:content-['fdfdf'] after:w-8 after:h-8 after:inline-block ">
            </form>
        </li>
        <li>
            <a href="">
                <button class="btn">Login</button>
            </a>
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