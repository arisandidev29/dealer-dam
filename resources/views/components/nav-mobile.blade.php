<div
    class="md:hidden bg-black fixed w-0 overflow-hidden px-4 py-6 top-[5.1rem] -right-8 z-50 transition-all"
    id="menu-mobile"
>
    <ul class="flex flex-col items-start gap-4">
        <li class="font-title text-white font-semibold relative">
            <a href="{{ route('product') }}">Product</a>
        </li>
        <li>
              <form action="{{ route('product.search') }}">
                <input
                    type="search"
                    name="keyword"
                    placeholder="Cari Product ..."
                    class="w-full bg-accent text-black text-sm rounded-md px-1 py-2 placeholder:text-slate-700"
                />
            </form>
        </li>


        @if (Auth::check())
        <li class="flex gap-2 items-center">
            <img
                src="{{ asset(auth()->user()->img) }}"
                alt="photo profile"
                class="w-12 h-12 bg-accent rounded-full"
            />
            <div class="text-accent">
                <p>{{ auth()->user()->name }}</p>
                <p class="text-xs">{{ auth()->user()->role }}</p>
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
</div>
