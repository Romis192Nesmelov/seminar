@extends('layouts.main')

@section('content')
    <div id="fixed-bar">
        <a data-scroll="home" href="#">@include('blocks.logo_block', ['id' => 'logo-small'])</a>
        @include('blocks.navbar_block', ['id' => 'fixed-nav'])
    </div>
    <x-section id="header" class="color">
        <div class="w-100 d-flex justify-content-lg-start justify-content-md-between align-items-center">
            @include('blocks.logo_block', ['id' => 'logo-main'])
            @include('blocks.navbar_block', ['id' => 'main-nav'])
        </div>
        <div class="row pt-3">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h1 class="mb-3 mb-lg-4">Стратегический семинар по искусственному интеллекту</h1>
                <p class="mb-3 mb-lg-5">Откройте потенциал искусственного интеллекта в вашем бизнесе на уникальном стратегическом семинаре!</p>
                @include('blocks.button_block',[
                    'primary' => true,
                    'dataTarget' => 'request-modal',
                    'buttonText' => $settings->record_button_text
                ])
                <div id="logos" class="row mt-3 mt-lg-5">
                    @include('blocks.header_logo_block',['logo' => 'logo_4cio_white.svg','scroll' => '4CIO'])
                    @include('blocks.header_logo_block',['logo' => 'logo_academy_white.svg','scroll' => 'academy'])
                    @include('blocks.header_logo_block',['logo' => 'logo_itm_white.svg','scroll' => 'academy'])
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-lg-0 mb-3 text-center">
                <img class="w-100" src="{{ asset('images/header_image.png') }}">
            </div>
        </div>
        @include('blocks.arrow_down_block',['scroll' => 'about_project'])
    </x-section>
    <x-section class="white right" data-scroll-destination="about_project">
        <div class="row">
            <div class="col-12 col-md-6 text-center">
                <img class="w-70" src="{{ asset('images/chapter1_image.png') }}" />
            </div>
            <div class="col-12 col-md-6">
                <h1>О проекте</h1>
                <p>Стремительный рост технологий <b>искусственного интеллекта (ИИ)</b> и в особенности генеративных (GPT) ИИ-моделей создаёт <b>огромные возможности</b> для бизнеса и общества, но также содержит в себе <b>существенные вызовы и угрозы</b> в случае отказа от реализации задачи практического применения ИИ.</p>
                <p><b>Клуб ИТ-директоров 4CIO совместно с Президентской академией</b> (Российской академией народного хозяйства и государственной службы при Президенте Российской Федерации, РАНХиГС) разработали уникальную программу – <b>стратегический семинар по ИИ</b>, проведение которого позволит предметно ознакомиться с современными ИИ-решениями и практикой их использования, а также вместе с <b>ведущими экспертами рынка</b> в области цифровизации и ИИ <b>оценить потенциал применения ИИ в Вашей компании</b>. По результатам профессионального диалога будут <b>сформулированы основные стратегические инициативы и проекты в ИИ-сфере</b>, необходимые к запуску.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6" data-scroll-destination="4CIO">
                <div class="logo-about">
                    <a href="https://4cio.ru/" target="_blank"><img src="{{ asset('images/logo_4cio_gray.svg') }}" /></a>
                </div>
                <h2>Клуб 4CIO</h2>
                <ul>
                    <li>основан в 2003 году</li>
                    <li>является ведущей российской площадкой для профессионального диалога ведущих экспертов рынка ИТ и цифровизации</li>
                    <li>реализует различные проекты, в том числе образовательные, направленные на развитие рынка, в том числе выпуск Учебника 4CDTO по цифровизации и цифровой трансформации, Академия 4CIO и пр.</li>
                    <li>проводит свыше 50 мероприятий различного уровня в год</li>
                </ul>
            </div>
            <div class="col-12 col-md-6" data-scroll-destination="academy">
                <div class="logo-about">
                    <a href="https://mbacio.ru/" target="_blank">
                        <img src="{{ asset('images/logo_academy_black.svg') }}" />
                        <img src="{{ asset('images/logo_itm_blue.svg') }}" />
                    </a>
                </div>
                <h2>Школа ИТ-менеджмента Президентской академии</h2>
                <ul>
                    <li>основана свыше 100 лет назад</li>
                    <li>национальная школа государственного управления</li>
                    <li>бизнес-школа мирового уровня</li>
                    <li>национальный научно-исследовательский и экспертный центр в сфере социально-экономической политики и госуправления</li>
                    <li>более 4500 образовательных программ</li>
                    <li>свыше 270 000 обучающихся ежегодно</li>
                </ul>
            </div>
        </div>
        <hr class="mb-0">
        @include('blocks.arrow_down_block',['scroll' => 'interruption1'])
    </x-section>
    <x-section class="color" data-scroll-destination="interruption1">
        <div class="row">
            @for($i=0;$i<count($settings->content->icons);$i++)
                <div class="col-12 col-md-4 icon">
                    <img src="{{ asset('images/icons/icon'.($i+1).'.svg') }}" />
                    <div class="text-top">{{ $settings->content->icons[$i]->top }}</div>
                    <div class="text-bottom">{{ $settings->content->icons[$i]->bottom }}</div>
                </div>
            @endfor
        </div>
        @include('blocks.arrow_down_block',['scroll' => 'targets'])
    </x-section>
    <x-section class="white left" data-scroll-destination="targets">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Цели стратегического семинара</h1>
                <ul>
                    <li>обучение топ-менеджмента и сотрудников компании основам и практике применения ИИ с получением сертификатов Президентской академии о проведении профессиональной переподготовки</li>
                    <li>профессиональная дискуссия с ведущими рыночными экспертами, обсуждение и выработка понимания возможностей использования ИИ в бизнесе</li>
                    <li>формирование предложений по конкретным стратегическим инициативам и проектам компании в ИИ-сфере</li>
                    <li>создание условий для дальнейшего устойчивого технологического развития и роста потенциала компании</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 text-center">
                <img class="w-70" src="{{ asset('images/chapter2_image.png') }}" />
            </div>
        </div>
        @include('blocks.arrow_down_block',['scroll' => 'interruption2'])
    </x-section>
    <x-section class="color" data-scroll-destination="interruption2">
        <div class="row">
            @for($i=0;$i<count($settings->content->pictures);$i++)
                <div class="col-12 col-md-4">
                    <div class="rounded-frame">
                        <img src="{{ asset('images/pictures/picture'.($i+1).'.jpg') }}" />
                    </div>
                    <div class="text-top">{{ $settings->content->pictures[$i]->top }}</div>
                    <div class="text-bottom">{{ $settings->content->pictures[$i]->bottom }}</div>
                </div>
            @endfor
        </div>
        @include('blocks.arrow_down_block',['scroll' => 'certificates'])
    </x-section>
    <x-section class="white left" data-scroll-destination="certificates">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1 class="slim">Сертификаты<br><span>государственного образца</span></h1>
                <p class="mb-2">Сотрудники компании, участвующие в стратегическом семинаре, по результатам обучения получат <b>сертификаты государственного образца Президентской академии</b> о прохождении <b>профессиональной переподготовки</b> в сфере цифровизации и искусственного интеллекта.</p>
                <div class="logo-about"><img src="{{ asset('images/logo_academy_black.svg') }}" /></div>
            </div>
            <div class="col-12 col-md-4 text-center">
                @include('blocks.certificate_block',['file' => 'cert1.jpg'])
            </div>
            <div class="col-12 col-md-4 text-center">
                @include('blocks.certificate_block',['file' => 'cert2.jpg'])
            </div>
        </div>
        <hr class="mb-0">
        @include('blocks.arrow_down_block',['scroll' => 'our_experts'])
    </x-section>
    <x-section class="color" data-scroll-destination="our_experts">
        <h1>Ведущие эксперты рынка</h1>
        <p>Вашими лекторами/ преподавателями/ ведущими мастер-классов и стратегических сессий будут ведущие эксперты:</p>
        <div id="our-experts" class="owl-carousel">
            @for($i=0;$i<count($settings->content->experts);$i++)
                <div>
                    <div class="photo-frame"><img src="{{ asset('images/experts/expert'.($i+1).'.jpg') }}"></div>
                    <div class="text-top">{{ $settings->content->experts[$i]->name }}</div>
                    <div class="text-bottom">{{ $settings->content->experts[$i]->title }}</div>
                </div>
            @endfor
        </div>
        @include('blocks.arrow_down_block',['scroll' => 'faq'])
    </x-section>
    <x-section class="white left" data-scroll-destination="faq">
        <h1>Часто задаваемые вопросы</h1>
        <div id="faq" class="accordion">
            @for($i=0;$i<count($settings->content->questions);$i++)
                @include('blocks.accordion_block',[
                    'parentId' => 'faq',
                    'itemId' => 'question'.$i,
                    'itemHead' => $settings->content->questions[$i]->question,
                    'itemText' => $settings->content->questions[$i]->answer
                ])
            @endfor
        </div>
        <hr class="mb-0">
        @include('blocks.arrow_down_block',['scroll' => 'contacts'])
    </x-section>
    <x-section class="color pb-4" data-scroll-destination="contacts">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1>Контакты</h1>
                <p class="fs-lg-6 text-center text-md-start">
                    @include('blocks.phone_block',['phone' => $settings->contacts->phone])
                    @include('blocks.email_block',['email' => $settings->contacts->email])
                </p>
                <hr>
                <div class="row">
                    @for($i=0;$i<(count($settings->content->experts) > 2 ? 2 : count($settings->content->experts));$i++)
                        <div class="col-12 col-md-6 row mb-3">
                            <div class="col-12 col-lg-4 mb-md-3">
                                <div class="photo-frame small"><img src="{{ asset('images/experts/expert'.($i+1).'.jpg') }}"></div>
                            </div>
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center">
                                <div class="text-top text-lg-start">{{ $settings->content->experts[$i]->name }}</div>
                                <div class="text-bottom text-lg-start mb-0">
                                    {{ $settings->content->experts[$i]->title }}
                                    <div>
                                        <a href="https://wa.me/{{ $settings->content->experts[$i]->whatsapp }}" target="_blank">
                                            <img class="messenger-icon me-1" src="{{ asset('images/whatsapp_icon.svg') }}"/>
                                        </a>
                                        <a href="https://telegram.im/{{ $settings->content->experts[$i]->telegram }}" target="_blank">
                                            <img class="messenger-icon" src="{{ asset('images/telegram_icon.svg') }}"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="rounded-frame form w-100 p-4 bg-light">
                    <form id="request-form-contacts" class="w-100" action="{{ route('online_request') }}" method="post">
                        @csrf
                        <h2 class="text-center">оставьте заявку<br>на проведение семинара</h2>
                        <hr class="mt-1 mb-3">
                        @include('blocks.request_block')
                    </form>
                </div>
            </div>
        </div>
    </x-section>
@endsection
