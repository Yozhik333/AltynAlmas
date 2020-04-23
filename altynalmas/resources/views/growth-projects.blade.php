@extends('header-footer.header-footer')

@section('main-content')

    <div class="growth-projects">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/growth-project.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> @lang('messages.Проекты роста') </h1>
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
        <div class="growth-projects-content">
            <div class="article-wrap">
            <article>
                <h2 class="underline_bottom-offset">@lang('messages.Золоторудное месторождение Мизек') </h2>
                <div class="description">
                <p>@lang('messages.Расположено в Восточно-Казахстанской области. Ближайшим населенным пунктом является поселок Кайнар, который расположен северо-западнее в 40 км. от Мизека. В 320 км. от месторождения, на северо-востоке, находится город Семей. Добыча на проекте «Мизек» будет вестись открытым способом, с привлечением в работу более 200 человек.') </p>
                </div>
            </article>
            </div>
            <div class="flex">
            <div class="growth-projects-item">
                <h4 class="growth-projects-item__title">@lang('messages.Рудник Аксу') </h4>
                <div class="growth-projects-item__description">@lang('messages.Расположен в Акмолинской области, 200 км к северу от города Нур-Султан и в 20 км от города Степногорск, работает с 1930-х годов.') </div>
                <div class="blue-fon growth-projects-item__numbers">
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset">
                    <div class="number">@lang('messages.1,76 г/т') 1,76 г/т </div>
                    <div class="number-description">@lang('messages.среднее содержание золота') </div>
                </div>
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset">
                    <div class="number">@lang('messages.834,9 тыс.') </div>
                    <div class="number-description">@lang('messages.тонн объём руды') </div>
                </div>
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset_small">
                    <div class="number nonline">@lang('messages.84,3%') </div>
                    <div class="number-description">@lang('messages.извлечение золота за 2019 год') </div>
                </div>
                </div>
                <div class="growth-projects-item__description">@lang('messages.Геологоразведочные работы проводятся на флангах месторождения в пределах горного отвода.') </div>
                <div class="growth-projects-item__subtitle">
                <div>@lang('messages.Способ добычи:') </div>@lang('messages.комбинированный (открытый и подземный).')
                </div>
                <div class="growth-projects-item__description">@lang('messages.Открытая добыча ведется с карьера, на сегодня самое глубокое место карьера составляет 50 метров.') </div>
                <div class="growth-projects-item__description">@lang('messages.Подземные горные работы ведутся до горизонта 480 метров от дневной поверхности.') </div>
            </div>
            <div class="growth-projects-item">
                <h4 class="growth-projects-item__title">@lang('messages.Рудник Бестобе') </h4>
                <div class="growth-projects-item__description">@lang('messages.Расположен в Акмолинской области, 200 км к северо-востоку от города Нур-Султан и в 100 км к востоку от города Степногорск, работает с 1930-х годов.') </div>
                <div class="blue-fon growth-projects-item__numbers">
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset">
                    <div class="number">@lang('messages.3,98 г/т') </div>
                    <div class="number-description">@lang('messages.среднее содержание золота') </div>
                </div>
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset">
                    <div class="number">@lang('messages.326,2 тыс.') </div>
                    <div class="number-description">@lang('messages.тонн объём руды') </div>
                </div>
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset_small">
                    <div class="number nonline">@lang('messages.89,2%') </div>
                    <div class="number-description">@lang('messages.извлечение золота за 2019 год') </div>
                </div>
                </div>
                <div class="growth-projects-item__description">@lang('messages.Геологоразведочные работы проводятся на флангах месторождения в пределах горного отвода.') </div>
                <div class="growth-projects-item__subtitle">
                <div> @lang('messages.Способ добычи:') </div> @lang('messages.подземный.')
                </div>
                <div class="growth-projects-item__description"> @lang('messages.Подземная добыча ведется до горизонта 790 метров от дневной поверхности.') </div>
            </div>
            <div class="growth-projects-item">
                <h4 class="growth-projects-item__title"> @lang('messages.Рудник Жолымбет') </h4>
                <div class="growth-projects-item__description"> @lang('messages.Расположен в Акмолинской области, 200 км к северу от города Нур-Султан и в 20 км от города Степногорск, работает с 1930-х годов.') </div>
                <div class="blue-fon growth-projects-item__numbers">
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset">
                    <div class="number"> @lang('messages.2,3 г/т') </div>
                    <div class="number-description"> @lang('messages.среднее содержание золота') </div>
                </div>
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset">
                    <div class="number"> @lang('messages.606,5 тыс.') </div>
                    <div class="number-description"> @lang('messages.тонн объём руды') </div>
                </div>
                <div class="flex-wrap flex align-items-center growth-projects-item__bottom-offset_small">
                    <div class="number nonline"> @lang('messages.79,9%') </div>
                    <div class="number-description"> @lang('messages.извлечение золота за 2019 год') </div>
                </div>
                </div>
                {{-- <div class="growth-projects-item__description"> @lang('messages.Геологоразведочные работы проводятся на флангах месторождения в пределах горного отвода.') </div> --}}
                <div class="growth-projects-item__subtitle">
                <div>@lang('messages.Способ добычи:') </div>@lang('messages.комбинированный (открытый и подземный).')
                </div>
                <div class="growth-projects-item__description">@lang('messages.Открытая добыча ведется с карьера, на сегодня самое глубокое место карьера составляет 60 метров.') </div>
                <div class="growth-projects-item__description">@lang('messages.Подземные горные работы ведутся до горизонта 800 метров от дневной поверхности.') </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
