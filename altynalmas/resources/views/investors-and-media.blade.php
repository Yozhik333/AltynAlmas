@extends('header-footer.header-footer')


@section('main-content')
    <div class="banner" style="background-image: url('img/newspage1.jpg');">
    <div class="container-fluid">
        <div class="flex align-items-baseline">
        <div class="title-wrapper">
            <div class="h1-wrap">
            <h1 class="small"> Новости </h1>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="mailto"> Напишите нам: <a href="mailto:info@altynalmas.kz">info@altynalmas.kz</a>
    </div>
    <div class="flex flex-wrap justify-content-between">

        @foreach ($news as $eachNews)
            @if ($eachNews->is_active == 1)
                <div class="investors_news">
                    <div class="investors_news-img">
                        <img src="/storage/{{$eachNews->img_url}}">
                    </div>
                    <p class="investors_news_data">{{$eachNews->date}}</p>
                    <p class="investors_news_text">{{ mb_substr($eachNews->text_ru, 0, 150)}}</p>
                    <a href="{{ route('openNews', $eachNews->id ) }}" class="btn btn-detail">Подробнее</a>
                </div>

            @endif

        @endforeach
        {{-- <div class="investors_news">
        <div class="investors_news-img">
            <img src="{{ asset('img/investors-item.jpg') }}">
        </div>
        <p class="investors_news_data">03.12.2019</p>
        <p class="investors_news_text">ВТБ профинансировал группу компаний золотодобывающего сектора Казахстана на сумму до 470,0 млн евро</p>
        <a href="investors-news.html" class="btn btn-detail">Подробнее</a>
        </div>
        <div class="investors_news">
        <div class="investors_news-img">
            <img src="{{ asset('img/investors-item.jpg') }}">
        </div>
        <p class="investors_news_data">03.12.2019</p>
        <p class="investors_news_text">ВТБ профинансировал группу компаний золотодобывающего сектора Казахстана на сумму до 470,0 млн евро</p>
        <a href="investors-news.html" class="btn btn-detail">Подробнее</a>
        </div>
        <div class="investors_news">
        <div class="investors_news-img">
            <img src="{{ asset('img/investors-item.jpg') }}">
        </div>
        <p class="investors_news_data">03.12.2019</p>
        <p class="investors_news_text">ВТБ профинансировал группу компаний золотодобывающего сектора Казахстана на сумму до 470,0 млн евро</p>
        <a href="investors-news.html" class="btn btn-detail">Подробнее</a>
        </div>
        <div class="investors_news">
        <div class="investors_news-img">
            <img src="{{ asset('img/investors-item.jpg') }}">
        </div>
        <p class="investors_news_data">03.12.2019</p>
        <p class="investors_news_text">ВТБ профинансировал группу компаний золотодобывающего сектора Казахстана на сумму до 470,0 млн евро</p>
        <a href="investors-news.html" class="btn btn-detail">Подробнее</a>
        </div>
        <div class="investors_news">
        <div class="investors_news-img">
            <img src="{{ asset('img/investors-item.jpg') }}">
        </div>
        <p class="investors_news_data">03.12.2019</p>
        <p class="investors_news_text">ВТБ профинансировал группу компаний золотодобывающего сектора Казахстана на сумму до 470,0 млн евро</p>
        <a href="investors-news.html" class="btn btn-detail">Подробнее</a>
        </div>
        <div class="investors_news">
        <div class="investors_news-img">
            <img src="{{ asset('img/investors-item.jpg') }}">
        </div>
        <p class="investors_news_data">03.12.2019</p>
        <p class="investors_news_text">ВТБ профинансировал группу компаний золотодобывающего сектора Казахстана на сумму до 470,0 млн евро</p>
        <a href="investors-news.html" class="btn btn-detail">Подробнее</a>
        </div>
        <div class="investors_news">
        <div class="investors_news-img">
            <img src="{{ asset('img/investors-item.jpg') }}">
        </div>
        <p class="investors_news_data">03.12.2019</p>
        <p class="investors_news_text">ВТБ профинансировал группу компаний золотодобывающего сектора Казахстана на сумму до 470,0 млн евро</p>
        <a href="investors-news.html" class="btn btn-detail">Подробнее</a>
        </div> --}}
    </div>
    </div>
    <!-- /.container-fluid -->
    <!-- /.committee -->
@endsection
