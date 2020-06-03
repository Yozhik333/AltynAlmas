@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Контакты
  @endif
  @if (app()->getLocale() == 'kz')
    Байланыс деректері
  @endif
  @if (app()->getLocale() == 'en')
    Contacts
  @endif
@endsection

@section('main-content')

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<26f7d149-2937-452d-a9ca-5812281b8f26>" type="text/javascript"></script>
    <div class="banner">
        <div id="map"></div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1 class="small"> @lang('messages.Контакты') </h1>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="contacts">
        <div class="container-fluid">
            <div class="flex flex-wrap">
            <div class="contacts__address">
                <div class="contacts__address-frame">
                <div class="contacts__address-banner" style="background-image: url('img/contacts-item.jpg');">
                </div>
                <div class="contacts__address-description">
                    <div class="contacts__address-head"> @lang('messages.головной офис:') </div>
                    <div class="contacts__address-body">
                    <p>@lang('messages.Республика Казахстан, <br> г. Алматы, Площадь Республики 15, 050013 (A15X3C7)')</p>
                    <a href="tel:+77273500200">+7 (7273) 500-200</a>
                    <a href="mailto:info@altynalmas.kz">info@altynalmas.kz</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="contacts__info">
                <div class="contacts__info-title"> @lang('messages.По всем возникшим вопросам обращайтесь по следующим контактам:') </div>
                <div class="contacts__info-description">
                <div class="info__block">
                    <div class="info__block-head"> @lang('messages.По трудоустройству:') </div>
                    <div class="info__block-body">
                    <a href="mailto:CV@altynalmas.kz">CV@altynalmas.kz</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
