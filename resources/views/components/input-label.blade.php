@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#323c34]']) }}>
    {{ $value ?? $slot }}
</label>
