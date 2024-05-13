<x-app-layout>
	<div class="p-4 bg-gradient-to-br from-primary to-white  min-h-screen">
		<div class="w-16 md:w-24 my-2 md:my-4 mx-auto md:mx-0  ">
		<a href="{{ route('home') }}">
		<img  src="{{ asset("storage/logo.png") }}" alt="logo" >
		</a>
		</div>

		<x-form method="post" action="{{ route('product') }}" enctype="multipart/form-data">

			<h1 class="text-white text-center text-lg md:text-2xl font-title mb-4">Add New Product</h1>

			<div class="flex flex-col gap-4 md:gap-6">
			<x-input type="text" label="Name" name="nama" />
			<x-input type="text" label="Tahun" name="Tahun" />
			<x-input type="text" label="Harga" name="Harga" />

			<label for="category">
				<p class="text-white text-sm">Pilih Category</p>
			</label>
			<select name="category" id="category" class="bg-primary-light text-white rounded-lg px-2 py-2">
				<option value="">_</option>
				<option value="Sport">Sport</option>
			</select>
			<label for="Deskripsi">
				<p class="text-white text-sm">Deskripsi</p>
				<textarea name="descripsi" id="Deskrisi" class="bg-primary-light w-full  px-4 py-2 rounded-md text-white  border-none outline-none h-32 md:h-52 text-sm md:text-base"></textarea>
			</label>

			<label for="gambar">
				<input type="file" hidden id="gambar" >
				<p class="text-sm text-white">Gambar</p>
				<div class="bg-primary-light w-full min-h-40 p-8 rounded-xl grid place-items-center text-white text-xs cursor-pointer" id="preview-gambar">
					click to upload image 	
				</div>	
			</label>

			<x-input type="text" label="Or url" name="url" />


			</div>

			<div class="flex gap-4 justify-center my-4 items-center ">
				<a href="{{ route('home') }}" >
					<button type="button" class="btn-sm md:btn bg-accent" >Cancel</button>
				</a>
				<button class=" btn-sm md:btn  block">Add Product</button>
			</div>
		</x-form>

	</div>
<script>
	const inputGambar = document.querySelector("#gambar");
	const previewGambar = document.querySelector("#preview-gambar");

	inputGambar.addEventListener("change",(e) => {
		const file = inputGambar.files;
		console.log("ok");

		if(file) {
			const fileReader = new FileReader();
			const img = document.createElement("img");

			fileReader.onload = (event) => {
				img.setAttribute("src",event.target.result);		
				img.style.width = "50%";
			}

			fileReader.readAsDataURL(file[0]);

			previewGambar.appendChild(img);
			previewGambar.removeChild(previewGambar.firstChild);

			console.log(previewGambar);
		}
	})
</script>
</x-app-layout>
