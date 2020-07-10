@extends('header-footer.header-footer')

@section('title')
    @if (app()->getLocale() == 'ru')
    Наши партнеры
    @endif
    @if (app()->getLocale() == 'kz')
    Бiздiң серiктестер
    @endif
    @if (app()->getLocale() == 'en')
    Our partners
    @endif
@endsection

@section('main-content')

<div class="our-partners">
    <div class="mainTopSlider mainDepositsSlider">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url('img/hotline-banner.jpg');">
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="flex align-items-baseline">
          <div class="title-wrapper">
            <div class="h1-wrap">
              <h1> 
                @if (app()->getLocale() == 'ru')
                Наши партнеры
            @endif
            @if (app()->getLocale() == 'kz')
                Бiздiң серiктестер
            @endif
            @if (app()->getLocale() == 'en')
                Our partners
            @endif            
                </h1>
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
      <div class="main-deposits__items flex-wrap flex">
          @isset($partners)
            @foreach ($partners as $partner)
                <a href="{{$partner->url}}" target="_blank" class="main-deposits__item link-block">
                    <div class="wrap-inside">
                        <div class="main-deposits__item-title"> {{$partner->title_en}} </div>
                        <div class="main-deposits__item-photo">
                            <img src="storage/{{$partner->img}}" alt="">
                        </div>
                    </div>
                </a>
            @endforeach              
          @endisset
      </div>
    </div>
  </div>

@endsection
