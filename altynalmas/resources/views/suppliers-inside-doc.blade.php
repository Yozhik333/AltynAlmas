@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Внутренние нормативные документы
  @endif
  @if (app()->getLocale() == 'kz')
    Внутренние нормативные документы
  @endif
  @if (app()->getLocale() == 'en')
    Внутренние нормативные документы
  @endif
@endsection

@section('main-content')

<div class="banner" style="background-image: url('img/inside-doc.jpg');">
    <div class="container-fluid">
      <div class="flex align-items-baseline">
        <div class="title-wrapper">
          <div class="h1-wrap">
            <h1 class="small"> @lang('messages.Внутренние нормативные документы') </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="inside-doc">
    <div class="container-fluid">
      <div class="inside-doc__download">
        <p>@lang('messages.Положение по охране труда, технике безопасности и охране окружающей среды для подрядных организаций АО «АК Алтыналмас»')</p>
        @if (app()->getLocale() == 'ru')
            <a href="{{ asset('/files/Положение по ОТ, ПБ и ООС для подрядных организаций АО «АК Алтыналмас».pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'kz')
            <a href="{{ asset('/files/Еңбекті қорғау, өндірістік қауіпсіздік және қоршаған ортаны қорғау туралы ереже.docx') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'en')
            <a href="{{ asset('/files/The Regulation on safety and environment protection.docx') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
      </div>
      <div class="inside-doc__download">
        <p>@lang('messages.Кодекс корпоративной этики АО «АК Алтыналмас»') </p>
        @if (app()->getLocale() == 'ru')
            <a href="{{ asset('/files/Кодекс корпоративной этики АО АК Алтыналмаc_RUS.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'kz')
            <a href="{{ asset('/files/Кодекс корпоративной этики АО АК Алтыналмас_KZ.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'en')
            <a href="{{ asset('/files/Code of Conduct of JSC AK Altynalmas.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
      </div>
      <div class="inside-doc__download">
        <p>@lang('messages.Политика по урегулированию конфликта интересов у работников и должностных лиц АО «АК Алтыналмас»') </p>
        @if (app()->getLocale() == 'ru')
            <a href="{{ asset('/files/Политика по урегулированию конфликта интересов АО АК Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'kz')
            <a href="{{ asset('/files/Политика по урегулированию конфликта интересов АО АК Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'en')
            <a href="{{ asset('/files/Политика по урегулированию конфликта интересов АО АК Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
      </div>
      <div class="inside-doc__download">
        <p>@lang('messages.Положение по оповещению о нарушении этических норм, законодательства и внутренних правил АО «АК Алтыналмас»')</p>
        @if (app()->getLocale() == 'ru')
            <a href="{{ asset('/files/Положение по оповещению о нарушении этических норм АО АК Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'kz')
            <a href="{{ asset('/files/Положение по оповещению о нарушении этических норм АО АК Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
        @if (app()->getLocale() == 'en')
            <a href="{{ asset('/files/Положение по оповещению о нарушении этических норм АО АК Алтыналмас.pdf') }}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
        @endif
      </div>
    </div>
  </section>

@endsection