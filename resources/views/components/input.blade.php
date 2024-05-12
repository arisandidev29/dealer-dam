@props([
    "type" => "text",
    "label" => "nama",
    "name" => ""
    ])

<label for="{{ $label }}">
    <p class="text-white text-sm md:text-base">{{ $label }}</p>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $label }}" class="bg-primary-light w-full text-sm md:text-base  px-4 py-1 md:py-2 rounded-md text-white text-sm border-none outline-none">
</label>