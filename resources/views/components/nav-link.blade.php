<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-cyan-400 text-sm font-medium leading-5 text-cyan-400 focus:outline-none focus:border-cyan-500 transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-300 hover:text-cyan-400 hover:border-cyan-400 focus:outline-none focus:text-cyan-400 focus:border-cyan-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

{{-- @props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="{{ $active ? 'page' : 'false'}}">{{$slot}}</a> --}}
