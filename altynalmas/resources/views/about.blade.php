@extends('header-footer.header-footer')


@section('main-content')
  <div class="banner" style="background-image: url('img/about-banner.jpg');">
    <div class="container-fluid">
      <div class="flex align-items-baseline">
        <div class="title-wrapper">
          <div class="h1-wrap">
            <h1 class="small"> @lang('messages.О компании') </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="about">
    <div class="container-fluid">
      <div class="about-gold">
        <div class="article-title-wrap">
          <div class="article-title"> @lang('messages.Производитель золота')<span class="article-title-after"></span></div>
        </div>
        <div class="about-gold__description">
          <div class="about-gold__description-block">
            <div class="about-gold__words">
              <p> @lang('messages.Акционерное общество «АК Алтыналмас» - компания полного геологического, горнодобывающего и золотоперерабатывающего цикла. Добыча золотосодержащей руды ведется на 5 из 15 месторождений Казахстана, которые принадлежат компании.') </p>
              <p> @lang('messages.Активы компании присутствует в 4-х регионах Казахстана: Жамбылской, Карагандинской, Восточно-Казахстанской и Акмолинской областях.')</p>
              <p> @lang('messages.Полезные ископаемые перерабатываются на собственных золотоизвлекательных фабриках «Акбакай», «Актогай» и «Алтыналмас Technology»')</p>
            </div>
            <div class="about-gold__img">
              <img src="img/about-gold-img1.jpg" alt="Завод">
            </div>
          </div>
          <div class="about-gold__description-block">
            <div class="about-gold__words">
              <p> @lang('messages.В штате компании трудятся 2055 высококвалифицированных инженерно-технических сотрудников.')</p>
              <p> @lang('messages.В производственном процессе задействовано более 120 единиц горной техники.')</p>
            </div>
            <div class="about-gold__img">
              <img src="img/about-gold-img2.jpg" alt="Камазы">
            </div>
          </div>
        </div>
      </div>
      <!-- /.about-gold -->
      <div class="about-items">
        <div class="about-items__title"> @lang('messages.Компания подтвердила соответствие международным') <br> @lang('messages.стандартам качества, получив сертификаты:') </div>
        <!-- /.about-items-title -->
        <div class="about-items__contain">
          <div class="about-items__item-wrap">
            <div class="about-items__item">
              <div class="about-items__item-title"> @lang('messages.ISO 9001 Системы менеджмента качества') </div>
              <a href="img/about-item1.jpg" class="about-items__item-img" data-fancybox="gallery" data-caption="Caption #1">
                <img src="img/about-item1.jpg" alt="Сертификаты">
              </a>
            </div>
          </div>
          <div class="about-items__item-wrap">
            <div class="about-items__item">
              <div class="about-items__item-title"> @lang('messages.ISO 14001 Системы экологического менеджмента') </div>
              <a href="img/about-item2.jpg" class="about-items__item-img" data-fancybox="gallery" data-caption="Caption #2">
                <img src="img/about-item2.jpg" alt="Сертификаты">
              </a>
            </div>
          </div>
          <div class="about-items__item-wrap">
            <div class="about-items__item">
              <div class="about-items__item-title"> @lang('messages.ISO 45001 Системы охраны здоровья и безопасности труда') </div>
              <a href="img/about-item3.jpg" class="about-items__item-img" data-fancybox="gallery" data-caption="Caption #3">
                <img src="img/about-item3.jpg" alt="Сертификаты">
              </a>
            </div>
          </div>
        </div>
        <!-- /.about-items__contain -->
      </div>
      <!-- /.about-items -->
    </div>
    <!-- /.container -->
  </section>
@endsection
