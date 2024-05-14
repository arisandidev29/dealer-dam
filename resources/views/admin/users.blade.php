<x-app-layout>
	<x-nav />
	<x-admin-menu />

	<div
		class="mt-32 grid grid-cols-2 md:grid-cols-4 gap-4 px-10 w-full md:w-[90%] mx-auto"
	>
		<div
			class="flex flex-col md:flex-row items-center gap-4 px-6 py-8 border-solid border-2 border-accent rounded-2xl"
		>
			<img
				src="#"
				alt="profile image"
				class="w-16 h-16 overflow-hidden rounded-full bg-accent"
			/>

			<div class="">
				<p
					class="text-xl md:text-4xl text-center md:text-left text-accent"
				>
					User
				</p>
				<p class="text-accent text-sm">Admin</p>
				<small>Dibuat 29 April 2024</small>
				<div
					class="flex justify-center md:justify-start items-center gap-2 mt-2"
				>
					<a href="">
						<button class="btn-raw bg-accent">
							<img
								src="{{ asset('storage/gear.png') }}"
								alt="edit"
								class="w-4 md:w-6 hover:rotate-45 transition-all duration-300"
							/>
						</button>
					</a>

					<a href="">
						<button class="btn-raw bg-primary">
							<img
								src="{{ asset('storage/trash.png') }}"
								alt="trash"
								class="w-4 md:w-6"
							/>
						</button>
					</a>
				</div>
				<div></div>
			</div>
		</div>
	</div>

	<x-footer />
</x-app-layout>
