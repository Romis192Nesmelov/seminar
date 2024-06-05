<div class="mt-4 d-flex justify-content-center">
    @include('blocks.button_block',[
        'disabled' => $submitDisabled,
        'addClass' => 'me-3',
        'primary' => true,
        'dataDismiss' => false,
        'buttonType' => 'submit',
        'buttonText' => $submitText,
    ])
    @include('blocks.button_block',[
        'primary' => false,
        'dataDismiss' => true,
        'buttonText' => 'Закрыть'
    ])
</div>
