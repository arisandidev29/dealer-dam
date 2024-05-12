@props([
    "method" => "post",
    "action" =>  "",
    "width" => "90%",
 ])

<form action="{{ $action }}" method="{{ $method }}" class="bg-primary w-[{{ $width }}] max-w-[500px] mx-auto rounded-xl px-6 py-16">
    {{ $slot }}
</form>