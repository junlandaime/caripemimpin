<!-- File: resources/views/components/animations/fade-in.blade.php -->
@props(['duration' => '1000', 'delay' => '0'])

<div x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ $delay }})" x-show="show"
    x-transition:enter="transition ease-out duration-{{ $duration }}" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" {{ $attributes }}>
    {{ $slot }}
</div>
