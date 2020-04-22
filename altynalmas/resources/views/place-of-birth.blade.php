@extends('header-footer.header-footer')

@section('main-content')

    <div class="place-of-birth">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/place-of-birth.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Месторождения </h1>
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
        <div class="place-of-birth-content">
            <div class="flex">
            <div class="place-of-birth__mapImg">
                <div class="ratio">
                <img src="img/mapPlace.svg" alt="">
                </div>
            </div>
            <div class="place-of-birth__info">
                <div class="place-of-birth__item">
                <div class="place-of-birth__info-title"> 3 месторождения Казахалтын </div>
                <div class="place-of-birth__info-description">
                    <div> Аксу </div>
                    <div> Бестобе </div>
                    <div> Жолымбет </div>
                </div>
                </div>
                <div class="place-of-birth__item">
                <div class="place-of-birth__info-title"> 15 месторождений АО «АК Алтыналмас» </div>
                <div class="place-of-birth__info-description">
                    <div>Бактай</div>
                    <div>Карьерное</div>
                    <div>Пустынное</div>
                    <div>Долинное</div>
                    <div>Светинское</div>
                    <div>Акбакай</div>
                    <div>Кенжем</div>
                    <div>Карьерное</div>
                    <div>Бескемпир</div>
                    <div>Аксакал</div>
                    <div>Мизек</div>
                    <div>пл.Долинное</div>
                    <div>Иткудук</div>
                    <div>Ортасай</div>
                    <div>Пустынно-Бактай</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
