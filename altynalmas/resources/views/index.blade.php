@extends('header-footer.header-footer')

@section('title')
    @if (app()->getLocale() == 'ru')
        Главная
    @endif
    @if (app()->getLocale() == 'kz')
        Басты бет
    @endif
    @if (app()->getLocale() == 'en')
        Main Page
    @endif
@endsection


@section('main-content')
    <!--style="background-image: url('img/about-banner.jpg');"-->
    <div class="mainTopSlider mainTopSlider-active indexSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-title="@lang('messages.Инвестиции в вечные ценности...')" style="background-image: url('img/slide1.jpeg');">
                </div>
                <div class="swiper-slide" data-title="@lang('messages.166 169 унций золота в год')" style="background-image: url('img/slide3.jpg');">
                </div>
                <div class="swiper-slide" data-title="@lang('messages.2055 сотрудников в штате')" style="background-image: url('img/slide4.jpeg');">
                </div>
                <div class="swiper-slide" data-title="@lang('messages.Создаем золотые возможности для общества с 1993 года')" style="background-image: url('img/slide5.jpg');">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
                <div class="title-wrapper">
                    <div class="h1-wrap">
                        <h1 class="small">
                            <div class="text-normal"> @lang('messages.Золотодобывающая компания') </div> @lang('messages.АО') <span class="big-font">@lang('messages.«АК Алтыналмас»')</span>
                        </h1>
                        <div class="slide-title"> @lang('messages.Инвестиции в вечные ценности...') </div>
                    </div>
                </div>
                <div class="arrow-wrapper">
                    <!-- Add Arrows -->
                    <div class="btn-slide-prev">
                        <i class="icon-left"></i>
                    </div>
                    <div class="btn-slide-next">
                        <i class="icon-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="advantages">
            <div class="flex flex-wrap align-items-start">
                <div class="advantages__banner-wrap-outside">
                    <div class="advantages__banner-wrap">
                        <div class="advantages__banner" style="background-image:url('img/advantages.jpg') ">
                            <div class="title">
                                <div class="text-uppercase"> @lang('messages.Уникальные преимущества') </div>
                                <div class="title-small"> @lang('messages.АО «АК Алтыналмас»') </div>
                            </div>
                        </div>
                    </div>
                    <div class="number-day">
                        <!-- Swiper -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.1160 тыс.') </div>
                                    <div class="number-day__description"> @lang('messages.Унций золота за 27 лет выпущено компанией Алтыналмас.') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> 2 </div>
                                    <div class="number-day__description"> @lang('messages.Карьер Пустынное второй в РК по объему добываемой горной массы') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.1-ый в РК') </div>
                                    <div class="number-day__description"> @lang('messages.По переработке золотосодержащего минерального сырья (совокупно с производительностью АО «ГМК Казахалтын» и «Казахалтын Technology»)') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.2-й в РК') </div>
                                    <div class="number-day__description"> @lang('messages.Производитель золота в слитках качества Доре (совокупно с производительностью «Казахалтын Technology»)') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.130 млн тенге') </div>
                                    <div class="number-day__description"> @lang('messages.Направлено на социальную поддержку регионов с 2011 года') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> 70% </div>
                                    <div class="number-day__description"> @lang('messages.Работников удовлетворены условиями труда') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.130 км') </div>
                                    <div class="number-day__description"> @lang('messages.Собственной ВОЛС (проложено на проекте Акбакай для обеспечения высокоскоростным интернетом поселковой школы и местных жителей)') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> 2 </div>
                                    <div class="number-day__description"> @lang('messages.Профсоюза «Кәсіпқорған» и «Байтерек»') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> 14 </div>
                                    <div class="number-day__description"> @lang('messages.Контрактов на недропользование') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.54,24% акций') </div>
                                    <div class="number-day__description"> @lang('messages.АО «ГМК КАЗАХАЛТЫН» приобретено компанией в 2019 г.') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> 3 </div>
                                    <div class="number-day__description"> @lang('messages.Собственных ЗИФ: «Акбакай», «Актогай» и «Алтыналмас Technology»') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.120 единиц') </div>
                                    <div class="number-day__description"> @lang('messages.Горной техники задействовано в производственном процессе') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.4 региона РК') </div>
                                    <div class="number-day__description"> @lang('messages.Регионы присутствия активов Алтыналмас') </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="number-day__number"> @lang('messages.4 премии') </div>
                                    <div class="number-day__description"> @lang('messages.За проект «Цифровой рудник»') </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantages__article">
                    <article class="flex article">
                        <div>
                            <div class="icon-article">
                                <i class="icon-safety"></i>
                            </div>
                        </div>
                        <div>
                            <h5>
                                <a href="{{route('development-safety')}}"> @lang('messages.Безопасность') <i class="icon-btn-details"></i>
                                </a>
                            </h5>
                            <p class="js-text-ellipsis"> @lang('messages.Внедряем мировые практики по совершенствованию Культуры безопасности для достижения нулевого уровня травматизма на производстве') </p>
                        </div>
                    </article>
                    <article class="flex article">
                        <div>
                            <div class="icon-article">
                                <i class="icon-star"></i>
                            </div>
                        </div>
                        <div>
                            <h5>
                                <a href="{{route('digital-mine')}}"> @lang('messages.Инновационность') <i class="icon-btn-details"></i>
                                </a>
                            </h5>
                            <p class="js-text-ellipsis"> @lang('messages.Реализуем инновационные проекты по автоматизации производства, повышению процента извлечения ценного компонента и увеличению производительности') </p>
                        </div>
                    </article>
                    <article class="flex article">
                        <div>
                            <div class="icon-article">
                                <i class="icon-users"></i>
                            </div>
                        </div>
                        <div>
                            <h5>
                                <a href="{{route('development-local-communities')}}"> @lang('messages.Социальная ответственность') <i class="icon-btn-details"></i>
                                </a>
                            </h5>
                            <p class="js-text-ellipsis"> @lang('messages.Предоставляем социальную поддержку во всех регионах, где ведем производственную деятельность') </p>
                        </div>
                    </article>
                    <article class="flex article">
                        <div>
                            <div class="icon-article">
                                <i class="icon-network"></i>
                            </div>
                        </div>
                        <div>
                            <h5>
                                <a href="{{route('career')}}"> @lang('messages.Равные возможности для всех') <i class="icon-btn-details"></i>
                                </a>
                            </h5>
                            <p class="js-text-ellipsis"> @lang('messages.В компании работают представители 22 национальностей, средний возраст работников – 38 лет, ТОП-менеджмент компании представляет собой 60% мужчин и 40% женщин') </p>
                        </div>
                    </article>
                    <article class="flex article">
                        <div>
                            <div class="icon-article">
                                <i class="icon-schedule"></i>
                            </div>
                        </div>
                        <div>
                            <h5>
                                <a href="{{route('development-staff')}}"> @lang('messages.Устойчивое развитие') <i class="icon-btn-details"></i>
                                </a>
                            </h5>
                            <p class="js-text-ellipsis"> @lang('messages.Стремимся к наилучшим стандартам корпоративного управления. В своей деятельности мы ориентируемся на принципы ответственной золотодобычи') </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="mobile news-block__title">
            <div class="line_bottom"> @lang('messages.Новости компании') </div>
        </div>
        <div class="mainNewsSlider">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @isset($news)
                        @foreach ($news as $eachNews)
                            @if ($eachNews->is_active == 1)
                                @if ($eachNews->show_on_main == 1)
                                    @if (app()->getLocale() == 'ru')
                                        <div class="swiper-slide" data-publication="{{ $eachNews->date }}" data-title="{{ $eachNews->title_ru }}"
                                             data-description='{{ $eachNews->text_ru }}' data-href="{{ route('openNews', $eachNews->id ) }}" style="background-image: url('/storage/{{ $eachNews->img_url }}');">
                                        </div>
                                    @endif
                                    @if (app()->getLocale() == 'kz')
                                        <div class="swiper-slide" data-publication="{{ $eachNews->date }}" data-title="{{ $eachNews->title_kz }}"
                                             data-description='{{ $eachNews->text_kz }}' data-href="{{ route('openNews', $eachNews->id ) }}" style="background-image: url('/storage/{{ $eachNews->img_url }}');">
                                        </div>
                                    @endif
                                    @if (app()->getLocale() == 'en')
                                        <div class="swiper-slide" data-publication="{{ $eachNews->date }}" data-title="{{ $eachNews->title_en }}"
                                             data-description='{{ $eachNews->text_en }}' data-href="{{ route('openNews', $eachNews->id ) }}" style="background-image: url('/storage/{{ $eachNews->img_url }}');">
                                        </div>
                                    @endif
                                @endif

                            @endif

                        @endforeach
                    @endisset

                </div>
            </div>
            <div class="container-fluid">
                <div class="desktop news-block__title">
                    <div class="line_bottom"> @lang('messages.Новости компании') </div>
                </div>
                <div class="news-article-wrap">
                    <div class="publication-date"> 24.01.2020 </div>
                    <article>
                        <div>
                            <h4 class="article-title"> @lang('messages.АО «АК Алтыналмас» приобрело контрольный пакет акций АО «ГМК КАЗАХАЛТЫН»') </h4>
                            <div class="article-description" style="-webkit-box-orient: vertical;"> @lang('messages.Дорогие коллеги! Рады сообщить вам о том, что в рамках инициатив по устойчивому развитию бизнеса наша компания приобрела контрольный пакет акций АО «ГМК КАЗАХАЛТЫН» в размере 54,24%. Приобретение контрольного пакета акций АО «ГМК КАЗАХАЛТЫН» является частью бизнес-стратегии АО «АК Алтыналмас», основанной на расширении базы активов через приобретения и органический рост. «АО «ГМК КАЗАХАЛТЫН» является перспективным предприятием, производство которого нуждается в модернизации. АО «АК Алтыналмас», имея опыт строительства и эксплуатации современных предприятий, намерено привнести в развитие АО «ГМК КАЗАХАЛТЫН» эту экспертизу, создав, тем самым, для его работников более безопасные условия.') </div>
                        </div>
                    </article>
                    <a href="#" class="article-btn btn btn-detail"> @lang('messages.Читать подробнее') </a>
                </div>
                <div class="arrow-wrapper">
                    <!-- Add Arrows -->
                    <div class="btn-slide-prev">
                        <i class="icon-left"></i>
                    </div>
                    <div class="btn-slide-next">
                        <i class="icon-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
