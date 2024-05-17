<x-app-layout>
	<div class="p-4 bg-gradient-to-br from-primary to-white  min-h-screen">
		<div class="w-16 md:w-24 my-2 md:my-4 mx-auto md:mx-0  ">
		<a href="{{ route('home') }}">
		<img  src="{{ asset("storage/logo.png") }}" alt="logo" >
		</a>
		</div>

		

		<x-form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">

			@csrf

			@if(Session::has("success"))
				<p class="bg-accent text-black px-4 py-4 rounded-xl my-4">{{ Session::get("success") }}</p>
			@endif
			<h1 class="text-white text-center text-lg md:text-2xl font-title mb-4">Edit Product</h1>

			<div class="flex flex-col gap-4 md:gap-6">
			<x-input type="text" label="Name" name="name" value="{{ $product->name }}" />
			<x-input type="year" label="Tahun" name="tahun" value="{{ $product->tahun }}"/>
			<x-input type="text" label="Harga" name="harga" value="{{ $product->harga }}" />

			<label for="category" >
				<p class="text-white text-sm">Type motor</p>
				<select name="type" id="type" class="bg-primary-light text-white rounded-lg px-2 py-2">
					<option value="{{ $product->type }}">{{ $product->type }}</option>
					<option value="Sport">Sport</option>
					<option value="Matic">Matic</option>
					<option value="Cub">Cub</option>
				</select>

				@error("type")
					<p class="text-sm text-white">{{ $message }}</p>
				@enderror
			</label>
			<label for="Deskripsi">
				<p class="text-white text-sm">Deskripsi</p>
				<textarea name="deskripsi" id="Deskrisi" class="bg-primary-light w-full  px-4 py-2 rounded-md text-white  border-none outline-none h-32 md:h-52 text-sm md:text-base">{{ $product->deskripsi }}</textarea>

				@error("deskripsi")
					<p class="text-sm text-white">{{ $message }}</p>
				@enderror
			</label>

			<label for="gambar">
				<input type="file" hidden id="gambar" name="product_pic" >
				<p class="text-sm text-white">Gambar</p>
				<div class="bg-primary-light w-full min-h-40 p-8 rounded-xl grid place-items-center text-white text-xs cursor-pointer" id="preview-gambar">
					<img src="{{ asset($product->image) }}" alt="product image" class="w-[50%]">
				</div>	


				@error("product_pic")
					<p class="text-sm text-white">{{ $message }}</p>
				@enderror
			</label>

			{{-- <x-input type="text" label="Or url" name="url" /> --}}


			</div>

			<div class="flex gap-4 justify-center my-4 items-center ">
				<a href="{{ URL::previous() }}" >
					<button type="button" class="btn-sm md:btn bg-accent" >Cancel</button>
				</a>
				<button class=" btn-sm md:btn  block">Edit Product</button>
			</div>
		</x-form>

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

			}

			fileReader.readAsDataURL(file[0]);

			previewGambar.innerHTML = '';
			previewGambar.appendChild(img);

		}
	})
</script>
</x-app-layout>
