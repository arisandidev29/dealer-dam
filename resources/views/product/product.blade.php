<x-app-layout >
	<x-nav />
		<x-admin-menu />

	<div class="px-8 mt-28 mb-8">
		<div class="flex flex-col md:flex-row gap-4 items-center justify-between">
				<h1 class="text-primary text-2xl  md:text-5xl font-title font-semibold">{{ $product->name }}</h1>


				@can("managementProduct")

					<div>
					
					<a href="{{ route('product.edit',$product->id) }}">
						
					<button class=" w-8 md:w-14 bg-accent px-2 md:px-4 py-[.4rem] rounded-lg border-solid border-[0.1rem] border-slate-400 font-title ">
						<img src="{{ asset("storage/gear.png") }}" alt="gear" class="w-full">
					</button>
					</a>	
					

					<a href="{{ route('product.destroy',$product->id) }}">
						<button class="w-8 md:w-14 bg-primary px-2 md:px-4 py-[.4rem] rounded-lg border-solid border-[0.1rem] border-slate-400 font-title ">
						<img src="{{ asset("storage/trash.png") }}" alt="trash">
					</button>

					</a>
					</div>					
					
					@endcan
			
		</div>
		<img src="{{ asset($product->image) }}" alt="product name" class="block w-[70%] md:w-[40%] mx-auto">

		<p class="text-center my-4 mt-8">Deskripsi Honda {{ $product->name }}</p>
			
	

	


		<div class="bg-primary-light rounded-lg px-4 py-2 text-white text-sm md:text-base">
			<div class="mb-2 md:mb-4">
				<p class="font-semibold ">Nama</p>
				<p>{{ $product->name }}</p>
			</div>	

			<div class="mb-2 md:mb-4">
				<p class="font-semibold ">Tahun</p>
				<p>{{ $product->tahun }}</p>
			</div>

			<div class="mb-2 md:mb-4">
				<p class="font-semibold ">Tipe</p>
				<p>{{ $product->type }}</p>
			</div>
			<div class="mb-2 md:mb-4">
				<p class="font-semibold ">harga</p>
				<p>Rp. {{ Number::format($product->harga) }}</p>
			</div>
			<div class="mb-2 md:mb-4">
				<p class="font-semibold ">Desckription</p>
				<p>{{ $product->deskripsi }}</p>
			</div>
		</div>
	</div>
	<x-footer />
</x-app-layout>