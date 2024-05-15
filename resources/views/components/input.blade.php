@props([
    "type" => "text",
    "label" => "nama",
    "name" => "",
    "value" => ""
    ])

<label for="{{ $label }}">
    <p class="text-white text-sm md:text-base">{{ $label }}</p>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $label }}" value="{{ old($name) ?? "" }}" class="bg-primary-light w-full text-xs  md:text-base  px-4 py-1 md:py-2 rounded-md text-white  border-none outline-none">

    @error($name)
        <p class="text-white text-sm mt-2 ">{{ $message }}</p>
    @enderror
</label>