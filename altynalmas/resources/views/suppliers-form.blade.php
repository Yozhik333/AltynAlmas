@extends('header-footer.header-footer')

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-suppliers.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> @lang('messages.Стать поставщиком') </h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <section class="suppliers">
        <div class="container-fluid">
        <div class="flex flex-wrap">
            <div class="to-suppliers">
            <div class="article-title-wrap">
                <div class="article-title">@lang('messages.Сотрудничество с поставщиками')<span class="article-title-after"></span></div>
            </div>
            <div class="to-suppliers__description">
                <p>@lang('messages.АО «АК Алтыналмас» при взаимодействии с поставщиками стремится развивать долгосрочные и взаимовыгодные отношения.')</p>
                <p>@lang('messages.При выборе поставщиков товаров/работ/услуг основными критериями являются:') </p>
                <ul>
                <li>@lang('messages.соотношение цена/качество;') </li>
                <li>@lang('messages.сроки поставки;') </li>
                <li>@lang('messages.репутация;') </li>
                <li>@lang('messages.наличие производственных мощностей;') </li>
                <li>@lang('messages.опыт работы с добывающими компаниями.') </li>
                </ul>
            </div>
            </div>
            <div class="suppliers__form">
            <div class="suppliers__form-headline"> @lang('messages.Регистрационная форма') </div>
            <div class="suppliers__form-body">
                <div class="suppliers__block">
                <div class="suppliers__block-head"> @lang('messages.1 шаг') </div>
                <div class="suppliers__block-body"> @lang('messages.Для регистрации в базе поставщиков компании необходимо скачать и заполнить следующую форму:') </div>
                <div class="suppliers__block-footer">
                    @if (app()->getLocale() == 'ru')
                        <a class="btn btn-detail" href="/storage/{{$suppliersForm[0]->supplier_form_ru}}">Регистрационная анкета</a>
                    @endif
                    @if (app()->getLocale() == 'kz')
                        <a class="btn btn-detail" href="/storage/{{$suppliersForm[0]->supplier_form_kz}}">Тіркеу сауалнамасы</a>
                    @endif
                    @if (app()->getLocale() == 'en')
                        <a class="btn btn-detail" href="/storage/{{$suppliersForm[0]->supplier_form_en}}">Registration form</a>
                    @endif
                </div>
                </div>
                <div class="suppliers__block">
                <div class="suppliers__block-head"> @lang('messages.2 шаг') </div>
                <div class="suppliers__block-body"> @lang('messages.Заполненную форму необходимо отправить с пакетом документов на электронный адрес:') <a href="mailto:regform@altynalmas.kz">regform@altynalmas.kz</a>
                </div>
                <div class="suppliers__block-footer"> @lang('messages.*С коммерческим предложением обращайтесь на:') <a href="mailto:tender@altynalmas.kz">regform@altynalmas.kz</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.flex flex-wrap -->
        </div>
    </section>

@endsection
