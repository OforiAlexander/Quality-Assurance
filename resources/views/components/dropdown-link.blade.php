@props(['active'])

@php
    $classes = ($active ?? false)
    ? 'block w-full px-4 py-2 text-start text-sm leading-5 dark:text-gray-300 dark:hover:bg-gray-800 focus:outline-none dark:focus:bg-gray-800 border border-dashed border-gray-100 bg-gray-800 transition duration-150 ease-in-out'
    : 'block w-full px-4 py-2 text-start text-sm leading-5 dark:text-gray-300 dark:hover:bg-gray-800 focus:outline-none dark:focus:bg-gray-800 transition duration-150 ease-in-out'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
