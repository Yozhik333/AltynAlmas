@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Реализация неликвидов
  @endif
  @if (app()->getLocale() == 'kz')
    Өтімсіз заттарды сату
  @endif
  @if (app()->getLocale() == 'en')
    Sale of illiquid assets
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('img/banner-realization.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> @lang('messages.Реализация неликвидов') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <section class="realization">
        <div class="container-fluid">
        <div class="flex">
            <div class="realization__block">
            <div class="realization__block-title"> @lang('messages.По вопросу продажи обращаться:') </div>
            <div class="realization__block-body">
                <p>@lang('messages.Егизбаева Арайлым') </p>
                <p>@lang('messages.Старший специалист по реализации')</p>
                <p>@lang('messages.Отдел снабжения')</p>
                <p>@lang('messages.Телефон:') <a href="tel:87273503019">8 727 35 03 019</a></p>
                <p>@lang('messages.Почта:') <a href="mailto:Arailym.Yegizbayeva@altynalmas.kz">Arailym.Yegizbayeva@altynalmas.kz</a></p>
            </div>
            </div>
            <div class="realization__block">
            <div class="realization__block-title"> @lang('messages.По вопросу предпродажного осмотра товара и получения<br> технической информации обращаться:') </div>
            <div class="realization__block-body">
                <p>@lang('messages.Абдуллаева Мархабо Абдукахаровна')</p>
                <p>@lang('messages.Начальник отдела снабжения')</p>
                <p>@lang('messages.Телефон:') <a href="tel:87775551423">8 777 555 14 23</a></p>
                <p>@lang('messages.Почта:') <a href="mailto:Markhabo.Abdullayeva@altynalmas.kz">Markhabo.Abdullayeva@altynalmas.kz</a></p>
                <a href="#" class="btn btn-detail">@lang('messages.Список неликвидов')</a>
            </div>
            </div>
        </div>
        </div>
    </section>

@endsection
