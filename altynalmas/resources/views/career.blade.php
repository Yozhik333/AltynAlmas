@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Почему мы?
  @endif
  @if (app()->getLocale() == 'kz')
    Неге біз?
  @endif
  @if (app()->getLocale() == 'en')
    Why us
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-career.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> @lang('messages.Почему мы?') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <section class="career">
        <div class="container-fluid">
        <div class="career__people">
            <div class="career__people-headline">
            <h2>@lang('messages.ЛЮДИ — решающий фактор успеха бизнеса.')</h2>
            <p>@lang('messages.Масштабы компании и сложность реализуемых проектов дают прекрасные возможности для профессионального и карьерного роста.')</p>
            <p>@lang('messages.Кадровая политика компании направлена на привлечение и развитие талантливых и мотивированных работников, разделяющих наши')<br> @lang('messages.корпоративные ценности и способных решать текущие и будущие задачи.')</p>
            </div>
            <div class="career__people-body">
            <div class="career__people-block">
                <div class="people-block-title"> 30 <span></span>
                </div>
                <div class="people-block-description"> @lang('messages.Сотрудники имеют возможность получать высшее и средне-специальное образование. В 2019 году обучение более 30 РАБОТНИКОВ было профинансировано за счет средств работодателя') </div>
            </div>
            <div class="career__people-block">
                <div class="people-block-title"> 80% <span></span>
                </div>
                <div class="people-block-description"> @lang('messages.Более 80% РАБОТНИКОВ проходят обучение и курсы повышения квалификации')  </div>
            </div>
            <div class="career__people-block">
                <div class="people-block-title"> 100 <span></span>
                </div>
                <div class="people-block-description"> @lang('messages.Ежегодно сотрудники принимают участие в более 100 РАЗЛИЧНЫХ ОБУЧАЮЩИХ МЕРОПРИЯТИЯХ ') </div>
            </div>
            </div>
        </div>
        <!-- /.career_people -->
        <div class="career__hr-policy flex flex-wrap">
            <div class="career__hr-policy-block">
            <h2 class="underline_bottom-offset"> @lang('messages.Кадровая политика Компании основана на следующих принципах:') </h2>
            <ul>
                <li>@lang('messages.создание возможностей для профессионального и личного роста сотрудников;') </li>
                <li>@lang('messages.побуждение всех сотрудников к полному раскрытию своего потенциала;') </li>
                <li>@lang('messages.высокая производительность труда при полном соблюдении требований техники безопасности;')</li>
                <li>@lang('messages.повышение уровня жизни сотрудников и их семей;') </li>
                <li>@lang('messages.разработка системы материального стимулирования в целях поощрения работы с высокой производительностью, основанной на четкой постановке задач в каждой сфере деятельности;') </li>
                <li>@lang('messages.отношения между работодателем и работниками, основанное на принципах социального партнерства и взаимной ответственности;') </li>
                <li>@lang('messages.создание на рабочих местах культуры, стимулирующей высокие достижения.') </li>
            </ul>
            </div>
            <div class="career__hr-policy-block">
            <h2>@lang('messages.ПРЕИМУЩЕСТВА')<br> @lang('messages.работы в АО «АК Алтыналмас»')</h2>
            <div class="hr-policy-frame">
                <div class="hr-policy-frame-item">
                <div class="ic-wrap">
                    <i class="icon-wallet"></i>
                </div> @lang('messages.Конкурентоспособная оплата труда')
                </div>
                <div class="hr-policy-frame-item">
                <div class="ic-wrap">
                    <i class="icon-head"></i>
                </div> @lang('messages.Развитие и обучение')
                </div>
                <div class="hr-policy-frame-item">
                <div class="ic-wrap">
                    <i class="icon-schedule2"></i>
                </div> @lang('messages.Возможности карьерного роста')
                </div>
            </div>
            </div>
        </div>
        <!-- /.career__hr-policy -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
