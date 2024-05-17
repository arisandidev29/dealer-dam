
<form {{ $attributes->merge([
    "class" => "bg-primary max-w-[500px]  w-full mx-auto rounded-xl px-6 py-6 md:py-16 h-max"
    ]) }}  >
    {{ $slot }}
</form>