@props([ 'active' => false])

@php
    $classes = 'block text-left px-3 text-sm leadind-6 hover:bg-green-900 focus:bg-green-900 hover:text-white focus:text-white';

    if($active) $classes = 'block text-left bg-yellow-200 text-black';
@endphp




<a  {{  $attributes(['class' => $classes]) }}     
> {{ $slot }}</a>