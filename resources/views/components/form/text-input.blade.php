
@props([
    'type' => 'text', 'name', 'placeholder', 'label' => $name
])
<div class="row mt-3">
    <label
        for="{{ $name }}"
        class="form-check-label">
        {{ $label }}
    </label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{$attributes->merge(['class' => 'form-control'])}}
        value="{{ old($name) }}"
    />
    <p style="font-size: 0.6rem">{{$slot}}</p>
</div>
