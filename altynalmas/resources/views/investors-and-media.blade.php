@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Новости
  @endif
  @if (app()->getLocale() == 'kz')
    Жаңалықтар
  @endif
  @if (app()->getLocale() == 'en')
    News
  @endif
@endsection

@section('main-content')
    <div class="banner" style="background-image: url('img/newspage1.jpg');">
    <div class="container-fluid">
        <div class="flex align-items-baseline">
        <div class="title-wrapper">
            <div class="h1-wrap">
            <h1 class="small"> @lang('messages.Новости') </h1>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="mailto"> @lang('messages.Напишите нам:') <a href="mailto:info@altynalmas.kz">info@altynalmas.kz</a>
    </div>
    <div class="flex flex-wrap justify-content-between">

        @foreach ($news as $eachNews)
            @if ($eachNews->is_active == 1)
                <div class="investors_news">
                    <div class="investors_news-img">
                        <img src="/storage/{{$eachNews->img_url}}">
                    </div>
                    <p class="investors_news_data">{{$eachNews->date}}</p>
                    @if (app()->getLocale() == 'ru')
                        <p class="investors_news_text">{{ mb_substr($eachNews->text_ru, 0, 150)}}</p>
                    @endif
                    @if (app()->getLocale() == 'kz')
                        <p class="investors_news_text">{{ mb_substr($eachNews->text_kz, 0, 150)}}</p>
                    @endif
                    @if (app()->getLocale() == 'en')
                        <p class="investors_news_text">{{ mb_substr($eachNews->text_en, 0, 150)}}</p>
                    @endif
                    <a href="{{ route('openNews', $eachNews->id ) }}" class="btn btn-detail">@lang('messages.Подробнее')</a>
                </div>

            @endif

        @endforeach
        
    </div>
    </div>
    <!-- /.container-fluid -->
    <!-- /.committee -->
@endsection
