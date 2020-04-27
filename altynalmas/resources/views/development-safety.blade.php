@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Безопасноть
  @endif
  @if (app()->getLocale() == 'kz')
    Қауіпсіздік
  @endif
  @if (app()->getLocale() == 'en')
    Safety
  @endif
@endsection

@section('main-content')
    <div class="banner" style="background-image: url('/img/banner-development.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small">@lang('messages.Безопасноть') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="development">
        <div class="container-fluid">
        <div class="tabs-wrapper">
            <div class="tabs_head">
                @isset($developmentSafety)
                    @if (count($developmentSafety) > 0)
                        @if ($developmentSafety[0]->is_active == 1)
                            @if (app()->getLocale() == 'ru')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{ $developmentSafety[0]->title_ru }}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentSafety[0]->text_ru !!}
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'kz')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{ $developmentSafety[0]->title_en }}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentSafety[0]->text_en !!}
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'en')
                                <div class="tab">
                                    <div class="tab_point">
                                    <div>{{ $developmentSafety[0]->title_en }}</div>
                                    <div class="tab_point-icon"><i class="icon-left"></i></div>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentSafety[0]->text_en !!}
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif

                @endisset
            </div>
            @isset($developmentSafety)
                @if (count($developmentSafety) > 1)
                    @for ($i = 1; $i < count($developmentSafety); $i++)
                        @if ($developmentSafety[$i]->is_active == 1)
                            @if (app()->getLocale() == 'ru')
                                <div class="tab">
                                    <div class="tab_point">
                                        <div>{{ $developmentSafety[$i]->title_ru }}</div>
                                        <div class="tab_point-icon"><i class="icon-left"></i></div>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentSafety[$i]->text_ru !!}
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'kz')
                                <div class="tab">
                                    <div class="tab_point">
                                        <div>{{ $developmentSafety[$i]->title_kz }}</div>
                                        <div class="tab_point-icon"><i class="icon-left"></i></div>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentSafety[$i]->text_kz !!}
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'en')
                                <div class="tab">
                                    <div class="tab_point">
                                        <div>{{ $developmentSafety[$i]->title_en }}</div>
                                        <div class="tab_point-icon"><i class="icon-left"></i></div>
                                    </div>
                                    <div class="tab_item">
                                        {!! $developmentSafety[$i]->text_en !!}
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endfor
                @endif
            @endisset
        </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
