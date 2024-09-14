<!-- File: resources/views/components/card.blade.php -->
@props(['title' => ''])

<div {{ $attributes->merge(['class' => 'bg-white overflow-hidden shadow-sm sm:rounded-lg']) }}>
    @if ($title)
        <div class="px-4 py-5 sm:px-6 bg-gray-50">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $title }}
            </h3>
        </div>
    @endif
    <div class="px-4 py-5 sm:p-6">
        {{ $slot }}
    </div>
</div>
