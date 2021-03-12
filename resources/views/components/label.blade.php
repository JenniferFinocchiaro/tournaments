@props(['value'])

<label {{ $attributes->merge(['class' => 'visually-hidden']) }}>
    {{ $value ?? $slot }}
</label>
