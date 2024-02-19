@props(['disabled' => false])
<div>
    <select  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm']) !!}>
       {{ $slot }}
    </select>
</div>