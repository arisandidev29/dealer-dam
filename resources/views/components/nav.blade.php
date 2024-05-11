<nav class="bg-primary w-full fixed top-0 left-0  flex justify-between items-center px-4 py-4" >
    <div class="w-24">
    <img  src="{{ asset("storage/logo.png") }}" alt="logo" >
    </div>
    <ul class="flex gap-4 items-center ">
        <li class="font-title text-accent font-semibold">Product</li>
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
</nav>