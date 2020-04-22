@extends('header-footer.header-footer')

@section('main-content')
    <div class="digital-mine">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('img/digital-mine.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> Цифровой рудник </h1>
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
        <div class="digital-mine-content">
            <div class="flex bottom-offset">
            <article>
                <h2 class="underline_bottom-offset"> Программа «Цифровой рудник» </h2>
                <div class="description">
                    {!! $digitalMine[0]->text_ru !!}
                </div>
            </article>
            <div class="flex video-block">
                <a data-fancybox class="video-poster link-block" href="#myVideo1">
                <div style="background-image: url('/storage/{{$digitalMine[0]->img_url_1}}')" class="link-img">
                </div>
                <div class="link-title"> Цифровой рудник </div>
                </a>
                <video class="video" controls id="myVideo2" style="display:none;">
                <source src="/storage/{{$digitalMine[0]->video_url_1}}" type="video/mp4"> Your browser doesn't support HTML5 video tag. </video>
                <a data-fancybox class="video-poster link-block not-offset" href="#myVideo2">
                <div style="background-image: url('/storage/{{$digitalMine[0]->img_url_2}}')" class="link-img">
                </div>
                <div class="link-title"> Geovia InSite </div>
                </a>
                <video class="video" controls id="myVideo1" style="display:none;">
                <source src="/storage/{{$digitalMine[0]->video_url_2}}" type="video/mp4"> Your browser doesn't support HTML5 video tag. </video>
            </div>
            </div>
            <article>
            <h2 class="underline_bottom-offset small h2-small-width"> Программа «Цифровой рудник» включает в себя реализацию более 20-ти проектов в течение 3-х лет </h2>
            <div class="description">
                <div class="description__item">
                <div class="subtitle"> Автоматизация технического обслуживания и ремонтов стационарного и самоходного оборудования: </div>
                <ul>
                    <li> Формирование технологических карт для оборудования </li>
                    <li> Переход на метод «Управление надежностью оборудования» </li>
                    <li> Внедрение инструмента для повышения качества планирования ТОиР и оптимизации ресурсов для ТОиР </li>
                </ul>
                </div>
                <div class="description__item">
                <div class="subtitle"> Автоматизация золотоизвлекательной фабрики: </div>
                <ul>
                    <li> Облачная система анализа больших данных на базе искусственного интеллекта </li>
                    <li> Внедрение системы управления производственными процессами (MES) </li>
                </ul>
                </div>
                <div class="description__item">
                <div class="subtitle"> Автоматизация горно-геологического комплекса: </div>
                <ul>
                    <li> Внедрение передовых решении в области геологоразведки и геологии </li>
                    <li> Внедрение сменно-суточного планирования горных работ </li>
                    <li> Автоматический сбор и отображение в режиме онлайн информации по выполнению плана горных работ </li>
                </ul>
                </div>
            </div>
            </article>
        </div>
        </div>
    </div>

@endsection
