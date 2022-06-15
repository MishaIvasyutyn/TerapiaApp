@extends('layouts.app')
@section('title','Мануальна терапія')
@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");

        .hide {
            display: none;
        }

        figure {
            margin: auto;
            width: 210px;
            height: 60px;
            cursor: pointer;
            perspective: 500px;
            -webkit-perspective: 500px;
            margin-top: 20px;
        }

        figure div {
            height: 100%;
            transform-style: preserve-3d;
            -webkit-transform-style: preserve-3d;
            transition: 0.25s;
            -webkit-transition: 0.25s;
        }

        figure:hover div {
            transform: rotateX(-90deg);
        }

        .spannn {
            width: 100%;
            height: 100%;
            position: absolute;
            box-sizing: border-box;
            border: 5px solid #fff;
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 50px;
            font-size: 17pt;
            text-align: center;
        }

        .spannn:nth-child(1) {
            color: #fff;
            transform: translate3d(0, 0, 30px);
            -webkit-transform: translate3d(0, 0, 30px);
        }

        .spannn:nth-child(2) {
            color: #00d2eb;
            background: #fff;
            transform: rotateX(90deg) translate3d(0, 0, 30px);
            -webkit-transform: rotateX(90deg) translate3d(0, 0, 30px);
        }

        .hide {
            display: none;
        }

        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap");
        details {
            border-radius: 20px;
            font-family: "Roboto", sans-serif;
            color: #4a5568;
            font-size: 1.5rem;
            margin: auto;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            background: #ffffff;
            position: relative;
            width: 224px;
        }

        details .summary-title {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        details:hover {
            cursor: pointer;
        }

        details .summary-content {
            color: #010b3c94;
            border-radius: 25px !important;
            background-color: #dcfffdad;
            cursor: default;
            padding: 1em;
            font-weight: 500;
            line-height: 1.5;
        }

        details summary {
            padding: 1em;
        }

        details summary:focus {
            outline: none;
        }

        details summary:hover .summary-chevron-up svg {
            opacity: 1;
        }

        details .summary-chevron-up svg {
            opacity: 0.5;
        }

        details .summary-chevron-up,
        details .summary-chevron-down {
            pointer-events: none;
            position: absolute;
            top: 0.75em;
            right: 1em;
            background: #ffffff;
        }

        details .summary-chevron-up svg,
        details .summary-chevron-down svg {
            display: block;
        }

        details summary::-webkit-details-marker {
            display: none;
        }

    </style>
    <div class="main-container">
        <main>
            <!-- Slider Section -->

            <div class="containerrr">
                <img src="assets/images/slider1.png" alt="Snow" class="image1" style="width:100%;height: 70%">
                <img src="assets/images/slidermin.jpg" class="image2"/>
                <div class="centered">
                    <h1 class="typewrite"
                        data-period="2000" data-type='["Мануальна терапія."]'>
                        <span class="wrap"></span>
                    </h1>
                </div>
            </div><!-- Slider Section /- -->
            <!-- Welcome Section -->
            <div class="welcome-section other-services container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <!-- Section Header -->
                    @if ($agent->isMobile()==false)
                        <a name="appoitment">
                            @endif
                            <div class="section-header">
                                <h3>Ласкаво просимо</h3>
                            </div><!-- Section Header /- -->
                        </a>
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12 our-clinic">
                                <div class="row welcome-left">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="other-services-block">
                                            <div class="services-block-icon">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="other-services-content">
                                                <h5>Кваліфікований лікар</h5>
                                                <p>Кфаліфікований фахівець зробить усе можливе для встановлення причини
                                                    захворювання та вирішення вашої проблеми</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                                        <div class="other-services-block">
                                                                            <div class="services-block-icon">
                                                                                <i class="fa fa-phone-square"></i>
                                                                            </div>
                                                                            <div class="other-services-content">
                                                                                <h5>24/7 support</h5>
                                                                                <p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    -->
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="other-services-block">
                                            <div class="services-block-icon">
                                                <i class="fa fa-calendar"></i>
                                            </div>

                                            @if ($agent->isMobile())
                                                <a name="appoitment">
                                                    @endif
                                                    <div class="other-services-content" style="margin-bottom: 20px">
                                                        <h5>Онлайн-запис</h5>
                                                        <p>Користувачі можуть зареєструватися та записатися до лікаря,
                                                            уникаючи черг
                                                            та даремної витрати свого часу</p>
                                                    </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 clinic-form">
                                @livewire('pages.home-appoitmantfm')
                            </div>
                        </div>
                </div><!-- Container /- -->
            </div><!-- Welcome Section /- -->

            <!-- Gallery Section -->


            <!-- Services Section -->
            <div class="services-section container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="service-content">
                            <h5>ЯК В НАС ВІДБУВАЄТЬСЯ ЛІКУВАННЯ?</h5>
                            <p>Після проведення діагностики встановлюється причини захворювання.
                                Далі ми призначаємо найефективнішу методику в індивідуальному порядку</p>
                            <div class="medical-services">
                                <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                                    <i class="fas fa-plus"></i>
                                    <p> Коррекція хрибців</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                                    <i class="fas fa-plus"></i>
                                    <p style="line-height: 140% !important;">Відновлення м’язових функцій</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 medical-box">
                                    <i class="fas fa-plus"></i>
                                    <p>Фіксація коррекції</p>
                                    <!--                                    <p  style="font-size: 10px; margin-top: -15px"> кінезітерапія</p>-->
                                </div>
                            </div>
                            <a href="{{route('more.info')}}" class="learn-more" title="Learn More">Детальніше</a>
                            <span>Або</span>
                            <a href="#appoitment" class="learn-more appointment" title="Make an Appointment">Записатись
                                на
                                прийом</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 services-img">
                        <img src="assets/images/services.jpg" id="docimage" alt="services"/>
                    </div>
                </div><!-- Container /- -->
            </div><!-- Services Section -->
        @include('include.review')
        <!-- Team Section -->
            <div id="team-section" class="team-section container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>Лікар</h3>
                    </div>
                    <a href="{{route('about')}}">
                        <div class="team-carousel">


                            <div class="col-md-12">
                                <div class="team-content">
                                    <div class="team-box">
                                        <img src="assets/images/doctor-am-if.jpg" alt="отоцький Олександр Віталійович">
                                        <h5>Потоцький Олександр Віталійович</h5>
                                    </div>
                                    <span class="team-catagory">фізіотерапевт, мануальний терапевт</span>
                                </div>
                            </div>
                            <div class="col-md-12" style="display: none">
                                <div class="team-content">
                                    <div class="team-box">

                                        <h5>Потоцький Олександр Віталійович</h5>
                                    </div>
                                    <span class="team-catagory">фізіотерапевт, мануальний терапевт</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- Container /- -->
            </div><!-- Team Section /- -->


            <div class="latest-news container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>Статті</h3>
                    </div><!-- Section Header /- -->
                    <div class="row">
                        <div class="news-carousel">
                        @foreach($posts as $post)
                            <!-- Latest News -->
                                <div class="col-md-12">
                                    <div class="type-post">
                                        <div class="entry-cover">
                                            <img style="height: 390px;" src="{{ Voyager::image( $post->image ) }}">
                                            <div class="post-date-bg">
                                                <div class="post-date">
                                                    {{$post->created_at->format('d')}}
                                                    <span>{{$mounth }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest-news-content">
                                            <div class="entry-header">
                                                <h3 class="entry-title"><a title="Patients Share Success Stories"
                                                                           href="{{ route('post',$post->slug)}}">{{$post->title}}</a>
                                                </h3>
                                                <div class="entry-meta">
                                                    <div class="byline"><a title="adminol"><i
                                                                class="fa fa-user-o"></i>від адмін</a></div>
                                                    <div class="post-time"><a title="10 minutes ago"><i
                                                                class="fa fa-clock-o"></i> {{Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>{!! \Illuminate\Support\Str::limit(strip_tags($post->body), $limit = 200, $end = '...') !!}</p>
                                            </div>
                                            <a href="{{ route('post',$post->slug)}}" title="Read More"
                                               class="read-more">Детальніше</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- Container /- -->
            </div><!-- Lat est News /- -->
            <!-- Offer Section -->
            <div class="offer-section container-fluid no-left-padding no-right-padding">
                <!-- Container -->
                <div class="container">
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>Що ми пропонуємо</h3>
                    </div><!-- Section Header /- -->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="offer-box">
                                <i class="fa fa-star"></i>
                                <h5>Якісний результат</h5>
                                <p>Кфаліфікований фахівець зробить усе можливе для встановлення причини захворювання та
                                    вирішення </p>
                                <a href="{{route('reviews')}}" title="Read More">Детальніше</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="offer-box">
                                <i class="fa fa-calendar"></i>
                                <h5>Онлайн запис</h5>
                                <p>Користувачі можуть зареєструватися та записатися до лікаря, уникаючи черг та даремної
                                    витрати свого часу.</p>
                                <a href="#appoitment" title="Read More">Детальніше</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="offer-box">
                                <i class="fa fa-smile-o"></i>
                                <h5>Привітний лікар</h5>
                                <p>Дуже привітна людина, все пояснила, роз'яснила, привітний прийом був, все
                                    сподобалось.</p>
                                <a href="{{route('about')}}" title="Read More">Детальніше</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Container -->
            </div><!-- Offer Section /- -->
        </main>
    </div>
@endsection
