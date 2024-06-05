<!doctype html>
<html>
<head>
    <title>{{ $settings->site_title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="yandex-verification" content="e53fae12a71c7086"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    @include('blocks.favicon_block')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icomoon/styles.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ajax_form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.maskedinput.js') }}"></script>
</head>

<body>
<div id="main" data-scroll-destination="home">
    @yield('content')
</div>
<div id="footer"><div class="container pb-0">© 2024 {{ env('APP_NAME') }}</div></div>
<img id="mail-us-button" data-bs-toggle="modal" data-bs-target="#request-modal" src="{{ asset('images/mail_us_button.svg') }}" />

<x-modal id="request-modal" head="Напишите нам!">
    <div class="pt-0 ps-3 pe-3 pb-4 w-100 d-flex flex-column justify-content-center">
        <h2 class="text-center">Оставьте заявку<br>на проведение семинара</h2>
        <hr class="mt-1 mb-3">
        <form id="request-form-modal" class="w-100" action="{{ route('online_request') }}" method="post">
        @csrf
            @include('blocks.request_block')
        </form>
    </div>
</x-modal>

<x-modal id="message-modal" head="Сообщение!">
    <h2 class="text-center">Оставьте заявку<br>на проведение семинара</h2>
</x-modal>

<x-modal id="policy-modal" head="Политики конфиденциальности">
    <h2 class="text-center w-100 mt-4">1. Общие положения</h2>
    <p>Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных.</p>
    <ol>
        <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
        <li>Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта <a href="/">{{ env('APP_URL') }}</a>.
        </li>
    </ol>
    <h2 class="text-center w-100 mt-4">2. Основные понятия, используемые в Политике</h2>
    <ol>
        <li>Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники;</li>
        <li>Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных);</li>
        <li>Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу <a href="/">{{ env('APP_URL') }}</a>;</li>
        <li>Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных, и обеспечивающих их обработку информационных технологий и технических средств;</li>
        <li>Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных;</li>
        <li>Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;</li>
        <li>Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными;</li>
        <li>Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта <a href="/">{{ env('APP_URL') }}</a>;</li>
        <li>Пользователь – любой посетитель веб-сайта <a href="/">{{ env('APP_URL') }}</a>;</li>
        <li>Предоставление персональных данных – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц;</li>
        <li>Распространение персональных данных – любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом;</li>
        <li>Трансграничная передача персональных данных – передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу;</li><li>Уничтожение персональных данных – любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и (или) результате которых уничтожаются материальные носители персональных данных.</li>
    </ol>
    <h2 class="text-center w-100 mt-4">3. Оператор может обрабатывать<br>следующие персональные данные Пользователя</h2>
    <ol>
        <li>Фамилия, имя, отчество;</li>
        <li>Электронный адрес;</li>
        <li>Номера телефонов;</li>
        <li>Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).</li>
        <li>Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные данные.</li>
    </ol>
    <h2 class="text-center w-100 mt-4">4. Цели обработки персональных данных</h2>
    <ol>
        <li>Цель обработки персональных данных Пользователя — информирование Пользователя посредством отправки электронных писем; предоставление доступа Пользователю к сервисам, информации и/или материалам, содержащимся на веб-сайте.</li>
        <li>Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах, специальных предложениях и различных событиях. Пользователь всегда может отказаться от получения информационных сообщений, направив Оператору письмо на адрес электронной почты <a href="mailto:{{ env('MAIL_TO') }}">{{ env('MAIL_TO') }}</a>.</li>
        <li>Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики, служат для сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его содержания.</li>
    </ol>
    <h2 class="text-center w-100 mt-4">5. Правовые основания обработки персональных данных</h2>
    <ol>
        <li>Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы, расположенные на сайте <a href="/">{{ env('APP_URL') }}</a>. Заполняя соответствующие формы и/или отправляя свои персональные данные Оператору, Пользователь выражает свое согласие с данной Политикой.</li>
        <li>Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в настройках браузера Пользователя (включено сохранение файлов «cookie» и использование технологии JavaScript).</li>
    </ol>
    <h2 class="text-center w-100 mt-4">6. Порядок сбора, хранения, передачи и других видов обработки персональных данных</h2>
    <ol>
        <li>Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.</li>
        <li>Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.</li>
        <li>Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства.</li>
        <li>В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора <a href="mailto:{{ env('MAIL_TO') }}">{{ env('MAIL_TO') }}</a>.</li>
        <li>Срок обработки персональных данных является неограниченным. Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора <a href="mailto:{{ env('MAIL_TO') }}">{{ env('MAIL_TO') }}</a>.
        </li>
    </ol>
    <h2 class="text-center w-100 mt-4">7. Трансграничная передача персональных данных</h2>
    <ol>
        <li>Оператор до начала осуществления трансграничной передачи персональных данных обязан убедиться в том, что иностранным государством, на территорию которого предполагается осуществлять передачу персональных данных, обеспечивается надежная защита прав субъектов персональных данных.</li>
        <li>Трансграничная передача персональных данных на территории иностранных государств, не отвечающих вышеуказанным требованиям, может осуществляться только в случае наличия согласия в письменной форме субъекта персональных данных на трансграничную передачу его персональных данных и/или исполнения договора, стороной которого является субъект персональных данных.</li>
    </ol>
    <h2 class="text-center w-100 mt-4">8. Заключительные положения</h2>
    <ol>
        <li>Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты <a href="mailto:{{ env('MAIL_TO') }}">{{ env('MAIL_TO') }}</a>.</li>
        <li>В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.</li>
    </ol>
</x-modal>

</body>
</html>