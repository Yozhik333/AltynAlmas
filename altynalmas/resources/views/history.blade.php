@extends('header-footer.header-footer')

@section('main-content')

    <div class="history">
        <div class="mainTopSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/history-slide.jpg');">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> @lang('messages.История') </h1>
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
        <div class="data-years flex"></div>
        <div class="flex flex-wrap">
            <div class="historySlider">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    @foreach ($years as $year)
                        @if ($year->is_active == 1)
                            <div class="swiper-slide" data-year="{{ $year->year }}">
                                <div class="historySlider__slide">
                                <div class="historySlider__slide-title">
                                    <div class="historySlider__slide-title-underline"> {{ $year->year }} @lang('messages.год') </div>
                                </div>
                                <div class="historySlider__slide-description"> {{ $year->text_ru }} </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="arrow-wrap">
                <!-- Add Arrows -->
                <div class="historySlider-button-prev">
                <i class="icon-history-prev"></i>
                </div>
                <div class="historySlider-button-next">
                <i class="icon-history-next"></i>
                </div>
            </div>
            </div>
            <div class="active-slide-info-wrap">
            <div class="active-slide-info-wrap-inside">
                <div class="active-slide-info-fon" style="background-image: url('img/active-slide-info-fon.jpg')"></div>
                <div class="active-slide-info">
                <div class="active-slide__title"> 1993 </div>
                <div class="active-slide__description"> @lang('messages.Компания приобрела права на разработку месторождения Светинское.') </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
