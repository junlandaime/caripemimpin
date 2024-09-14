<!-- File: resources/views/components/animations/rotate.blade.php -->
@props(['duration' => '1000', 'delay' => '0', 'degrees' => '360'])

<div x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ $delay }})" x-show="show"
    x-transition:enter="transition ease-out duration-{{ $duration }}"
    x-transition:enter-start="opacity-0 transform rotate-0"
    x-transition:enter-end="opacity-100 transform rotate-{{ $degrees }}" {{ $attributes }}>
    {{ $slot }}
</div>
