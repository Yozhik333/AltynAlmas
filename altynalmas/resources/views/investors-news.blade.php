@extends('header-footer.header-footer')

@section('main-content')
    <div class="banner" style="background-image: url('/storage/{{ $news->img_url }}');"></div>
    <div class="container-fluid">
    <div class="backto">
        <a href="{{ route('newsPage')}}">@lang('messages.Вернуться к новостям')</a>
    </div>
    <div class="investors_news_title">
        @if (app()->getLocale() == 'ru')
            <p class="investors_news_p">{{$news->title_ru}}</p>
        @endif
        @if (app()->getLocale() == 'kz')
            <p class="investors_news_p">{{$news->title_kz}}</p>
        @endif
        @if (app()->getLocale() == 'en')
            <p class="investors_news_p">{{$news->title_en}}</p>
        @endif
        <p class="investors_news_p2">{{$news->date}}</p>
    </div>
    <div class="flex investors_news_main1">
        @if (app()->getLocale() == 'ru')
            <div class="investors_news_main">{{$news->text_ru}}</div>        
        @endif
        @if (app()->getLocale() == 'kz')
            <div class="investors_news_main">{{$news->text_kz}}</div>        
        @endif
        @if (app()->getLocale() == 'en')
            <div class="investors_news_main">{{$news->text_en}}</div>        
        @endif
        
    </div>
    </div>
    <!-- /.container-fluid -->
    <!-- /.committee -->
@endsection
