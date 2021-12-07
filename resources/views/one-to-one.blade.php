<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>

    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: grey
    }

    .btn-primary {
        background-color: #25408F !important;
        border-color: #25408F !important;
    }

    .label-time {
        margin-right: 25px !important;
    }

    .input-time {
        width: auto !important;
    }

    @if(app()->getLocale() != 'ar')
        .text-right {
            text-align: left !important;
        }
        .label-time {
            margin-left: 25px;
            margin-right: 0 !important;
        }
        .input-time {
            margin: 0 !important;
        }

    @endif

    #heading {
        text-transform: uppercase;
        color: #25408F;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
        font-family: 'Cairo', sans-serif;
    }

    #std-name {
       cursor: default !important;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: 'Cairo', sans-serif;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #25408F;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #25408F;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #25408F;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #25408F;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #25408F
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 33%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #msform label {
        color: black !important;
        font-weight: bold !important;
        font-family: 'Cairo', sans-serif;
    }

    #msform #checks-section label {
        color: black !important;
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #25408F
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #25408F
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>

    <style>
        .ltr-table {
            margin: auto !important;
        }
        .ltr-table tr td{
            text-align: center !important;
            font-size: 12pt;
            color: #000000;
            font-width: bold;
            padding: 5px;
        }
    </style>

    {{--  checkout frame styles  --}}
    <style>*,*::after,*::before{box-sizing:border-box}html{padding:1rem;background-color:#FFF;font-family: 'Cairo', sans-serif;, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}#payment-form{width:31.5rem;margin:0 auto}iframe{width:100%}.one-liner{display:flex;flex-direction:column}#pay-button{border:none;border-radius:3px;color:#FFF;font-weight:500;height:40px;width:100%;background-color:#13395E;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:active{background-color:#0B2A49;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:hover{background-color:#15406B;box-shadow:0 2px 5px 0 rgba(19,57,94,0.4)}#pay-button:disabled{background-color:#697887;box-shadow:none}#pay-button:not(:disabled){cursor:pointer}.card-frame{border:solid 1px #13395E;border-radius:3px;width:100%;margin-bottom:8px;height:40px;box-shadow:0 1px 3px 0 rgba(19,57,94,0.2)}.card-frame.frame--rendered{opacity:1}.card-frame.frame--rendered.frame--focus{border:solid 1px #13395E;box-shadow:0 2px 5px 0 rgba(19,57,94,0.15)}.card-frame.frame--rendered.frame--invalid{border:solid 1px #D96830;box-shadow:0 2px 5px 0 rgba(217,104,48,0.15)}.success-payment-message{color:#13395E;line-height:1.4}.token{color:#b35e14;font-size:0.9rem;font-family: 'Cairo', sans-serif;}@media screen and (min-width: 31rem){.one-liner{flex-direction:row}.card-frame{width:318px;margin-bottom:0}#pay-button{width:175px;margin-left:8px}}</style>

</head>
<body>

    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav m-auto">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="nav-item active">
                            <a class="nav-link"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </nav>

        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">{{ __('one_to_one.Second semester 2022 - one to one') }}</h2>

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form id="msform" action="{{ route('semester.subscribeOneToOne') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- progressbar -->
                        <ul id="progressbar" class="d-flex flex-row">
                            <li class="active" id="account"><strong>{{ __('resubscribe.Information and notes') }}</strong></li>
                            <li id="personal"><strong>{{ __('resubscribe.Register') }}</strong></li>
                            <li id="confirm"><strong>{{ __('resubscribe.Payment and termination') }}</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                            <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="fs-title text-center">{{ __('resubscribe.General information') }}</h2>
                                    </div>
                                </div>

                                @if(app()->getLocale() == 'ar')
                                    <p class="text-right">

                                        أعزاءنا أولياء الأمور.. بناء على طلب العديد من أولياء الأمور، تعلن مجموعة الفرقان عن إطلاق المرحلة الأولى من نظام التعليم الفردي لطلاب وطالبات قسم الحفظ ابتداء من الفصل الدراسي القادم، حيث سيتم في المرحلة الأولى تطبيق النظام على عدد محدد من طلاب وطالبات قسم الحفظ ، وفي المرحلة الثانية سيتم إتاحة خيار التعليم الفردي لبقية الأقسام، حيث يتميز نظام التعليم الفردي بتخصيص معلم خاص لكل طالب، وتقليل مدة الحلقة مع الحفاظ على جودة التعليم المعهودة، يرجى الاطلاع على التفاصيل التالية:


                                        <br>
                                        <br>

                                        <table class="ltr-table" border="2">
                                            <tbody>
                                                <tr>
                                                    <td>الفئة المستهدفة:</td>
                                                    <td style="color: #48742b;">طلاب وطالبات قسم الحفظ</td>
                                                </tr>
                                                <tr>
                                                    <td>مدة الحصة:</td>
                                                    <td style="color: #48742b;">ساعة يوميا (5 أيام في الأسبوع)</td>
                                                </tr>
                                                <tr>
                                                    <td>الفترة:</td>
                                                    <td style="color: #48742b;">يمكن اختيار الوقت المفضل ضمن الأوقات المحددة أدناه</td>
                                                </tr>
                                                <tr>
                                                    <td>الرسوم الدراسية:</td>
                                                    <td style="color: #48742b;">900$ (3375 ريال) للفصل الدراسي</td>
                                                </tr>
                                                <tr>
                                                    <td>مدة الفصل الدراسي:</td>
                                                    <td style="color: #48742b;">4 أشهر</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    <br>

                                        <span style="display: block; color: #ea3223; font-weight: bold; text-align: center !important;">
                                            هام! في حال الرغبة في التسجيل في مسار التعليم الفردي يرجى تعبئة الاستمارة التالية، وستكون بداية الفصل الدراسي الأول للطلاب والطالبات من تاريخ 29/08/2021م الموافق 21/01/1443هـ إلى 31/12/2021م الموافق 26/05/1443هـ.
                                        </span>

                                        <br>
                                        <br>

                                        <span class="d-block text-center" style="font-weight: bold;">
                                            في حال وجود استفسارات حول آليات سداد الرسوم وخيارات الدفع المتاحة نفيدكم أنه قد تم تخصيص أحد ممثلي قسم الحسابات للرد على استفساراتكم حيال الأمر وتقديم الدعم الكامل عبر المكتب الافتراضي لحل أي عوائق إن شاء الله..
                                        </span>

                                        <br>
                                        <br>

                                        <span class="d-block text-center" style="color: #ea3223; font-weight: bold;">رابط المكتب الافتراضي:</span>
                                        <a class="text-center w-100 d-block" href="https://furqangroup.zoom.us/j/99947595293">https://furqangroup.zoom.us/j/99947595293</a>
                                        <br>

                                        <span class="d-block text-center" style="font-weight: bold !important; color: black; color: #ea3223;">الأسئلة الشائعة:</span>

                                        <span class="d-block text-center" style="color: #48742b;">أوقات الاستقبال من (الأحد إلى الخميس):</span>

                                         <ul class="text-right">
                                            <li>9:00 صباحا - 10:00 مساء بتوقيت مكة المكرمة (GMT+3)</li>
                                            <li>8:00 صباحا - 09:00 مساء بتوقيت المغرب العربي وفرنسا  (GMT+1)</li>
                                            <li>2:00 صباحا - 03:00 مساء بتوقيت نيويورك ( GMT-5)</li>
                                        </ul>

                                        <span class="text-center d-block">مع تمنياتنا للجميع بالتوفيق والنجاح.</span>

                                    </p>
                                @else
                                    <p>
                                        <span class="d-block">Dear Parents,</span>
                                        <span class="d-block">
                                            Furqan Group is pleased to announce the launch of one-to-one classes for students in the memorization (Hifz) program. This initiative comes in response to several requests we have been receiving from parents. The initial phase of one-to-one class project will start from the next semester with limited capacity solely for .students in the memorization trajectory.

Students from other trajectories shall be able to .enroll in the second phase of the project.
                                        </span>

                                        <br>

                                        <span class="d-block">
                                            In the one-to-one class system, a private tutor is assigned for each student individually. The class duration is reduced while the quality of education is maintained equally to the regular class :systems. Kindly review the following details:
                                        </span>

                                        <table class="ltr-table" border="2">
                                            <tbody>
                                                <tr>
                                                    <td>Target group</td>
                                                    <td style="color: #48742b;">Students in Memorization program (Hifz)</td>
                                                </tr>
                                                <tr>
                                                    <td>Class duration</td>
                                                    <td style="color: #48742b;">1 hour, 5 days a week (Sunday to Thursday)</td>
                                                </tr>
                                                <tr>
                                                    <td>Time</td>
                                                    <td style="color: #48742b;">The desired session can be chosen below</td>
                                                </tr>
                                                <tr>
                                                    <td>Fees</td>
                                                    <td style="color: #48742b;">900$ (3375 SAR) per semester</td>
                                                </tr>
                                                <tr>
                                                    <td>Semester duration</td>
                                                    <td style="color: #48742b;">4 months</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    <br>
                                        <span class="d-block" style="color: #bb271a; font-weight: bold; text-align: center;">
                                            Important! If you would like to register for the one-to-one class system, please fill out the following form. The First semester is to begin .from 29.08.2021 until 30.12.2021.
                                        </span>

                                        <br>

                                        <span class="d-block">
                                            If you had any questions regarding the payment options and methods, we would like to inform you that you can visit our virtual office where we have assigned one of our representatives from the financial department to answer your questions and help you with that.
                                        </span>

                                        <span class="w-100 text-center d-block" style="color: #bb271a; font-weight: bold;">
                                            virtual office link:
                                        </span>

                                        <a class="w-100 text-center d-block" href="https://furqangroup.zoom.us/j/99947595293">
                                            https://furqangroup.zoom.us/j/99947595293
                                        </a>
                                        <br>

                                        <span class="w-100 text-center d-block" style="color: #bb271a; font-weight: bold;">
                                            Virtual office times:
                                        </span>

                                        <span class="w-100 text-center d-block" style="color: #48742b; font-weight: bold;">
                                            From Sunday till Thursday
                                        </span>
                                        <span class="w-100 text-center d-block" style="color: #bb271a; font-weight: bold;">
                                            at
                                        </span>

                                        <ul>
                                            <li>09:00AM - 10:00PM Mecca time (GMT + 3)</li>
                                            <li>08:00AM - 09:00PM Morocco and France time (GMT+1)</li>
                                            <li>02:00AM - 03:00PM New York time (GMT-5)</li>
                                        </ul>

                                        <span class="w-100 text-center d-block" style="color: black; font-weight: bold;">
                                            We wish you all good health and success by Allah will.
                                        </span>

                                    </p>
                                @endif

                            </div>

                            <input type="button" name="next" class="next action-button" value="{{ __('resubscribe.Next') }}" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">{{ __('resubscribe.Register') }}</h2>
                                    </div>
                                </div>

{{--                                <label class="text-danger mb-3 w-100 text-right">{{ __('resubscribe.Required') }}</label>--}}

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="std-section">{{ __('resubscribe.Section') }}</label>
                                    </div>
                                    <select class="custom-select" name="section" id="std-section" required>
                                        <option selected>{{ __('resubscribe.Choose') }}...</option>
                                        <option value="1">{{ __('resubscribe.Male') }}</option>
                                        <option value="2">{{ __('resubscribe.Female') }}</option>
                                    </select>
                                </div>

                                <div class="form-group text-right">
                                    <label for="std-number" class="text-right">{{ __('resubscribe.Serial Number') }}</label>
                                    <input type="number" min="0" name="student_number" class="form-control" id="std-number" placeholder="{{ __('resubscribe.Serial Number') }}" required>
                                </div>

                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-primary w-50" id="std-number-search">{{ __('resubscribe.Search') }}</button>
                                </div>

                                <div class="form-group text-right" id="std-name-section">
                                    <label for="std-name" class="text-right">{{ __('resubscribe.Name') }} *</label>
                                    <input type="text" min="0" name="student_name" class="form-control" id="std-name" placeholder="..." required readonly>
                                </div>

                                <div class="form-group text-right">
                                    <label for="residence_country">{{ __('resubscribe.Country of Residence') }}</label>
                                    <select class="form-control" name="residence_country" id="residence_country" required>
                                        <option> - </option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group text-right">
                                    <label for="std-email">{{ __('resubscribe.Email') }}</label>
                                    <input type="email" class="form-control" name="email" id="std-email" placeholder="{{ __('resubscribe.Email') }}" required>
                                </div>
                                <div class="form-group text-right">
                                    <label for="std-email-conf">{{ __('resubscribe.Confirm Email') }}</label>
                                    <input type="email" class="form-control" id="std-email-conf" placeholder="{{ __('resubscribe.Confirm Email') }}" required>
                                </div>

                                @foreach($favorite_times as $key => $favorite_time)
                                    <div class="form-group text-right">
                                        <input class="form-check-input input-time" type="radio" name="favorite_time" id="{{ $favorite_time->title . $key }}" value="{{ $favorite_time->title }}" required>
                                        <label class="form-check-label label-time" for="{{ $favorite_time->title . $key }}">
                                            {{ $favorite_time->title }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                            <input type="button" name="next" class="next action-button" value="{{ __('resubscribe.Next') }}" />
                            <input type="button" name="previous" class="previous action-button-previous" value="{{ __('resubscribe.Previous') }}" />
                        </fieldset>

                        <fieldset id="checks-section">

                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">{{ __('resubscribe.Payment and termination') }}</h2>
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <div class="form-check text-right">
                                        <input class="form-check-input w-auto" type="checkbox" value="" id="agree-terms" required>
                                        <label class="form-check-label mr-4" for="agree-terms">
                                            {{ __('resubscribe.terms and conditions') }}
                                        </label>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div>
                                    <div class="form-check text-right">
                                        <input class="form-check-input w-auto" type="radio" name="payment_method" id="checkout_gateway" value="checkout_gateway">
                                        <label class="form-check-label mr-4" for="checkout_gateway">
                                            {!! __('one_to_one.Payment via credit card') !!}
                                        </label>
                                        <img class="text-center d-block" style="width: 38%;margin: auto;margin-top: 9px;" src="{{ asset('card-icons/cards.png') }}" alt="Cards icons">
                                    </div>
                                    <br>

                                    <div class="form-check text-right">
                                        <input class="form-check-input w-auto" type="radio" name="payment_method" id="hsbc" value="hsbc">
                                        <label class="form-check-label mr-4" for="hsbc">
                                            {{ __('one_to_one.HSBC Bank') }}
                                        </label>
                                    </div>
                                </div>

                                <div id="hsbc-section-elements" class="d-none text-right">
                                    <br>
                                    <label>
                                        <strong>{{ __('resubscribe.Registration method') }}</strong>
                                    </label>

                                    <table class="table table-bordered">

                                        <tbody>
                                        <tr>
                                            <td>{{ __('resubscribe.Bank name') }}</td>
                                            <td>The Hongkong and Shanghai Banking Corporation Limited (HSBC)</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('resubscribe.Bank address') }}</td>
                                            <td>Queens Road Central Hong Kong 1</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('resubscribe.Swift code') }}</td>
                                            <td>HSBCHKHHHKH</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('resubscribe.Beneficiary Name') }}</td>
                                            <td>FURQAN GROUP FOR EDUCATION AND IT LIMITED</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('resubscribe.Account number') }}</td>
                                            <td>023832223838</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('resubscribe.Account currency') }}</td>
                                            <td>دولار أمريكي (USD)</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('resubscribe.Beneficiary address') }}</td>
                                            <td>Room 409 Beverley Commercial Center Kowloon Hong Kong</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group">
                                        <label for="money_transfer_image_path">{{ __('resubscribe.Choose the transfer picture') }}</label>
                                        <input type="file" class="form-control" style="height: 50px" name="money_transfer_image_path" id="money_transfer_image_path">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="bank_name">{{ __('resubscribe.Bank name') }}</label>
                                        <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="{{ __('resubscribe.Bank name') }}">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="account_owner">{{ __('resubscribe.Account holder name (in English as it appears in the bank)') }}</label>
                                        <input type="text" class="form-control" name="account_owner" id="account_owner" placeholder="{{ __('resubscribe.Account holder name (in English as it appears in the bank)') }}">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="transfer_date">{{ __('resubscribe.Transfer date') }}</label>
                                        <input type="date" class="form-control" name="transfer_date" id="transfer_date">
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="bank_reference_number">{{ __('resubscribe.Operation reference number') }}</label>
                                        <input type="text" class="form-control" name="bank_reference_number" id="bank_reference_number" placeholder="{{ __('resubscribe.Operation reference number') }}">
                                    </div>

                                </div>

                                <input type="hidden" name="token_pay" id="token_pay">
                            </div>

                            <button type="submit" id="submit-main-form" class="btn btn-secondary w-100 mt-2" disabled>{{ __('resubscribe.Send') }}</button>
                            <input type="button" name="previous" class="previous action-button-previous" value="{{ __('resubscribe.Previous') }}" />

                        </fieldset>

                    </form>

                    <form id="payment-form" method="POST" action="https://merchant.com/charge-card" class="d-none">
                        <div class="one-liner" style="flex-direction: column;justify-content: space-between;align-items: center;height: 100px;">
                            <div class="card-frame"></div>
                            <button class="btn btn-primary" id="pay-button" disabled>
                                {{ __('resubscribe.Checkout') }}
                                <i class="fas fa-spinner fa-spin d-none"></i>
                            </button>
                        </div>
                        <p class="error-message text-center"></p>
                        <p class="success-payment-message text-center"></p>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
{{--                    <form id="payment-form" method="POST" action="https://merchant.com/charge-card">--}}
{{--                        <div class="one-liner" style="flex-direction: column;justify-content: space-between;align-items: center;height: 100px;">--}}
{{--                            <div class="card-frame"></div>--}}
{{--                            <button class="btn btn-primary" id="pay-button" disabled>--}}
{{--                                إتمام الدفع--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <p class="error-message text-center"></p>--}}
{{--                        <p class="success-payment-message text-center"></p>--}}
{{--                    </form>--}}
                </div>
                <div class="modal-footer d-none">
                    <button type="button" class="d-none" id="close-modal" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <!-- add frames script -->
