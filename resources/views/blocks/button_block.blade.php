<div class="button-cover {{ isset($addClass) && $addClass ? $addClass : '' }}">
    <button class="btn btn-primary" {{ isset($id) && $id ? 'id='.$id : '' }} type="{{ isset($buttonType) && $buttonType ? $buttonType : 'button' }}" @if (isset($dataTarget) && $dataTarget) data-bs-toggle="modal" data-bs-target="#{{ $dataTarget }}" @elseif (isset($disabled) && $disabled) disabled="disabled" @endif @if (isset($dataDismiss) && $dataDismiss) data-bs-dismiss="modal" data-dismiss="modal" @endif>
        @if (isset($icon))
            <i class="{{ $icon }}"></i>
        @endif
        <span><nobr>{{ $buttonText }}</nobr></span>
    </button>
</div>
