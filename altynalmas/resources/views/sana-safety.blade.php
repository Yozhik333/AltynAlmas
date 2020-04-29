@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Sana Safety
  @endif
  @if (app()->getLocale() == 'kz')
    Sana Safety
  @endif
  @if (app()->getLocale() == 'en')
    Sana Safety
  @endif
@endsection

@section('main-content')

    <div class="sana-safety" data-namespace="sana-safety" data-template="sana-safety">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/sanasafety.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Sana Safety </h1>
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
        <div class="sana-safety-content">
            <div class="flex flex-wrap justify-content-between">
            <article>
                <h2 class="underline_bottom-offset"> Sana Safety </h2>
                @if (app()->getLocale() == 'ru')
                    <div class="description non-style">
                        {!! nl2br($sanaSafety[0]->text_ru) !!}
                    </div>
                @endif
                @if (app()->getLocale() == 'kz')
                    <div class="description non-style">
                        {!! nl2br($sanaSafety[0]->text_kz) !!}
                    </div>
                @endif
                @if (app()->getLocale() == 'en')
                    <div class="description non-style">
                        {!! nl2br($sanaSafety[0]->text_en) !!}
                    </div>
                @endif                
            </article>
            <div class="right-side">
                <div class="advantages__banner-wrap-outside">
                <div class="advantages__banner-wrap">
                    <div class="advantages__banner" style="background-image:url('/storage/{{ $sanaSafety[0]->img_url }}') "></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
