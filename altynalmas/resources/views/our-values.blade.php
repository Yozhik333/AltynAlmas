@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Наши ценности
  @endif
  @if (app()->getLocale() == 'kz')
    Біздің құндылықтар
  @endif
  @if (app()->getLocale() == 'en')
    Our value
  @endif
@endsection

@section('main-content')

    <div class="our-values" data-namespace="our-values" data-template="our-values">
        <div class="mainTopSlider mainDepositsSlider">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('/img/akbakai1.jpg')">
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex align-items-baseline">
            <div class="title-wrapper">
                <div class="h1-wrap">
                <h1> @lang('messages.Наши ценности') </h1>
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
        <div class="our-values-content">
            <div class="flex our-values__items">
            <div class="our-values__item">
                <div class="title"> @lang('messages.Наши люди') </div>
                <div class="subtitle"> @lang('messages.Ценим, развиваем и заботимся о работниках.') </div>
                <ul class="list">
                <li> @lang('messages.Создаем равные возможности для профессионального развития и роста.') </li>
                <li> @lang('messages.Поддерживаем дружественную рабочую атмосферу.') </li>
                <li> @lang('messages.Обеспечиваем благоприятные условия труда.') </li>
                <li> @lang('messages.Стремимся стать лучшим работодателем.') </li>
                </ul>
            </div>
            <div class="our-values__item">
                <div class="title"> @lang('messages.Мы одна команда') </div>
                <div class="subtitle"> @lang('messages.Мы помогаем друг другу и берем на себя ответственность за командный результат.') </div>
                <ul class="list">
                <li> @lang('messages.Разделяем Миссию, Видение и Ценности Компании.') </li>
                <li> @lang('messages.Доверяем коллегам, ценим открытые и честные взаимоотношения.') </li>
                <li> @lang('messages.Работаем на командный результат и верим, что только в команде достигнем поставленных целей.') </li>
                </ul>
            </div>
            <div class="our-values__item">
                <div class="title"> @lang('messages.Бережное отношение к окружающей среде') </div>
                <div class="subtitle"> @lang('messages.Рационально используем природные ресурсы и стремимся минимизировать неблагоприятное воздействие нашей деятельности на окружающую среду.') </div>
                <ul class="list">
                <li> @lang('messages.Выявляем риски потенциального воздействия на окружающую среду и управляем ими.') </li>
                <li> @lang('messages.Соблюдаем требования по охране окружающей среды.') </li>
                </ul>
            </div>
            <div class="our-values__item">
                <div class="title"> @lang('messages.Устойчивое развитие') </div>
                <div class="subtitle"> @lang('messages.В своих подходах мы ориентируемся на долгосрочное и стабильное развитие.') </div>
                <ul class="list">
                <li> @lang('messages.Стремимся применять лучшие стандарты ведения бизнеса.') </li>
                <li> @lang('messages.Ищем и внедряем инновационные решения.') </li>
                <li> @lang('messages.Постоянно повышаем операционную эффективность.') </li>
                <li> @lang('messages.Инвестируем в человеческий капитал, как важный фактор устойчивого развития.') </li>
                </ul>
            </div>
            <div class="our-values__item">
                <div class="title"> @lang('messages.Безопасность труда') </div>
                <div class="subtitle"> @lang('messages.Безопасность и здоровье работников является нашим приоритетом.') </div>
                <ul class="list">
                <li> @lang('messages.Стремимся к нулевому уровню травматизма и проф. заболеваний.') </li>
                <li> @lang('messages.Создаем безопасные условия труда и развиваем культуру безопасного поведения.') </li>
                <li> @lang('messages.Выявляем и управляем рисками по промышленной безопасности и охране труда.') </li>
                </ul>
            </div>
            <div class="our-values__item">
                <div class="our-values-img-wrap">
                <div class="our-values-img" style="background-image: url('/img/our-values-img.jpg')"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
