@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-600 bg-gray-100 focus:border-sky-700 focus:ring-sky-600 rounded-md shadow-sm']) }}>
