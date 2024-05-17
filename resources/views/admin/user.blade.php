<x-app-layout>
	<x-nav />
	<x-admin-menu />
	<div
		class="mt-40 flex flex-col md:flex-row items-center md:items-start gap-4 px-10 w-ful md:w-[80%] mx-auto border-2 border-solid border-accent py-6 rounded-lg"
	>
		<img src="{{ asset($user->img) }}" alt="" class="w-64 h-64 rounded-full bg-accent" />
		<div>
			<h1 class="text-3xl text-accent">{{ $user->name }}</h1>
			<p class="text-base my-2 text-slate-700">{{ $user->email }}</p>
			<p class="text-base mb-2">role : {{ $user->role }}</p>

			<div
				class="flex justify-center md:justify-start items-center gap-2 mt-2"
			>
				<form action="{{ route('admin.updateRole', $user->id) }}" method="post" id="form_role">
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

				<a href="{{ route('admin.deleteUser',$user->id) }}">
					<button class="btn-raw bg-primary">
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
	<script>
		const selectElement = document.getElementById("type");
		const submitTrigger = document.getElementById("submit-trigger");
		const form = document.querySelector("#form_role");

		selectElement.addEventListener("change", function () {
			if (this.value !== "") {
				// Submit only if a valid option is selected
				submitTrigger.value = 1; // Set hidden field to trigger submit
				form.submit(); // Submit the form
			} else {
				submitTrigger.value = 0; // Reset hidden field if no option is selected
			}
		});
	</script>
</x-app-layout>
