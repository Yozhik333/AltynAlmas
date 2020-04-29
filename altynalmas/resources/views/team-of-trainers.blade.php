@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Команда тренеров
  @endif
  @if (app()->getLocale() == 'kz')
    Тренерлер командасы
  @endif
  @if (app()->getLocale() == 'en')
    Team of trainers
  @endif
@endsection

@section('main-content')

<div class="team-of-trainers" data-namespace="team-of-trainers" data-template="team-of-trainers">
    <div class="mainTopSlider mainDepositsSlider">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url('img/team-of-trainers.jpg')">
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="flex align-items-baseline">
          <div class="title-wrapper">
            <div class="h1-wrap">
              <h1> @lang('messages.Команда тренеров') </h1>
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
      <div class="team-of-trainers-content flex flex-wrap">
        <div class="gallery-top__wrap">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">

                @isset($trainers)
                    @foreach ($trainers as $trainer)
                        @if ($trainer->is_active == 1)
                          @if (app()->getLocale() == 'ru')
                            <div class="swiper-slide" data-trainer-post="{{$trainer->position_ru}}" data-trainer-info="{{$trainer->text_ru}}" data-trainer-name="{{$trainer->name_ru}}">
                              <div class="trainer__img">
                                  <img src="/storage/{{$trainer->img_url}}">
                              </div>
                            </div>
                          @endif
                          @if (app()->getLocale() == 'kz')
                            <div class="swiper-slide" data-trainer-post="{{$trainer->position_en}}" data-trainer-info="{{$trainer->text_en}}" data-trainer-name="{{$trainer->name_en}}">
                              <div class="trainer__img">
                                  <img src="/storage/{{$trainer->img_url}}">
                              </div>
                            </div>
                          @endif
                          @if (app()->getLocale() == 'en')
                            <div class="swiper-slide" data-trainer-post="{{$trainer->position_en}}" data-trainer-info="{{$trainer->text_en}}" data-trainer-name="{{$trainer->name_en}}">
                              <div class="trainer__img">
                                  <img src="/storage/{{$trainer->img_url}}">
                              </div>
                            </div>
                          @endif
                        @endif
                    @endforeach
                @endisset

            </div>
          </div>
          <div class="trainer__fio">
            <div class="post"> @lang('messages.Менеджер по стратегическому развитию') </div>
            <div class="fio"> @lang('messages.Ерден Акашев') </div>
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
        <div class="right-side">
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    @isset($trainers)
                        @foreach ($trainers as $trainer)
                            @if ($trainer->is_active == 1)
                                <div class="swiper-slide">
                                    <div class="trainer__img">
                                        <img src="/storage/{{$trainer->img_url}}">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
          <div class="trainer__info"> @lang('messages.Ерден Уалиевич специализируется на внутреннем контроле, оценке рисков и корпоративном управлении в ресурсных и производственных компаниях. Он занимает позицию менеджера по стратегическому развитию АО «АК Алтыналмас». Ерден участвовал в разработке анализа и дизайна коммерческого направления в проекте внедрения ERP, оптимизировал внутренние контроли и создал информационно-аналитическую инфраструктуру для коммерческого направления компании. До «Алтыналмас» Ерден почти 6 лет проработал в ТОО «Казцинк» (актив Glencore) - компании, которая занимается добычей, обогащением и плавкой цветных металлов. Начав с бюджетного управления Ерден перешел главным специалистом в управление внутреннего аудита и корпоративного развития, где в составе группы аудиторов Glencore принимал участие в аудите управления ремонтами, запасами и контрактования. В «Казцинке» он запустил систему оценки и мониторинга эффективности подрядчиков, а также участвовал в проекте автоматизации тендерного процесса, в результате чего, компания получила внешнюю электронную тендерную платформу для взаимодействия с контрагентами. Ерден получил диплом бакалавра Учета и Аудита и окончил магистратуру в Казахстанско-Британском Техническим Университете по направлению «Менеджмент». Находится на финальном этапе получения CIA сертификата. Описание Программы тренинга (** в первом интервью идут вопросы о программе тренингов, во втором вопросы личного характера)') </div>
        </div>
      </div>
    </div>
  </div>

@endsection
