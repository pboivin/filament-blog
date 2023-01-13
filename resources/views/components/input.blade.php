@props([
    'name',
    'label',
    'id' => '',
    'type' => 'text',
])

@php
    $id = $id ?: "{$name}_input";
@endphp

<div>
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
        {{ $attributes }}
    />
</div>