<script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
<script>
    /* global Frames */
    var payButton = document.getElementById("pay-button");
    var form = document.getElementById("payment-form");
    var errorStack = [];

    Frames.init("{{ config('checkoutpayment.' . env('CHECKOUT_TYPE') . '.CHECKOUT_PK') }}");

    Frames.addEventHandler(
        Frames.Events.CARD_VALIDATION_CHANGED,
        onCardValidationChanged
    );
    function onCardValidationChanged(event) {
        console.log("CARD_VALIDATION_CHANGED: %o", event);
        payButton.disabled = !Frames.isCardValid();
    }

    Frames.addEventHandler(
        Frames.Events.FRAME_VALIDATION_CHANGED,
        onValidationChanged
    );
    function onValidationChanged(event) {
        console.log("FRAME_VALIDATION_CHANGED: %o", event);

        var errorMessageElement = document.querySelector(".error-message");
        var hasError = !event.isValid && !event.isEmpty;

        if (hasError) {
            errorStack.push(event.element);
        } else {
            errorStack = errorStack.filter(function (element) {
                return element !== event.element;
            });
        }

        var errorMessage = errorStack.length
            ? getErrorMessage(errorStack[errorStack.length - 1])
            : "";
        errorMessageElement.textContent = errorMessage;
    }

    function getErrorMessage(element) {
        var errors = {
            "card-number": "Please enter a valid card number",
            "expiry-date": "Please enter a valid expiry date",
            cvv: "Please enter a valid cvv code",
        };

        return errors[element];
    }

    Frames.addEventHandler(
        Frames.Events.CARD_TOKENIZATION_FAILED,
        onCardTokenizationFailed
    );
    function onCardTokenizationFailed(error) {
        console.log("CARD_TOKENIZATION_FAILED: %o", error);
        Frames.enableSubmitForm();
    }

    Frames.addEventHandler(Frames.Events.CARD_TOKENIZED, onCardTokenized);
    function onCardTokenized(event) {
        var el = document.querySelector(".success-payment-message");
        // el.innerHTML =
        //     "Card tokenization completed<br>" +
        //     'Your card token is: <span class="token">' +
        //     event.token +
        //     "</span>";
        // el.innerHTML = '<span class="success">' + "يمكنكم متابعة التسجيل بالنقر على زر الارسال بالاسفل" + "</span>";
        $('#token_pay').val(event.token);

        $('#pay-button .fa-spinner').removeClass('d-none');

        setTimeout(function(){
            $('#msform').submit();
        }, 1000);

    }

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        Frames.submitCard();
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

            current_fs = $(this).parent();

            if (validate(current_fs.find("input[required]"))){
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {

                        // for making fieldset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 500
                });
                setProgressBar(++current);
            }
            if($('#checkout_gateway').is(':checked')){
                $("#payment-form").removeClass('d-none');
            }
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fieldset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(--current);

            $("#payment-form").addClass('d-none');

        });

        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width",percent+"%")
        }

        $(".submit").click(function(){
            return false;
        })

        $(document).on('click', 'form #std-number-search', function (e) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('semester.registration.getStudentInfo') }}?std_number=' + $('form #std-number').val() + '&std_section=' + $('form #std-section').val() + '&form_type=one_to_one',
                success: function (data) {
                    $('form #std-name').val(data.name);
                    $('form #std-name').css('border-color', 'green');
                },
                error: function (data){
                    $('form #std-name').val('');
                    $('form #std-name').attr("placeholder", data.responseJSON.msg);
                    $('form #std-name').attr("title", data.responseJSON.msg);
                    $('form #std-name').css('border-color', 'red');
                }
            });
        });

        $(document).on('click', 'form #hsbc', function (e) {

            if($('#agree-terms').is(':checked')){
                $("#hsbc-section-elements").removeClass('d-none');
                $("#hsbc-section-elements").show();
                $("#hsbc-section-elements input").prop('required',true);

                $("#payment-form").addClass('d-none');
                $("#submit-main-form").removeAttr('disabled');
                $("#submit-main-form").removeClass('btn-secondary');
                $("#submit-main-form").addClass('btn-primary');
                $("#submit-main-form").removeClass('d-none');
            }else{
                e.preventDefault();
                alert('يجب عليك الموافقة على صحة البيانات السابقة')
            }
        });

        $(document).on('click', 'form #checkout_gateway', function (e) {

            if($('#agree-terms').is(':checked')){
                $("#hsbc-section-elements").addClass('d-none');
                $("#hsbc-section-elements").hide();
                $("#hsbc-section-elements input").removeAttr('required');

                $("#payment-form").removeClass('d-none');
                $("#submit-main-form").addClass('d-none');
            }else{
                e.preventDefault();
                alert('يجب عليك الموافقة على صحة البيانات السابقة')
            }

        });

        function validate(inputs) {
            flag = true;

            for (index = 0; index < inputs.length; ++index) {
                if (inputs[index].value == null || inputs[index].value == ""){
                    $(inputs[index]).css('border-color', 'red');
                    flag = false;
                }else{
                    $(inputs[index]).css('border-color', 'green');
                }

                if ($(inputs[index]).attr('id') == 'std-email' || $(inputs[index]).attr('id') == 'std-email-conf'){
                    if ($('#std-email').val() == $('#std-email-conf').val() &&
                        $('#std-email').val() != "" &&
                        $('#std-email').val() != null &&
                        $('#std-email-conf').val() != "" &&
                        $('#std-email-conf').val() != null
                    ){
                        $('#std-email-conf').css('border-color', 'green');
                        $('#std-email').css('border-color', 'green');
                    }else{
                        $('#std-email-conf').css('border-color', 'red');
                        $('#std-email').css('border-color', 'red');
                        flag = false;
                    }

                }

            }

            return flag;
        }

        $(document).on('change', 'form#msform input[required]', function (e) {
            if ($(this).val() != "" && $(this).val() != null){
                $(this).css('border-color', 'green');
            }
        });

    });
</script>

</body>
</html>