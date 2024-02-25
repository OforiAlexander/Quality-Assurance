@props(['disabled' => false])
<div>
    <textarea id="" cols="30" rows="10" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm']) !!}></textarea>
</div>