<!-- File: resources/views/components/animations/slide-in.blade.php -->
@props(['direction' => 'left', 'duration' => '1000', 'delay' => '0'])

@php
    $transitions = [
        'left' => 'transform -translate-x-full',
        'right' => 'transform translate-x-full',
        'top' => 'transform -translate-y-full',
        'bottom' => 'transform translate-y-full',
    ];
@endphp

<div x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ $delay }})" x-show="show"
    x-transition:enter="transition ease-out duration-{{ $duration }}"
    x-transition:enter-start="opacity-0 {{ $transitions[$direction] }}"
    x-transition:enter-end="opacity-100 transform translate-x-0 translate-y-0" {{ $attributes }}>
    {{ $slot }}
</div>
