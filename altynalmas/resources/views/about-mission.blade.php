@extends('header-footer.header-footer')

@section('main-content')
<div class="banner" style="background-image: url('img/about-mission-banner.jpg');">
    <div class="container-fluid">
      <div class="flex align-items-baseline">
        <div class="title-wrapper">
          <div class="h1-wrap">
            <h1 class="small"> @lang('messages.Миссия') </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="about-mission">
    <div class="container-fluid">
      <div class="flex flex-wrap">
        <div class="advantages__banner-wrap-outside">
          <div class="advantages__banner-wrap">
            <div class="advantages__banner" style="background-image:url('img/advantages2.jpg') ">
              <div class="title">
                <div class="text-uppercase"> @lang('messages.Принципы Акционерного общества') </div>
                <div class="title-small"> @lang('messages.«АК Алтыналмас»') </div>
              </div>
            </div>
            <div class="advantages-description">
              <div class="under-title"> @lang('messages.миссия') </div>
              <div class="under-text"> @lang('messages.Преобразуем потенциал недр в ЗОЛОТЫЕ возможности для общества, работников, инвесторов и других заинтересованных сторон.') </div>
            </div>
            <div class="advantages-description">
              <div class="under-title"> @lang('messages.видение') </div>
              <div class="under-text"> @lang('messages.Стать лидирующей компанией в среднеазиатском золотодобывающем секторе. Приоритетной географией интересов компании является Казахстан.') </div>
            </div>
          </div>
        </div>
        <div class="values">
          <div class="values__head"> @lang('messages.Ценности') </div>
          <div class="values__body">
            <article class="values-article">
              <div class="values__body-title"> @lang('messages.Устойчивое развитие')</div>
              <div class="values__body-points">
                <p>@lang('messages.В своих подходах мы ориентируемся на долгосрочное и стабильное развитие.')</p>
                <ul>
                  <li> @lang('messages.Стремимся применять лучшие стандарты ведения бизнеса.') </li>
                  <li> @lang('messages.Ищем и внедряем инновационные решения.') </li>
                  <li> @lang('messages.Постоянно повышаем операционную эффективность.') </li>
                  <li> @lang('messages.Инвестируем в человеческий капитал, как важный фактор устойчивого развития.') </li>
                </ul>
              </div>
            </article>
            <article class="values-article">
              <div class="values__body-title"> @lang('messages.Бережное отношение к окружающей среде') </div>
              <div class="values__body-points">
                <p>@lang('messages.Рационально используем природные ресурсы и стремимся минимизировать неблагоприятное воздействие нашей деятельности на окружающую среду.')</p>
                <ul>
                  <li>@lang('messages.Выявляем риски потенциального воздействия на окружающую среду и управляем ими.')</li>
                  <li>@lang('messages.Соблюдаем требования по охране окружающей среды.')</li>
                </ul>
              </div>
            </article>
            <article class="values-article">
              <div class="values__body-title"> @lang('messages.Безопасность труда') </div>
              <div class="values__body-points">
                <p>@lang('messages.Безопасность и здоровье сотрудников является нашим приоритетом.')</p>
                <ul>
                  <li>@lang('messages.Стремимся к нулевому уровню травматизма и проф. заболеваний.')</li>
                  <li>@lang('messages.Создаем безопасные условия труда и развиваем культуру безопасного поведения.')</li>
                  <li>@lang('messages.Выявляем и управляем рисками по промышленной безопасности и охране труда.')</li>
                </ul>
              </div>
            </article>
            <article class="values-article">
              <div class="values__body-title"> @lang('messages.Одна команда') </div>
              <div class="values__body-points">
                <p>@lang('messages.Мы помогаем друг другу и берем на себя ответственность за командный результат.')</p>
                <ul>
                  <li>@lang('messages.Разделяем Миссию, Видение и Ценности Компании.')</li>
                  <li>@lang('messages.Доверяем коллегам, ценим открытые и честные взаимоотношения.')</li>
                  <li>@lang('messages.Работаем на командный результат и верим, что только в команде достигнем поставленных целей.')</li>
                </ul>
              </div>
            </article>
            <article class="values-article">
              <div class="values__body-title">@lang('messages.Наши люди') </div>
              <div class="values__body-points">
                <p> @lang('messages.Ценим, развиваем и заботимся о сотрудниках.')</p>
                <ul>
                  <li> @lang('messages.Создаем равные возможности для профессионального развития и роста.')</li>
                  <li> @lang('messages.Поддерживаем дружественную рабочую атмосферу.')</li>
                  <li> @lang('messages.Обеспечиваем благоприятные условия труда.')</li>
                  <li> @lang('messages.Стремимся стать лучшим работодателем.')</li>
                </ul>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

@endsection
