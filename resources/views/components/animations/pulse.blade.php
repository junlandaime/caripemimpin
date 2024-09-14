<!-- File: resources/views/components/animations/pulse.blade.php -->
@props(['duration' => '1000', 'delay' => '0'])

<div x-data="{ pulse: false }" x-init="setTimeout(() => {
    setInterval(() => pulse = !pulse, {{ $duration }});
}, {{ $delay }})" :class="{ 'animate-pulse': pulse }" {{ $attributes }}>
    {{ $slot }}
</div>
