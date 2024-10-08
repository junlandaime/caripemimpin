<!-- File: resources/views/components/alert.blade.php -->
@props(['type' => 'info'])

@php
    $classes = [
        'info' => 'bg-blue-100 border-blue-500 text-blue-700',
        'success' => 'bg-green-100 border-green-500 text-green-700',
        'warning' => 'bg-yellow-100 border-yellow-500 text-yellow-700',
        'error' => 'bg-red-100 border-red-500 text-red-700',
    ][$type];
@endphp

<div {{ $attributes->merge(['class' => "border-l-4 p-4 {$classes}"]) }} role="alert">
    <p class="font-bold">{{ $title }}</p>
    <p>{{ $slot }}</p>
</div>
