@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-lg font-medium leading-5 text-gray-200 hover:text-gray-300 focus:text-gray-300'
            : 'inline-flex items-center px-1 pt-1 text-lg font-medium leading-5 text-gray-200 hover:text-gray-300 focus:text-gray-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
