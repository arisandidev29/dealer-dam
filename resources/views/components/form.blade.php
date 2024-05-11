@props([
    "method" => "post",
    "action" =>  "",
    "width" => "90%",
    "mwidth" => "500px"
 ])

<form action="{{ $action }}" method="{{ $method }}" class="bg-primary w-[{{ $width }}] max-w-[{{ $mwidth }}] mx-auto rounded-xl px-6 py-16">
    {{ $slot }}
</form>