@extends('header-footer.header-footer')

@section('main-content')

    <div class="place-of-birth" data-namespace="place-of-birth" data-template="place-of-birth">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/place-of-birth.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> @lang('messages.Месторождения') </h1>
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
        <div class="place-of-birth-content">
            <div class="flex">
            <div class="place-of-birth__mapImg">
                <div class="ratio">
                <img src="img/mapPlace.svg" alt="">
                </div>
            </div>
            <div class="place-of-birth__info">
                <div class="place-of-birth__item">
                <div class="place-of-birth__info-title"> @lang('messages.3 месторождения Казахалтын') </div>
                <div class="place-of-birth__info-description">
                    <div> @lang('messages.Аксу') </div>
                    <div> @lang('messages.Бестобе') </div>
                    <div> @lang('messages.Жолымбет') </div>
                </div>
                </div>
                <div class="place-of-birth__item">
                <div class="place-of-birth__info-title"> @lang('messages.15 месторождений АО «АК Алтыналмас»') </div>
                <div class="place-of-birth__info-description">
                    <div>@lang('messages.Бактай')</div>
                    <div>@lang('messages.Карьерное')</div>
                    <div>@lang('messages.Пустынное')</div>
                    <div>@lang('messages.Долинное')</div>
                    <div>@lang('messages.Светинское')</div>
                    <div>@lang('messages.Акбакай')</div>
                    <div>@lang('messages.Кенжем')</div>
                    <div>@lang('messages.Карьерное')</div>
                    <div>@lang('messages.Бескемпир')</div>
                    <div>@lang('messages.Аксакал')</div>
                    <div>@lang('messages.Мизек')</div>
                    <div>@lang('messages.пл.Долинное')</div>
                    <div>@lang('messages.Иткудук')</div>
                    <div>@lang('messages.Ортасай')</div>
                    <div>@lang('messages.Пустынно-Бактай')</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
