@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Местные сообщества
  @endif
  @if (app()->getLocale() == 'kz')
    Жергілікті қоғамдастықтар
  @endif
  @if (app()->getLocale() == 'en')
    Local communities
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-estate.jpg');">
        <div class="container-fluid">
        <div class="estate-development">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1 class="small">@lang('messages.Местные сообщества') </h1>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="estate">
        <div class="container-fluid">
        <div class="estate__description">
            <p>@lang('messages.Алтыналмас уделяет особое внимание социальной поддержке добычных регионов. Компания стремится внести вклад в развитие') <br> @lang('messages.поселков, вблизи которых ведет производственную деятельность. В целях повышения качества жизни населения компания тесно') <br> @lang('messages.взаимодействует с местными исполнительными органами. С 2011 года на социальную поддержку регионов направлено более 130 млн') <br> @lang('messages.тенге.') </p>
        </div>
        <div class="tabs-wrapper">
            <div class="tabs_head">
                @isset($developmentLocalCommunities)
                    @foreach ($developmentLocalCommunities as $localCommunity)
                        @if ($localCommunity->is_active == 1)
                            @if (app()->getLocale() == 'ru')
                                <div class="tab">
                                    <div class="tab_point">
                                        <div>{{ $localCommunity->title_ru }}</div>
                                        <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $localCommunity->text_ru !!}
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'kz')
                                <div class="tab">
                                    <div class="tab_point">
                                        <div>{{ $localCommunity->title_kz }}</div>
                                        <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $localCommunity->text_kz !!}
                                    </div>
                                </div>
                            @endif
                            @if (app()->getLocale() == 'en')
                                <div class="tab">
                                    <div class="tab_point">
                                        <div>{{ $localCommunity->title_en }}</div>
                                        <div class="tab_point-icon"><i class="icon-left"></i></div></i>
                                    </div>
                                    <div class="tab_item">
                                        {!! $localCommunity->text_en !!}
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @endisset
            </div>
        </div>
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
