<div
    class="md:hidden bg-black fixed w-0 overflow-hidden px-4 py-6 top-[5.1rem] -right-8 z-50 transition-all"
    id="menu-mobile"
>
    <ul class="flex flex-col items-start gap-4">
        <li class="font-title text-white font-semibold relative">
            <a href="{{ route('product') }}">Product</a>
        </li>
        <li>
            <form action="">
                <input
                    type="search"
                    placeholder="Cari Product ..."
                    class="w-full bg-accent text-black text-sm rounded-md px-1 py-2 placeholder:text-slate-700"
                />
            </form>
        </li>

        <li class="flex gap-2 items-center">
            <img
                src="#"
                alt="photo profile"
                class="w-12 h-12 bg-accent rounded-full"
            />
            <div class="text-accent">
                <p>User</p>
                <p class="text-xs">Admin</p>
            </div>
        </li>
        <li>
            <a href="{{ route('login') }}">
                <button class="btn">Login</button>
            </a>
        </li>
    </ul>
</div>
