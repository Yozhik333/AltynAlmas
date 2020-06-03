@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Altyn jastar
  @endif
  @if (app()->getLocale() == 'kz')
    Altyn jastar
  @endif
  @if (app()->getLocale() == 'en')
    Altyn jastar
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-vacancy.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> Altyn jastar </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <section class="jastar">
        <div class="container-fluid">
        <h2 class="underline_bottom-offset">@lang('messages.Наставничество – это инвестиция в устойчивое<br> развитие компании.')</h2>
        <div class="jastar__description">
            <p>@lang('messages.Целями наставничества являются практическое обучение и подготовка молодых специалистов к самостоятельной работе на производстве на основе единой системы передачи опыта, навыков, умений и знаний.')</p>
            <!--<p>@lang('messages.Цель программы – обучение специалистов непосредственно на рабочих местах и обеспечение оптимального использования времени и ресурсов для скорейшего<br> достижения стажерами необходимых производственных показателей, снижение текучести персонала и мотивация молодежи к установлению длительных трудовых<br> отношений в компании.') </p>
            <p>@lang('messages.В настоящее время более 50% работников имеют стаж работы более 3-х лет в компании и потенциально могут быть наставниками для молодого поколения<br> работников.')</p>-->
        </div>
        <div class="jastar__structure">
            <div class="jastar__structure-title"> @lang('messages.Структура персонала')</div>
            <div class="flex flex-wrap">
            <div class="jastar__structure-left">
                <div class="jastar__structure-item">
                <div>43%</div>
                <div>@lang('messages.поколение Y<br> (21–35 лет)')</div>
                </div>
                <div class="jastar__structure-item">
                <div>48%</div>
                <div>@lang('messages.поколение X<br> (36–55 лет)')</div>
                </div>
                <div class="jastar__structure-item">
                <div>9%</div>
                <div>@lang('messages.бэйби-бум<br> (56 лет и старше)')</div>
                </div>
            </div>
            <div class="jastar__structure-right">
                <div class="jastar__structure-lists">
                <div class="structure-lists-title"> @lang('messages.Преимущества проекта наставничества для молодых специалистов:') </div>
                <ul>
                    <li>@lang('messages.повышение уровня профессиональной компетентности') </li>
                    <li>@lang('messages.получение профессионального опыта, знаний, умений и навыков от лучших специалистов отрасли')</li>
                    <li>@lang('messages.прохождение стажировки по индивидуальной программе обучения')</li>
                </ul>
                </div>
                <div class="jastar__structure-footer"> @lang('messages.Продолжительность программы – 3 месяца.') </div>
            </div>
            </div>
        </div>
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
