<x-app-layout>
	<div class="p-4 bg-gradient-to-br from-primary to-white grid">
		<div class="w-24">
			<a href="{{ route('home') }}">
			<img  src="{{ asset("storage/logo.png") }}" alt="logo" >
			</a>
		</div>

		<div class=" mt-4 place-items-center content-center  ">
			<x-form >
				<h1 class="text-white text-center text-lg  md:text-2xl font-title">Register Your Account</h1>

				<div class="flex flex-col gap-2 md:gap-8 py-4">
					<x-input type="text" label="Nama" name="name" />
					<x-input type="email" label="Email" name="email" />
					<x-input type="password" label="password" name="password" />
					<x-input type="password" label="password confirmasi" name="password_confirm" />
				</div>
				<button class="btn mx-auto block mt-4">Register</button>

				<p class="text-white text-[.7rem] italic text-center mt-10">Sudah punya akun ? <a href="{{ route('login') }}" class="text-accent">Login disini</a></p>

			</x-form>
		</div>
	</div>
</x-app-layout>