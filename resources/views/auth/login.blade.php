<x-app-layout>
	<div class="p-4 grid bg-gradient-to-br from-primary to-white min-h-screen">
		<x-logo />
			@error("errors")
				<div class="max-w-[500px] my-4 text-center bg-accent rounded-xl mx-auto px-4 py-6 ">
					{{ $message }}
				</div>
			@enderror

			@if (Session::has("success"))
				<p class="text-black bg-accent w-[500px] mx-auto rounded-xl my-4 px-4 py-4 text-center ">{{ Session::get("success") }}</p>
			@endif
			<x-form action="{{ route('doLogin') }}" method="post">
				@csrf
				<h1
					class="text-white text-center text-lg md:text-2xl font-title"
				>
					Login To Your Account
				</h1>

				<div class="flex flex-col gap-2 md:gap-8 py-4">
					<x-input type="text" label="Username/Email" name="name" />

					<x-input type="password" label="Password" name="password" />
					<div class="flex justify-between items-center">
						<div>
							<input type="checkbox" name="remember" 	/>
							<small class="text-white">Remember me</small>
						</div>
						<a href="" class="underline italic text-xs text-white"
							>Lupa Password</a
						>
					</div>
				</div>

				<button class="btn mx-auto block my-4">Login</button>
				<p class="text-white text-[.7rem] italic text-center mt-10">
					Belum punya akun ?
					<a href="{{ route('register') }}" class="text-accent"
						>Register disini</a
					>
				</p>
			</x-form>
				
	</div>
</x-app-layout>
