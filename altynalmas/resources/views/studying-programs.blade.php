@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Программы обучения
  @endif
  @if (app()->getLocale() == 'kz')
    Оқыту бағдарламасы
  @endif
  @if (app()->getLocale() == 'en')
    Training program
  @endif
@endsection

@section('main-content')

    <div class="studying-programs" data-namespace="studying-programs" data-template="studying-programs">
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
                <h1> @lang('messages.Программы обучения') </h1>
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
                <div class="title"> @lang('messages.Обязательное обучение') </div>
                <div class="img" style="background-image: url('/storage/{{$education[0]->compulsory_ed_img}}')"></div>
                    @if (app()->getLocale() == 'ru')
                        <div class="description">
                            {!! nl2br($education[0]->compulsory_ed_text_ru) !!}
                        </div>         
                    @endif
                    @if (app()->getLocale() == 'kz')
                        <div class="description">
                            {!! nl2br($education[0]->compulsory_ed_text_kz) !!}
                        </div>                 
                    @endif
                    @if (app()->getLocale() == 'en')
                        <div class="description">
                            {!! nl2br($education[0]->compulsory_ed_text_en) !!}
                        </div>               
                    @endif
            </div>
            <div class="studying-programs__item">
                <div class="title"> @lang('messages.Повышение квалификации') </div>
                <div class="img" style="background-image: url('/storage/{{$education[0]->advanced_ed_img}}')"></div>
                    @if (app()->getLocale() == 'ru')
                        <div class="description">
                            {!! nl2br($education[0]->advanced_ed_text_ru) !!}
                        </div>
                    @endif
                    @if (app()->getLocale() == 'kz')
                        <div class="description">
                            {!! nl2br($education[0]->advanced_ed_text_kz) !!}
                        </div>
                    @endif
                    @if (app()->getLocale() == 'en')
                        <div class="description">
                            {!! nl2br($education[0]->advanced_ed_text_en) !!}
                        </div>
                    @endif
            </div>
            <div class="studying-programs__item">
                <div class="title"> @lang('messages.Академическое обучение') </div>
                <div class="img" style="background-image: url('/storage/{{$education[0]->special_ed_img}}')"></div>
                    @if (app()->getLocale() == 'ru')
                        <div class="description">
                            {!! nl2br($education[0]->special_ed_text_ru) !!}
                        </div>
                    @endif
                    @if (app()->getLocale() == 'kz')
                        <div class="description">
                            {!! nl2br($education[0]->special_ed_text_kz) !!}
                        </div>
                    @endif
                    @if (app()->getLocale() == 'en')
                        <div class="description">
                            {!! nl2br($education[0]->special_ed_text_en) !!}
                        </div>
                    @endif
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
