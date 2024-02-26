@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:border-indigo-500 focus:ring-indigo-500 bg-gray-100 focus:outline-none outline-none border-transparent rounded-md shadow-sm text-md text-gray-800 placeholder:text-gray-400
']) !!}>
