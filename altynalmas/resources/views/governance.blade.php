@extends('header-footer.header-footer')

@section('main-content')
    <div class="banner" style="background-image: url('img/governance.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> Руководство компании </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <section class="governance">
        <div class="container-fluid">
        <div class="governance-soviet">
            <div class="article-title-wrap">
            <div class="article-title">Совет директоров<br> Принципы деятельности Совета Директоров<span class="article-title-after"></span></div>
            </div>
            <div class="flex flex-wrap governance-soviet__points">
            <div class="governance-soviet__points-block">
                <ul>
                <li>Деятельность Совета Директоров строится на основе принципа максимального соблюдения интересов акционеров и направлена на повышение рыночной стоимости Общества.</li>
                <li>Совет Директоров предоставляет акционерам взвешенную и четкую оценку достигнутых результатов и перспектив Общества посредством объективного мониторинга состояния текущего бизнеса и обеспечивает поддержание и функционирование надежной системы внутреннего контроля и независимого аудита с целью сохранения инвестиций акционеров и активов Общества. </li>
                <li>Совет Директоров обеспечивает эффективную работу системы управления рисками, контролирует и регулирует корпоративные конфликты.</li>
                </ul>
            </div>
            <div class="governance-soviet__points-block">
                <ul>
                <li>Совет Директоров обеспечивает полную прозрачность своей деятельности перед акционерами.</li>
                <li>Совет Директоров несет ответственность по раскрытию информации и информационному освещению деятельности Общества, и обязан обосновать классификацию информации и обеспечить защиту и сохранность внутренней (служебной) информации.</li>
                <li>В составе Совета Директоров обязательно должны присутствовать независимые директора. Общество определяет собственные критерии независимости директоров, основанные на базовых положениях законодательства. Характерной чертой независимого директора является его независимость от контрольного акционера, менеджмента Общества и государства.</li>
                <li>Совет Директоров осуществляет контроль над деятельностью исполнительного органа.</li>
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
                                <div class="under-title-dark"> {{$director->name_ru}} </div>
                                <div class="under-text"> {{$director->position_ru}} </div>
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
            <div class="article-title">Правление<span class="article-title-after"></span></div>
            </div>
            <div class="governance-soviet__points-block">
            <p>Принципы деятельности исполнительного органа</p>
            <ul>
                <li>Исполнительный орган осуществляет руководство ежедневной работой Общества и ее соответствие утвержденным планам.</li>
                <li>Деятельность исполнительного органа строится на основе принципа максимального соблюдения интересов акционеров, полностью подотчетна решениям Общего собрания акционеров Общества и Совета директоров.</li>
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
                                <div class="under-title-dark"> {{$person->name_ru}} </div>
                                <div class="under-text"> {{$person->position_ru}} </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
        </div>
    </section>

@endsection