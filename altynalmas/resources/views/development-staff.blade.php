@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Работники
  @endif
  @if (app()->getLocale() == 'kz')
    Қызметкерлер
  @endif
  @if (app()->getLocale() == 'en')
    Employees
  @endif
@endsection

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-staff.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> @lang('messages.Работники') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="staff">
        <div class="container-fluid">
        <h2 class="underline_bottom-offset"> @lang('messages.Наши работники –') <br> @lang('messages.это главный капитал компании') </h2>
        <div class="staff__block">
            <div class="staff__description">
            <p>@lang('messages.В штате компании трудятся более 2000 работников. Большая часть из них специалисты высшей категории с первоклассной теоретической подготовкой и практическим опытом, которые вносят неоценимый вклад в реализацию сложных, масштабных проектов в различных областях деятельности компании.')</p>
            <p>@lang('messages.Компания стремится войти в число лучших работодателей Казахстана, постоянно развивая систему материальной и нематериальной мотивации, совершенствуя условия труда, обеспечивая возможности для профессионального развития и карьерного роста.')</p>
            </div>
            <div class="staff__description">
            <p>@lang('messages.Компания постоянно совершенствует систему управления персоналом и внедряет лучшие международные практики в этой области.') </p>
            <p>@lang('messages.Кадровая политика компании направлена на привлечение и развитие талантливых и мотивированных работников, разделяющих наши корпоративные ценности и способных решать текущие и будущие задачи.')</p>
            </div>
        </div>
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
