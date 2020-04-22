@extends('header-footer.header-footer')

@section('main-content')
    <div class="banner" style="background-image: url('/img/banner-development.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> Безопасноть </h1>
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
                    @if ($developmentSafety[0]->is_active == 1)
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
                @endisset
            </div>
            @isset($developmentSafety)
                @if (count($developmentSafety) >= 2)
                    @for ($i = 1; $i < count($developmentSafety); $i++)
                        @if ($developmentSafety[$i]->is_active == 1)
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
                    @endfor
                @endif
            @endisset
        </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
