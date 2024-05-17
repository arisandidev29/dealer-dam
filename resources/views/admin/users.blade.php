<x-app-layout>
	<x-nav />
	<x-admin-menu />

	<div
		class="mt-32 grid grid-cols-1 md:grid-cols-4 gap-4 px-10 w-full md:w-[90%] mx-auto"
	>
		@foreach ($users as $user)

		<div
			class="flex flex-col md:flex-row items-center gap-4 px-6 py-8 border-solid border-2 border-accent rounded-2xl"
		>
			<img
				src="{{ asset($user->img) }}"
				alt="profile image"
				class="w-16 h-16 overflow-hidden rounded-full bg-accent object-cover"
			/>

			<div class="">
				<p
					class="text-xl md:text-2xl truncate text-center md:text-left text-accent"
				>
					{{ $user->name }}
				</p>
				<p class="text-accent text-sm">{{ $user->role }}</p>
				<small>Dibuat {{ $user->created_at->format("j F Y") }}</small>
				<div
					class="flex flex-1 justify-center md:justify-start items-center gap-2 mt-2"
				>
					<form
						action="{{ route('admin.updateRole', $user->id) }}"
						method="post"
						class="form_role"
					>
						@csrf
						<select
							name="type"
							id="type"
							class="bg-primary-light text-white rounded-lg px-2 py-2"

						>
							<option value="">_</option>
							<option value="guest">guest</option>
							<option value="editor">editor</option>
							<option value="admin">admin</option>
						</select>
						<input type="submit" id="submit-trigger" hidden />
					</form>

					{{--
					<a href="">
						<button class="btn-raw bg-accent">
							<img
								src="{{ asset('storage/gear.png') }}"
								alt="edit"
								class="w-4 md:w-6 hover:rotate-45 transition-all duration-300"
							/>
						</button>
					</a>
					--}}

					<a href="{{ route('admin.deleteUser',$user->id) }}">
						<button class="btn-raw py-1 px-[.5rem] bg-primary">
							<img
								src="{{ asset('storage/trash.png') }}"
								alt="trash"
								class="w-4 md:w-6"
							/>
						</button>
					</a>
				</div>
			</div>
		</div>

		@endforeach
	</div>

	<x-footer />
	<script>
		const forms = document.querySelectorAll('form.form_role'); // Select all forms with class "form_role"

		for (const form of forms) {
		  form.addEventListener('change', handleRoleChange); // Attach event listener to each form
		}

		function handleRoleChange(event) {
		  const form = event.currentTarget; // Access the current form directly
		  const selectElement = form.querySelector('select[name="type"]');
		  const submitTrigger = form.querySelector('input[type="submit"]');

		  if (selectElement.value !== '') {
		    submitTrigger.value = 1;
		    form.submit();
		  } else {
		    submitTrigger.value = 0;
		  }
		}


	</script>
</x-app-layout>
