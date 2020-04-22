@extends('header-footer.header-footer')

@section('main-content')

    <div class="activity-detail">
        <div class="mainTopSlider mainTopSlider-active mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/actogai1.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/actogai2.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/actogai3.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/actogai4.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/actogai5.jpg');">
            </div>
            <div class="swiper-slide" style="background-image: url('img/actogai6.jpg');">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Актогай </h1>
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
                <h2 class="underline_bottom-offset"> {{$aktogay[0]->title_ru}} </h2>
                <div class="description">
                    {!!$aktogay[0]->text_ru!!}
                </div>
                </article>
                <a href="/storage/{{$aktogay[0]->img_url}}" data-fancybox class="btn btn-detail"> Посмотреть схему работы </a>
            </div>
            <div class="activity-detail__info-wrap">
                <div class="activity-detail__info">
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> СПОСОБ РАЗРАБОТКИ МЕСТОРОЖДЕНИЯ </div>
                    <div class="activity-detail__item-desc"> Открытый способ </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> ТЕХНОЛОГИЯ ОБОГАЩЕНИЯ РУД </div>
                    <div class="activity-detail__item-desc"> Гравитационно-флотационно - цианистая технология </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> МЕСТОРОЖДЕНИЕ ДОЛИННОЕ, ПРОИЗВОДИТЕЛЬНОСТЬ </div>
                    <div class="activity-detail__item-desc"> 2,5 млн. тонн руды в год, среднее содержание золота в товарном сырье – 1,13 г/т </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> МЕСТОРОЖДЕНИЕ ПУСТЫННОЕ, ПРОИЗВОДИТЕЛЬНОСТЬ </div>
                    <div class="activity-detail__item-desc"> 2,5 млн. тонн руды в год, среднее содержание золота в товарном сырье – 1,57 г/т </div>
                    </div>
                </div>
                <div class="activity-detail__item flex">
                    <div>
                    <i class="icon-check"></i>
                    </div>
                    <div>
                    <div class="activity-detail__item-title"> Конечный продукт </div>
                    <div class="activity-detail__item-desc"> Cплав «Доре» </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
