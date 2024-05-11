@props([
    "type" => "text",
    "label" => "nama",
    "name" => ""
    ])

<label for="{{ $label }}">
    <p class="text-white">{{ $label }}</p>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $label }}" class="bg-primary-light w-full  px-4 py-2 rounded-md text-white text-sm border-none outline-none">
</label>