<x-app-layout>
	<div class="p-4 bg-gradient-to-br from-primary to-white min-h-screen">
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

					<label for="gambar">
						<input type="file" hidden id="gambar" name="profile_pic">
						<p class="text-white text-sm">Profile Picture</p>
						<div class="bg-primary-light w-full min-h-40 p-8 rounded-xl grid place-items-center text-white text-xs cursor-pointer" id="preview-gambar">
							click to upload image 	
						</div>	
			</label>
					</label>
				</div>
				<button class="btn mx-auto block mt-4">Register</button>

				<p class="text-white text-[.7rem] italic text-center mt-10">Sudah punya akun ? <a href="{{ route('login') }}" class="text-accent">Login disini</a></p>

			</x-form>
		</div>
	</div>
	<script>
	const inputGambar = document.querySelector("#gambar");
	const previewGambar = document.querySelector("#preview-gambar");

	inputGambar.addEventListener("change",(e) => {
		const file = inputGambar.files;

		if(file) {
			const fileReader = new FileReader();
			const img = document.createElement("img");

			fileReader.onload = (event) => {
				img.setAttribute("src",event.target.result);		
				img.style.width = "50%";
				img.style.borderRadius = "50%";
			}

			fileReader.readAsDataURL(file[0]);

			previewGambar.appendChild(img);
			previewGambar.removeChild(previewGambar.firstChild);

		}
	})
</script>
</x-app-layout>