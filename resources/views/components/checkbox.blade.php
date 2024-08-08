@php($id = Str::uuid())

<div class="form-check">
    <input class="form-check-input" type="checkbox" {{ $attributes->merge([
        'value' => 1,
    ]) }} id="{{ $id }}">
    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
