<x-app-layout :title="$title">
<x-nav />
<x-admin-menu />
<div class="px-4 md:px-8 mt-36 mb-8">
	<div class="flex flex-col md:flex-row justify-between mb-4 items-start  md:items-center">
		<h1 class="text-lg md:text-4xl text-primary my-4">Temukan Motor Impian Mu !</h1>

		@can("managementProduct")
		<a href="{{ route('product.tambah') }}">
			<button class="btn">Tambah Product</button>	
		</a>
		@endcan
	</div>

	<div class="flex gap-4 mb-2">
		<a href="/product/category?category=sport"><button class="btn-raw text-accent border-2 border-solid border-accent hover:bg-accent hover:text-black transition-all duration-300 " >Sport</button></a>
		<a href="/product/category?category=matic"><button class="btn-raw text-primary border-2 border-solid border-primary hover:bg-primary hover:text-black transition-all duration-300 ">Matic</button></a>
		<a href="/product/category?category=cub"><button class="btn-raw text-primary-light border-2 border-solid border-primary-light hover:bg-primary-light hover:text-black transition-all duration-300 ">Cub</button></a>
	</div>

		
	<div class="grid grid-cols-2 md:grid-cols-4  gap-2 md:gap-4" >
		@foreach($products as $product)
		<div class=" bg-rose-100 rounded-lg px-2 md:px-4 py-2 grid grid-cols-1 md:grid-cols-2  " >
			<div class="w-[90%] md:w-[80%] mx-auto self-center">
				<img src="{{ asset($product->image) }}" alt="img">
			</div>
			<div class="pt-2 md:pt-4 row-start-2  md:row-span-1">
				
				<h2 class=" font-title text-center md:text-left text-lg md:text-2xl text-primary font-semibold ">{{ $product->name }}</h2>
				<p class="mt-2 md:mt-4 text-sm">harga</p>
				<p class="text-sm md:text-xl font-semibold ">Rp.{{ Number::format($product->harga) }}</p>
				<p class="text-xs mb-2 md:mb-4">Dibuat 10 mei 2024</p>
			</div>
				<div class="flex flex-row md:flex-row gap-2  items-center justify-center  col-span-2 ">

					<a href="{{ route('product.view',$product->id) }}">
					<button class="btn-xs ">Detail</button>
						
					</a>

					@can("managementProduct")

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
					
					@endcan
					
				</div>
		</div>
		@endforeach

	
	
	</div>
		
		<div class="my-4">
			{{ $products->links() }}
		</div>
</div>
<x-footer />
</x-app-layout>