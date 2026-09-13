@props(['disabled' => false])

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' => 'border-[#dce4d9] bg-white text-black rounded-md shadow-sm focus:border-[#3a5a32] focus:ring-[#3a5a32]'
    ]) !!}
>
