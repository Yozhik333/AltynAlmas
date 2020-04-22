@extends('header-footer.header-footer')

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-estate.jpg');">
        <div class="container-fluid">
        <div class="estate-development">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1 class="small"> Местные сообщества </h1>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="estate">
        <div class="container-fluid">
        <div class="estate__description">
            <p>Алтыналмас уделяет особое внимание социальной поддержке добычных регионов. Компания стремится внести вклад в развитие<br> поселков, вблизи которых ведет производственную деятельность. В целях повышения качества жизни населения компания тесно<br> взаимодействует с местными исполнительными органами. С 2011 года на социальную поддержку регионов направлено более 130 млн<br> тенге.</p>
        </div>
        <div class="tabs-wrapper">
            <div class="tabs_head">
                @isset($developmentLocalCommunities)
                    @foreach ($developmentLocalCommunities as $localCommunity)
                        @if ($localCommunity->is_active == 1)
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
                    @endforeach
                @endisset
                {{-- <div class="tab">
                    <div class="tab_point">
                        <div>Социальная поддержка Актогайского района Карагандинской области</div>
                        <div class="tab_point-icon"><i class="icon-left"></i></div>
                        </div>
                        <div class="tab_item">
                        <p>По проекту «Актогай» социальная поддержка оказывается станции Акжайдак Ортадересинского сельского округа Актогайского района Карагандинской области.<p>
                        <p>В рамках сотрудничества с местными исполнительными органами, компанией реализован ряд социальных мероприятий. Наиболее важными из них являются проведение противопаводковых работ на автомобильной дороге Балхаш-Саяк, благоустройство территории и установка детских площадок, ежегодное приобретение новогодних подарков для детей жителей станции Акжайдак и поселка Ортадересин. Также компания подключила станцию Акжайдак к сети wi-fi, который позволяет жителям неограниченно пользоваться интернетом.</p>
                    </div>
                </div> --}}
            </div>
        </div>
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
