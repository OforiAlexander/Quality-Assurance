@props(['image'])
<div class="w-full h-screen relative top-0 right-0">
<img src="{{ $image }}" {{ $attributes->merge(['class'=> "w-full h-screen"])}} alt="">
</div>