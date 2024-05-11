<x-app-layout>
<div class="p-4 bg-gradient-to-br from-primary to-white grid">
	<div class="w-24">
		<img  src="{{ asset("storage/logo.png") }}" alt="logo" >
	</div>
	<div class=" place-items-center content-center  h-screen">
		<x-form >
		<h1 class="text-white text-center text-2xl font-title">Login To Your Account</h1>

		<div class="flex flex-col gap-8 py-4">
			<x-input type="text" label="Nama" name="user"/>
			<x-input type="password" label="Password" name="password" />
			<div class="flex justify-between items-center">
				<div>
					<input type="checkbox">
					<small class="text-white ">Remember me</small>
				</div>
				<a href="" class="underline italic text-xs text-white">Lupa Password</a>
			</div>
		</div>

		<button class="btn mx-auto block my-4">Login</button>
		<p class="text-white text-[.7rem] italic text-center mt-10">Belum punya akun ? <a href="{{ route('register') }}" class="text-accent">Register disini</a></p>
		</x-form>
		
	</div>
	
	</x-app-layout>