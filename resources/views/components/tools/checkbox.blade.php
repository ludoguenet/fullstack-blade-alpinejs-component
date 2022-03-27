@props(['label' => ''])

<div>
    <input
        {!! $attributes->merge(['class' => 'h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer'])!!}
        @if($label) id="{{ $label }}" @endif
        type="checkbox"
    >
    @if($label)
        <label
            class="inline-block text-gray-800"
            for="{{ $label }}"
        >
            {{ $label }}
        </label>
    @endif
</div>