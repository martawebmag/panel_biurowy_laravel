@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-cyan-600 focus:ring-cyan-700 rounded-md shadow-sm']) }}>
