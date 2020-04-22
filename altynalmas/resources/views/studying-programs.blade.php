@extends('header-footer.header-footer')

@section('main-content')

    <div class="studying-programs">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/studying-programs.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Программы обучения </h1>
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
        <div class="studying-programs-content">
            <div class="flex flex-wrap justify-content-between studying-programs__items">
            <div class="studying-programs__item">
                <div class="title"> Обязательное обучение </div>
                <div class="img" style="background-image: url('/storage/{{$education[0]->compulsory_ed_img}}')"></div>
                <div class="description">
                    {!! $education[0]->compulsory_ed_text_ru !!}
                </div>
            </div>
            <div class="studying-programs__item">
                <div class="title"> Повышение квалификации </div>
                <div class="img" style="background-image: url('/storage/{{$education[0]->advanced_ed_img}}')"></div>
                <div class="description">
                    {!! $education[0]->advanced_ed_text_ru !!}
                </div>
            </div>
            <div class="studying-programs__item">
                <div class="title"> Обязательное обучение </div>
                <div class="img" style="background-image: url('/storage/{{$education[0]->special_ed_img}}')"></div>
                <div class="description">
                    {!! $education[0]->special_ed_text_ru !!}
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
