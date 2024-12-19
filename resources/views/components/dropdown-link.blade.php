@props(['active'])

@php
    $classes = $active ?? false ? 'bg-blue-500 text-white' : '';
@endphp

<a
    {{ $attributes->merge(['class' => $classes . ' block w-full px-4 py-2 text-start text-sm leading-5 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out text-gray-100']) }}>{{ $slot }}</a>
