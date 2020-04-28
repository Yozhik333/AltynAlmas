@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Руководство компании
  @endif
  @if (app()->getLocale() == 'kz')
    Компания басшылығы
  @endif
  @if (app()->getLocale() == 'en')
    Company management
  @endif
@endsection

@section('main-content')
    <div class="banner" style="background-image: url('img/governance.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> @lang('messages.Руководство компании') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <section class="governance">
        <div class="container-fluid">
        <div class="governance-soviet">
            <div class="article-title-wrap">
            <div class="article-title">@lang('messages.Совет директоров')<br> @lang('messages.Принципы деятельности Совета Директоров')<span class="article-title-after"></span></div>
            </div>
            <div class="flex flex-wrap governance-soviet__points">
            <div class="governance-soviet__points-block">
                <ul>
                <li>@lang('messages.Деятельность Совета Директоров строится на основе принципа максимального соблюдения интересов акционеров и направлена на повышение рыночной стоимости Общества.')</li>
                <li>@lang('messages.Совет Директоров предоставляет акционерам взвешенную и четкую оценку достигнутых результатов и перспектив Общества посредством объективного мониторинга состояния текущего бизнеса и обеспечивает поддержание и функционирование надежной системы внутреннего контроля и независимого аудита с целью сохранения инвестиций акционеров и активов Общества.') </li>
                <li>@lang('messages.Совет Директоров обеспечивает эффективную работу системы управления рисками, контролирует и регулирует корпоративные конфликты.')</li>
                </ul>
            </div>
            <div class="governance-soviet__points-block">
                <ul>
                <li>@lang('messages.Совет Директоров обеспечивает полную прозрачность своей деятельности перед акционерами.')</li>
                <li>@lang('messages.Совет Директоров несет ответственность по раскрытию информации и информационному освещению деятельности Общества, и обязан обосновать классификацию информации и обеспечить защиту и сохранность внутренней (служебной) информации.')</li>
                <li>@lang('messages.В составе Совета Директоров обязательно должны присутствовать независимые директора. Общество определяет собственные критерии независимости директоров, основанные на базовых положениях законодательства. Характерной чертой независимого директора является его независимость от контрольного акционера, менеджмента Общества и государства.')</li>
                <li>@lang('messages.Совет Директоров осуществляет контроль над деятельностью исполнительного органа.')</li>
                </ul>
            </div>
            </div>
            <div class="flex persons-wrap">
                @isset($boardOfDirectors)
                    @foreach ($boardOfDirectors as $director)

                        <div class="advantages__banner-wrap-outside advantages__banner-wrap-outside--persons">
                            <div class="advantages__banner-wrap advantages__banner-wrap--margin">
                            <div class="advantages__banner  advantages__banner--photo" style="background-image:url('/storage/{{$director->img_url}}');">
                            </div>
                            <div class="advantages-description">
                                @if (app()->getLocale() == 'ru')
                                    <div class="under-title-dark"> {{$director->name_ru}} </div>
                                    <div class="under-text"> {{$director->position_ru}} </div>
                                @endif
                                @if (app()->getLocale() == 'kz')
                                    <div class="under-title-dark"> {{$director->name_kz}} </div>
                                    <div class="under-text"> {{$director->position_kz}} </div>
                                @endif
                                @if (app()->getLocale() == 'en')
                                    <div class="under-title-dark"> {{$director->name_en}} </div>
                                    <div class="under-text"> {{$director->position_en}} </div>
                                @endif
                                
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endisset


            </div>
        </div>
        <!-- /.goverance-soviet -->
        <div class="rule">
            <div class="article-title-wrap">
            <div class="article-title">@lang('messages.Правление')<span class="article-title-after"></span></div>
            </div>
            <div class="governance-soviet__points-block">
            <p>@lang('messages.Принципы деятельности исполнительного органа')</p>
            <ul>
                <li>@lang('messages.Исполнительный орган осуществляет руководство ежедневной работой Общества и ее соответствие утвержденным планам.')</li>
                <li>@lang('messages.Деятельность исполнительного органа строится на основе принципа максимального соблюдения интересов акционеров, полностью подотчетна решениям Общего собрания акционеров Общества и Совета директоров.')</li>
            </ul>
            </div>
            <div class="flex rule-persons-wrap">
                @isset($board)
                    @foreach ($board as $person)
                        <div class="advantages__banner-wrap-outside advantages__banner-wrap-outside--persons">
                            <div class="advantages__banner-wrap advantages__banner-wrap--margin">
                            <div class="advantages__banner  advantages__banner--photo" style="background-image:url('/storage/{{$person->img_url}}') ">
                            </div>
                            <div class="advantages-description">
                                @if (app()->getLocale() == 'ru')
                                    <div class="under-title-dark"> {{$person->name_ru}} </div>
                                    <div class="under-text"> {{$person->position_ru}} </div>
                                @endif
                                @if (app()->getLocale() == 'kz')
                                    <div class="under-title-dark"> {{$person->name_kz}} </div>
                                    <div class="under-text"> {{$person->position_kz}} </div>
                                @endif
                                @if (app()->getLocale() == 'en')
                                    <div class="under-title-dark"> {{$person->name_en}} </div>
                                    <div class="under-text"> {{$person->position_en}} </div>
                                @endif
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>

        <!-- /.vice-presidents -->
            <div class="vice-presidents">
                <div class="rule">
                    <div class="article-title-wrap">
                        <div class="article-title">@lang('messages.Вице-президенты')<span
                                    class="article-title-after"></span></div>
                    </div>
                <!--<div class="governance-soviet__points-block">
            <p>@lang('messages.Принципы деятельности исполнительного органа')</p>
            <ul>
                <li>@lang('messages.Исполнительный орган осуществляет руководство ежедневной работой Общества и ее соответствие утвержденным планам.')</li>
                <li>@lang('messages.Деятельность исполнительного органа строится на основе принципа максимального соблюдения интересов акционеров, полностью подотчетна решениям Общего собрания акционеров Общества и Совета директоров.')</li>
            </ul>
            </div>-->
                    <div class="flex rule-persons-wrap">
                        @isset($presidents)
                            @foreach ($presidents as $president)
                                <div class="advantages__banner-wrap-outside advantages__banner-wrap-outside--persons">
                                    <div class="advantages__banner-wrap advantages__banner-wrap--margin">
                                        <div class="advantages__banner  advantages__banner--photo"
                                             style="background-image:url('/storage/{{$president->img_url}}') ">
                                        </div>
                                        <div class="advantages-description">
                                            @if (app()->getLocale() == 'ru')
                                                <div class="under-title-dark"> {{$president->name_ru}} </div>
                                                <div class="under-text"> {{$president->position_ru}} </div>
                                            @endif
                                            @if (app()->getLocale() == 'kz')
                                                <div class="under-title-dark"> {{$president->name_kz}} </div>
                                                <div class="under-text"> {{$president->position_kz}} </div>
                                            @endif
                                            @if (app()->getLocale() == 'en')
                                                <div class="under-title-dark"> {{$president->name_en}} </div>
                                                <div class="under-text"> {{$president->position_en}} </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
