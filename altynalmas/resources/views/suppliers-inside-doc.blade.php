@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Внутренние нормативные документы
  @endif
  @if (app()->getLocale() == 'kz')
    Ішкі нормативтік құжаттар
  @endif
  @if (app()->getLocale() == 'en')
    Internal regulatory documents
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
      @foreach ($insideDocs as $insideDoc)
        @if ($insideDoc->is_active == 1)

          <div class="inside-doc__download">
            @if (app()->getLocale() == 'ru')
              <p>{!! nl2br($insideDoc->title_ru) !!}</p>
              <a href="/storage/{{$insideDoc->file_ru}}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
            @endif
            @if (app()->getLocale() == 'kz')
              <p>{!! nl2br($insideDoc->title_kz) !!}</p>
              <a href="/storage/{{$insideDoc->file_kz}}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
            @endif
            @if (app()->getLocale() == 'en')
              <p>{!! nl2br($insideDoc->title_en) !!}</p>
              <a href="/storage/{{$insideDoc->file_en}}" download class="btn btn-detail">@lang('messages.Скачать документ')</a>
            @endif
          </div>

        @endif
      @endforeach
    </div>
  </section>

@endsection