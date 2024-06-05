@props([
    'labelClass' => '',
    'name' => '',
    'error' => null,
    'label' => null,
    'ajax' => true
])

<div class="mb-3">
    @if ($label)
        <label {{ $labelClass ? 'class='.$labelClass : '' }} for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="form-group {{ $error ? "error" : '' }}">
        {!! $slot !!}
        <div class="error {{ $name }}"></div>
    </div>
</div>
