<!-- File: resources/views/components/animations/bounce.blade.php -->
@props(['duration' => '1000', 'delay' => '0', 'height' => '10'])

<div x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ $delay }})" x-show="show"
    x-transition:enter="transition ease-out duration-{{ $duration }}"
    x-transition:enter-start="opacity-0 transform translate-y-{{ $height }}"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:enter-end.delay.100ms="transform translate-y-{{ $height / 2 }}"
    x-transition:enter-end.delay.200ms="transform translate-y-0" {{ $attributes }}>
    {{ $slot }}
</div>
