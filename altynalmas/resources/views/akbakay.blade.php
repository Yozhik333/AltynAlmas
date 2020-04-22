@extends('header-footer.header-footer')

@section('main-content')

    <div class="activity-detail">
        <div class="mainTopSlider mainTopSlider-active mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/akbakai1.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai2.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai3.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai4.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai5.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/akbakai6.jpg');">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Акбакай </h1>
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
        <div class="activity-detail-content">
            <div class="flex flex-wrap">
            <div class="article-wrap">
                <article>
                    <h2 class="underline_bottom-offset"> {{$akbakay[0]->title_ru}} </h2>
                    <div class="description">
                        {!!$akbakay[0]->text_ru!!}
                    </div>
                </article>
                <a href="/storage/{{$akbakay[0]->img_url}}" data-fancybox class="btn btn-detail"> Посмотреть схему работы </a>
            </div>
            <div class="activity-detail__info-wrap">
                <div class="activity-detail__info">
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> Способ добычи </div>
                    <div class="activity-detail__item-desc"> подземный и открытый </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> Содержание золота в товарном сырье </div>
                    <div class="activity-detail__item-desc"> 2,79 г/т </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> Производительность </div>
                    <div class="activity-detail__item-desc"> 825 тыс. тонн руды в год </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> Технология обработки </div>
                    <div class="activity-detail__item-desc"> интенсивное цианидное выщелачивание и прямое выщелачивание </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> Конечный продукт </div>
                    <div class="activity-detail__item-desc"> золотосодержащий насыщенный раствор гравиоконцентрата, насыщенный активированный уголь cip, сплав доре </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
