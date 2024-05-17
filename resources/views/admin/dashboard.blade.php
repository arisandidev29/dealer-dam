<x-app-layout>
	<x-nav />
	<x-admin-menu/>
	<div class="mt-32 px-10 w-full md:w-[80%] mx-auto">
		<h1 class="text-2xl  md:text-5xl font-semibold">Welcome {{ auth()->user()->name }}</h1>

		<div class="grid grid-cols-1  md:grid-cols-2 gap-4 mt-6">
			<div class="flex gap-4 border-4 border-solid border-accent px-6 py-8 rounded-xl">
				<div class="self-center">
					<img src="{{ asset('storage/motor big.png') }}" alt="product "  class="w-[90%]">
					
				</div>
				<div class="flex flex-col gap-2">
				<p class="text-5xl text-accent">{{ $products }}</p>
				<p class="text-accent">Total Product</p>
				k
				<a href="{{ route('product') }}">
					<button class="btn-sm">management product</button>
				</a>
				</div>
			</div>

		@can("viewManagementUser")	
		<div class="flex gap-4 border-4 border-solid border-primary px-6 py-8 rounded-xl">
				<div class="self-center ">
					<img src="{{ asset('storage/user big.png') }}" alt="product "  class="w-[50%] mx-auto ">
					
				</div>
				<div class="flex flex-col gap-2 flex-1">
				<p class="text-5xl text-primary">{{ $users }}</p>
				<p class="text-primary">Total Users</p>

				<a href="{{ route('admin.users') }}">
					<button class="btn-sm">management User</button>
				</a>
				</div>
			</div>

		</div>
		@endcan
	</div>
</x-app-layout>
