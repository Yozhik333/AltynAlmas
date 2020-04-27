@extends('header-footer.header-footer')

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-vacancy.jpg');">
        <div class="container-fluid">
            <div class="flex align-items-baseline">
                <div class="title-wrapper">
                    <div class="h1-wrap">
                        <h1 class="small"> @lang('messages.Актуальные вакансии') </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="vacancy">
        <div class="container-fluid">
            <div class="tabs-wrapper">
                <div class="tabs_head">
                    @isset($vacancies)
                        @foreach ($vacancies as $vacancy)
                            @if ($vacancy->is_active == 1)
                                <div class="tab">
                                    @if (app()->getLocale() == 'ru')
                                        <div class="tab_point">
                                            <div>{{$vacancy->name_ru}}</div>
                                            <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                        </div>
                                        <div class="tab_item">
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Требования:')</div>
                                                {!! $vacancy->requirements_ru !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Условия:')</div>
                                                {!! $vacancy->conditions_ru !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Обязанности:')</div>
                                                {!! $vacancy->duties_ru !!}
                                            </div>
                                    @endif
                                    @if (app()->getLocale() == 'kz')
                                        <div class="tab_point">
                                            <div>{{$vacancy->name_kz}}</div>
                                            <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                        </div>
                                        <div class="tab_item">
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Требования:')</div>
                                                {!! $vacancy->requirements_kz !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Условия:')</div>
                                                {!! $vacancy->conditions_kz !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Обязанности:')</div>
                                                {!! $vacancy->duties_kz !!}
                                            </div>
                                    @endif
                                    @if (app()->getLocale() == 'en')
                                        <div class="tab_point">
                                            <div>{{$vacancy->name_en}}</div>
                                            <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                        </div>
                                        <div class="tab_item">
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Требования:')</div>
                                                {!! $vacancy->requirements_en !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Условия:')</div>
                                                {!! $vacancy->conditions_en !!}
                                            </div>
                                            <div class="tabs-lists tabs-lists-vacancy">
                                                <div class="tabs-lists-title">@lang('messages.Обязанности:')</div>
                                                {!! $vacancy->duties_en !!}
                                            </div>
                                    @endif

                                        <div class="tab_links">
                                            <a href="{{$vacancy->hh_url}}" class="btn btn-detail"> @lang('messages.Откликнуться') </a>
                                            <a class="headhunter" target="_blank" href=" https://hh.kz/search/vacancy?area=160&st=searchVacancy&text=%D0%B0%D0%BB%D1%82%D1%8B%D0%BD%D0%B0%D0%BB%D0%BC%D0%B0%D1%81">Ссылка на Head Hunter</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
