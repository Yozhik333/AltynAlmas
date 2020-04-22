@extends('header-footer.header-footer')

@section('main-content')

    <div class="banner" style="background-image: url('/img/banner-suppliers.jpg');">
        <div class="container-fluid">
        <div class="flex align-items-baseline">
            <div class="title-wrapper">
            <div class="h1-wrap">
                <h1 class="small"> Стать поставщиком </h1>
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
                <div class="article-title">Сотрудничество с поставщиками<span class="article-title-after"></span></div>
            </div>
            <div class="to-suppliers__description">
                <p>АО «АК Алтыналмас» при взаимодействии с поставщиками стремится развивать долгосрочные и взаимовыгодные отношения.</p>
                <p>При выборе поставщиков товаров/работ/услуг основными критериями являются: </p>
                <ul>
                <li>соотношение цена/качество; </li>
                <li>сроки поставки;</li>
                <li>репутация; </li>
                <li>наличие производственных мощностей;</li>
                <li>опыт работы с добывающими компаниями.</li>
                </ul>
            </div>
            </div>
            <div class="suppliers__form">
            <div class="suppliers__form-headline"> Регистрационная форма </div>
            <div class="suppliers__form-body">
                <div class="suppliers__block">
                <div class="suppliers__block-head"> 1 шаг </div>
                <div class="suppliers__block-body"> Для регистрации в базе поставщиков компании необходимо скачать и заполнить следующую форму: </div>
                <div class="suppliers__block-footer">
                    <a class="btn btn-detail" href="/storage/{{$suppliersForm[0]->supplier_form_ru}}">Регистрационная анкета</a>
                </div>
                </div>
                <div class="suppliers__block">
                <div class="suppliers__block-head"> 2 шаг </div>
                <div class="suppliers__block-body"> Заполненную форму необходимо отправить с пакетом документов на электронный адрес: <a href="mailto:regform@altynalmas.kz">regform@altynalmas.kz</a>
                </div>
                <div class="suppliers__block-footer"> *С коммерческим предложением обращайтесь на: <a href="mailto:tender@altynalmas.kz">regform@altynalmas.kz</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.flex flex-wrap -->
        </div>
    </section>

@endsection
