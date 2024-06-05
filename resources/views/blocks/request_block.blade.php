@include('blocks.input_block',[
    'label' => 'Ваш телефон',
    'name' => 'phone',
    'type' => 'text',
    'placeholder' => '+7(___)___-__-__',
    'ajax' => true,
])

@include('blocks.input_block',[
    'label' => 'Ваш E-mail',
    'name' => 'email',
    'type' => 'email',
    'placeholder' => 'E-mail',
    'ajax' => true,
])

@include('blocks.checkbox_block',[
    'name' => 'i_agree',
    'checked' => true,
    'label' => 'Я принимаю условия <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#policy-modal">политики конфиденциальности</a> и даю согласие на обработку персональных данных'
])

@include('blocks.button_block',[
    'addClass' => 'mt-3 ms-auto me-auto',
    'primary' => true,
    'buttonType' => 'submit',
    'buttonText' => $settings->record_button_text
])
