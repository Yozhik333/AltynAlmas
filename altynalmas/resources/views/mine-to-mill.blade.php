@extends('header-footer.header-footer')

@section('main-content')

    <div class="mine-to-mill">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/minetomill.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Mine to mill </h1>
                </div>
            </div>
            <div class="arrow-wrapper">
                <!-- Add Arrows -->
                <div class="btn-slide-prev">
                <i class="icon-left"></i>
                </div>
                <div class="btn-slide-next">
                <i class="icon-right"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="container-fluid">
        <div class="mine-to-mill-content">
            <div class="flex flex-wrap justify-content-between">
            <article>
                <h2 class="underline_bottom-offset"> Mine to Mill </h2>
                <div class="description">
                    {!! $mineToMill[0]->text_ru !!}
                </div>
            </article>
            <div class="right-side flex">
                <div class="border-wrapper">
                <div class="title"> За период внедрения M2M на карьере Пустынное были достигнуты следующие результаты: </div>
                <ul class="list-mine-to-mill">
                    <li> уменьшился выход негабаритов руды во время добычи; </li>
                    <li> увеличилась производительность по выемке горной массы; </li>
                    <li> улучшились результаты прибортовых взрывов, а также устойчивость бортов карьера. </li>
                </ul>
                </div>
                <div class="border-wrapper">
                <div class="title"> Поскольку все изменения, которые происходят во время добычи руды напрямую влияют на результаты работы фабрики, на ЗИФ «Актогай» они отразились следующим образом: золотоизвлекательной фабрики: </div>
                <ul class="list-mine-to-mill">
                    <li> увеличился выход мелкого класса в руде после дробления; </li>
                    <li> снизилось потребление электроэнергии на дробление и измельчение руды; </li>
                    <li> увеличилась производительность ЗИФ с 270 тонн в час до 350 тонн в час. </li>
                </ul>
                <div class="desc"> Методика позволила в кратчайшие сроки достичь проектных показателей по добыче и переработке руды месторождения Пустынное в объеме 2,5 млн тонн руды в год. </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
