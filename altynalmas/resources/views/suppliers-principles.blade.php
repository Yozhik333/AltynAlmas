@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Принципы закупочной политики
  @endif
  @if (app()->getLocale() == 'kz')
    Сатып алу саясатының қағидаттары
  @endif
  @if (app()->getLocale() == 'en')
    Principles of procurement policy
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('img/banner-principles.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> @lang('messages.Принципы закупочной политики') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <section class="principles">
        <div class="container-fluid">
        <div class="flex flex-wrap justify-content-between">
            <div class="principles__lists">
            <div class="principles__lists-head"> @lang('messages.Прозрачность') </div>
            <div class="principles__lists-body">
                <ul>
                <li>@lang('messages.Порядок проведения закупок и требования к их оформлению четко определены и регламентированы внутренними нормативными документами Общества; потенциальным поставщикам предоставляется необходимая и достаточная информация для участия в процедурах закупок; информация о закупках размещается в источниках, предусмотренных законодательством, и на сайте Общества;')</li>
                <li>@lang('messages.Обществом установлены прозрачные принципы и критерии оценки предложений и выбора поставщика;')</li>
                </ul>
            </div>
            </div>
            <div class="principles__lists">
            <div class="principles__lists-head"> @lang('messages.Конкурентность') </div>
            <div class="principles__lists-body">
                <ul>
                <li>@lang('messages.Закупки осуществляются путем выбора наилучшего предложения в конкурентной среде.')</li>
                <li>@lang('messages.Закупки без применения конкурентной среды осуществляются в ограниченных случаях.')</li>
                </ul>
            </div>
            </div>
            <div class="principles__lists">
            <div class="principles__lists-head"> @lang('messages.Справедливость') </div>
            <div class="principles__lists-body">
                <ul>
                <li>@lang('messages.Поставщикам предоставляются равные условия для участия в закупках.')</li>
                <li>@lang('messages.Установлены обоснованные требования к поставщикам и закупаемым ТРУ.')</li>
                </ul>
            </div>
            <div class="principles__lists-head"> @lang('messages.Эффективность') </div>
            <div class="principles__lists-body">
                <ul>
                <li>@lang('messages.Решения по закупкам принимаются, исходя из соотношения требуемого качества закупаемых ТРУ к их стоимости.')</li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </section>

@endsection
