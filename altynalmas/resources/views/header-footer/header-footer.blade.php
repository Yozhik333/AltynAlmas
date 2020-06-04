<!doctype html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}">
</head>

<body>
<!--[if lt IE 10]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->
<!-- .wrapper -->
<div class="wrapper">
    <div class="wrapper-in">
        <!-- .header -->
        <header class="header">
            <div class="container-fluid">
                <div class="flex align-items-center justify-content-between">
                    <div class="flex align-items-center">
                        <div class="logo-wrap">
                            <a class="logo_right-offset flex" href="/">
                                <i class="icon-logo"></i>
                            </a>
                        </div>
                        <div class="desktop-menu-wrap">
                            <!-- nav-main -->
                            <nav class="nav-main">
                                <ul class="flex flex-wrap mobile-display-block">
                                    <li class=" dropdownWrap">
                                        <a class="link prevDev" href="{{ route('about') }}">
                                            <div class="menu-title"> @lang('messages.О компании') </div>
                                            <div class="menu-icon">
                                                <i class=""></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-level-1">
                                            <li class="{{ request()->is('about') ? 'active' : null }}">
                                                <a class="link " href="{{ route('about') }}">
                                                    <div class="menu-title"> @lang('messages.О компании') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('mission') ? 'active' : null }}">
                                                <a class="link " href="{{ route('mission') }}">
                                                    <div class="menu-title"> @lang('messages.Миссия') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('history') ? 'active' : null }}">
                                                <a class="link " href="{{ route('history') }}">
                                                    <div class="menu-title"> @lang('messages.История') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('main-directions') ? 'active' : null }}">
                                                <a class="link " href="{{ route('main-directions') }}">
                                                    <div class="menu-title"> @lang('messages.Основные направления деятельности') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdownWrap {{ request()->is('corporate') ? 'active' : null }}">
                                                <a class="link " href="{{ route('corporate') }}">
                                                    <div class="menu-title"> @lang('messages.Корпоративное управление') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu dropdown-level-">
                                                    <li class="{{ request()->is('governance') ? 'active' : null }}">
                                                        <a class="link " href="{{ route('governance')}}">
                                                            <div class="menu-title"> @lang('messages.Руководство компании') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="{{ request()->is('committee') ? 'active' : null }}">
                                                        <a class="link " href="{{ route('committee')}}">
                                                            <div class="menu-title"> @lang('messages.Комитеты Совета Директоров') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a target="_blank" class="link "
                                                           href="https://kase.kz/ru/issuers/ALMS/">
                                                            <div class="menu-title"> @lang('messages.Раскрытие информации') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdownWrap">
                                        <a class="link prevDev" href="{{route('akbakay')}}">
                                            <div class="menu-title"> @lang('messages.Активы') </div>
                                            <div class="menu-icon">
                                                <i class="icon-right"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-level-2">
                                            <li class="dropdownWrap {{ request()->is('akbakay') ? 'active' : null }}">
                                                <a class="link prevDev" href="{{route('akbakay')}}">
                                                    <div class="menu-title"> @lang('messages.Операционная деятельность') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu dropdown-level-">
                                                    <li class="{{ request()->is('akbakay') ? 'active' : null }}">
                                                        <a class="link " href="{{route('akbakay')}}">
                                                            <div class="menu-title"> @lang('messages.Акбакай') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="{{ request()->is('aktogay') ? 'active' : null }}">
                                                        <a class="link " href="{{route('aktogay')}}">
                                                            <div class="menu-title"> @lang('messages.Актогай') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="{{ request()->is('growth-projects') ? 'active' : null }}">
                                                <a class="link " href="{{route('growth-projects')}}">
                                                    <div class="menu-title"> @lang('messages.Проекты роста') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            {{-- <li class="{{ request()->is('place-of-birth') ? 'active' : null }} hidden">
                                                <a class="link " href="{{route('place-of-birth')}}">
                                                    <div class="menu-title"> @lang('messages.Месторождения') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li> --}}
                                            <li class="dropdownWrap {{ request()->is('digital-mine') ? 'active' : null }}">
                                                <a class="link prevDev" href="{{route('digital-mine')}}">
                                                    <div class="menu-title"> @lang('messages.Проекты') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu dropdown-level-">
                                                    <li class="{{ request()->is('digital-mine') ? 'active' : null }}">
                                                        <a class="link " href="{{route('digital-mine')}}">
                                                            <div class="menu-title"> @lang('messages.Цифровой рудник') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="{{ request()->is('mine-to-mill') ? 'active' : null }}">
                                                        <a class="link " href="{{route('mine-to-mill')}}">
                                                            <div class="menu-title"> Mine to mill</div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="{{ request()->is('sana-safety') ? 'active' : null }}">
                                                        <a class="link " href="{{route('sana-safety')}}">
                                                            <div class="menu-title"> Sana Safety</div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdownWrap">
                                        <a class="link prevDev" href="{{route('development-safety')}}">
                                            <div class="menu-title"> @lang('messages.Устойчивое развитие') </div>
                                            <div class="menu-icon">
                                                <i class="icon-right"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-level-3">
                                            <li class="{{ request()->is('development-safety') ? 'active' : null }}">
                                                <a class="link " href="{{route('development-safety')}}">
                                                    <div class="menu-title"> @lang('messages.Безопасность') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('development-ecology') ? 'active' : null }}">
                                                <a class="link " href="{{route('development-ecology')}}">
                                                    <div class="menu-title"> @lang('messages.Экология') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('development-staff') ? 'active' : null }}">
                                                <a class="link " href="{{route('development-staff')}}">
                                                    <div class="menu-title"> @lang('messages.Работники') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('development-local-communities') ? 'active' : null }}">
                                                <a class="link " href="{{route('development-local-communities')}}">
                                                    <div class="menu-title"> @lang('messages.Местные сообщества') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
																						</li>
																						<li class="{{ request()->is('hotline') ? 'active' : null }}">
                                                <a class="link " href="{{route('hotline')}}">
                                                    <div class="menu-title"> @lang('messages.Горячая линия') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            {{-- <li class="">
                                                <a class="link " href="hide">
                                                    <div class="menu-title"> @lang('messages.Отчет об устойчивом развитии') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    <li class="dropdownWrap">
                                        <a class="link prevDev" href="{{route('career')}}">
                                            <div class="menu-title"> @lang('messages.Карьера') </div>
                                            <div class="menu-icon">
                                                <i class="icon-right"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-level-4">
                                            <li class="{{ request()->is('career') ? 'active' : null }}">
                                                <a class="link " href="{{route('career')}}">
                                                    <div class="menu-title"> @lang('messages.Почему мы?') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('vacancies') ? 'active' : null }}">
                                                <a class="link " href="{{route('vacancies')}}">
                                                    <div class="menu-title"> @lang('messages.Вакансии') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
												<ul class="dropdown-menu dropdown-level-">
                                                    <li>
                                                        <a class="link "
                                                           href="https://hh.kz/search/vacancy?area=160&st=searchVacancy&text=алтыналмас"
                                                           target="_blank">
                                                            <div class="menu-title">Head Hunter</div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="{{ request()->is('jastar') ? 'active' : null }}">
                                                <a class="link " href="{{route('jastar')}}">
                                                    <div class="menu-title"> @lang('messages.Молодым специалистам') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('studying-programs') ? 'active' : null }}">
                                                <a class="link " href="{{route('studying-programs')}}">
                                                    <div class="menu-title"> @lang('messages.Программы обучения') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdownWrap">
                                                <a class="link prevDev" href="">
                                                    <div class="menu-title"> @lang('messages.Корпоративная культура') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu dropdown-level-">
                                                    <li class="{{ request()->is('our-values') ? 'active' : null }}">
                                                        <a class="link " href="{{route('our-values')}}">
                                                            <div class="menu-title"> @lang('messages.Наши ценности') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="{{ request()->is('corporate-newspaper') ? 'active' : null }}">
                                                        <a class="link " href="{{route('corporate-newspaper')}}">
                                                            <div class="menu-title"> @lang('messages.Корпоративная газета') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="{{ request()->is('gallery') ? 'active' : null }}">
                                                        <a class="link " href="{{route('gallery')}}">
                                                            {{--  --}}
                                                            <div class="menu-title"> @lang('messages.Фотогалерея') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdownWrap {{ request()->is('team-of-trainers') ? 'active' : null }}">
                                                <a class="link " href="{{route('team-of-trainers')}}">
                                                    <div class="menu-title"> @lang('messages.Команда тренеров') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu dropdown-level-">
                                                    <li class="{{ request()->is('career-contacts') ? 'active' : null }}">
                                                        <a class="link " href="{{route('career-contacts')}}">
                                                            <div class="menu-title"> @lang('messages.Контакты для соискателей') </div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdownWrap">
                                        <a class="link prevDev" href="{{route('suppliers-form')}}">
                                            <div class="menu-title"> @lang('messages.Поставщикам') </div>
                                            <div class="menu-icon">
                                                <i class="icon-right"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-level-5">
                                            <li class="{{ request()->is('suppliers-form') ? 'active' : null }}">
                                                <a class="link " href="{{route('suppliers-form')}}">
                                                    <div class="menu-title"> @lang('messages.Стать поставщиком') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('suppliers-principles') ? 'active' : null }}">
                                                <a class="link " href="{{route('suppliers-principles')}}">
                                                    <div class="menu-title"> @lang('messages.Принципы закупочной политики') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="{{ request()->is('suppliers-inside-doc') ? 'active' : null }}">
                                                <a class="link " href="{{route('suppliers-inside-doc')}}">
                                                    <div class="menu-title"> @lang('messages.Внутренние нормативные документы') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="{{ request()->is('suppliers-realization') ? 'active' : null }}">
                                                <a class="link " href="{{route('suppliers-realization')}}">
                                                    <div class="menu-title"> @lang('messages.Реализация неликвидов') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('suppliers-contacts') ? 'active' : null }}">
                                                <a class="link prevDev" href="{{route('suppliers-contacts')}}">
                                                    <div class="menu-title"> @lang('messages.Электронные закупки') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu dropdown-level-">
                                                    <li>
                                                        <a class="link "
                                                           href="https://standard.comex.kz/index.php?number=&name=&cus=Алты"
                                                           target="_blank">
                                                            <div class="menu-title">Standard Comex</div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="link " href="http://reestr.nadloc.kz/ru/tender/list"
                                                           target="_blank">
                                                            <div class="menu-title">Reestr Nadloc</div>
                                                            <div class="menu-icon">
                                                                <i class="icon-right"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="{{ request()->is('suppliers-contacts') ? 'active' : null }}">
                                                <a class="link " href="{{route('suppliers-contacts')}}">
                                                    <div class="menu-title"> @lang('messages.Контакты для поставщиков') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdownWrap">
                                        <a class="link prevDev" href="{{ route('newsPage')}}">
                                            <div class="menu-title"> @lang('messages.Инвесторы и СМИ') </div>
                                            <div class="menu-icon">
                                                <i class="icon-right"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-level-6">
                                            <li class="{{ request()->is('investors-and-media') ? 'active' : null }}">
                                                <a class="link " href="{{ route('newsPage')}}">
                                                    <div class="menu-title"> @lang('messages.Новости') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="{{ request()->is('investors-contacts') ? 'active' : null }}">
                                                <a class="link " href="{{ route('investors-contacts')}}">
                                                    <div class="menu-title"> @lang('messages.Контакты') </div>
                                                    <div class="menu-icon">
                                                        <i class="icon-right"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav><!-- end nav-main -->
                        </div>
                        <div class="mobile-menu-wrap">
                            <div class="mobile-menu">
                                <ul>
                                    <li class="mobile-menu__drop">
                                        <div class="mobile-menu__title-wrap toggle">
                                            <div class="mobile-menu__title"> @lang('messages.О компании') </div>
                                            <i class="icon-right"></i>
                                        </div>
                                        <div class="mobile-menu__dropdown">
                                            <ul>
                                                <li class="close-dropdown">
                                                    <i class="icon-left"></i> @lang('messages.Назад')
                                                </li>
                                                <li class="{{ request()->is('about') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{ route('about') }}"> @lang('messages.О компании') </a>
                                                </li>
                                                <li class="{{ request()->is('mission') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{ route('mission') }}"> @lang('messages.Миссия') </a>
                                                </li>
                                                <li class="{{ request()->is('history') ? 'active' : null }}">
                                                    <a class="mobile-menu__link" class="link "
                                                       href="{{ route('history') }}"> @lang('messages.История') </a>
                                                </li>
                                                <li class="{{ request()->is('main-directions') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{ route('main-directions') }}"> @lang('messages.Основные направления деятельности') </a>
                                                </li>
                                                <li class="{{ request()->is('corporate') ? 'active' : null }}">
                                                    <span class="mobile-menu__link mobile-menu__link_second"> @lang('messages.Корпоративное управление') <i
                                                                class="icon-right"></i> </span>
                                                    <div class="mobile-menu__dropdown">
                                                        <ul>
                                                            <li class="close-dropdown_sec">
                                                                <i class="icon-left"></i> @lang('messages.Назад')
                                                            </li>
                                                            <li class="{{ request()->is('corporate') ? 'active' : null }}">
                                                                <a class="mobile-menu__link"
                                                                   href="{{ route('corporate') }}"> @lang('messages.Корпоративное управление') </a>
                                                            </li>
                                                            <li class="{{ request()->is('governance') ? 'active' : null }}">
                                                                <a class="mobile-menu__link"
                                                                   href="{{ route('governance')}}"> @lang('messages.Руководство компании') </a>
                                                            </li>
                                                            <li class="{{ request()->is('committee') ? 'active' : null }}">
                                                                <a class="mobile-menu__link"
                                                                   href="{{ route('committee')}}"> @lang('messages.Комитеты Совета Директоров') </a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" class="mobile-menu__link"
                                                                   href="https://kase.kz/ru/issuers/ALMS/"> @lang('messages.Раскрытие информации') </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-menu__drop">
                                        <div class="mobile-menu__title-wrap toggle">
                                            <div class="mobile-menu__title"> @lang('messages.Активы') </div>
                                            <i class="icon-right"></i>
                                        </div>
                                        <div class="mobile-menu__dropdown">
                                            <ul>
                                                <li class="close-dropdown">
                                                    <i class="icon-left"></i> @lang('messages.Назад')
                                                </li>
                                                <li class="{{ request()->is('akbakay') ? 'active' : null }}">
                                                    <span class="mobile-menu__link mobile-menu__link_second"> @lang('messages.Операционная деятельность') <i
                                                                class="icon-right"></i> </span>
                                                    <ul class="mobile-menu__dropdown">
                                                        <li class="close-dropdown_sec">
                                                            <i class="icon-left"></i> @lang('messages.Назад')
                                                        </li>
                                                        <li class="{{ request()->is('akbakay') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('akbakay')}}"> @lang('messages.Акбакай') </a>
                                                        </li>
                                                        <li class="{{ request()->is('akbakay') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('akbakay')}}"> @lang('messages.Актогай') </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="{{ request()->is('growth-projects') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('growth-projects')}}"> @lang('messages.Проекты роста') </a>
                                                </li>
                                                {{-- <li class="{{ request()->is('place-of-birth') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('place-of-birth')}}"> @lang('messages.Месторождения') </a>
                                                </li> --}}
                                                <li class="{{ request()->is('digital-mine') ? 'active' : null }}">
                                                    <span class="mobile-menu__link mobile-menu__link_second"> @lang('messages.Проекты') <i
                                                                class="icon-right"></i> </span>
                                                    <ul class="mobile-menu__dropdown">
                                                        <li class="close-dropdown_sec">
                                                            <i class="icon-left"></i> @lang('messages.Назад')
                                                        </li>
                                                        <li class="{{ request()->is('digital-mine') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('digital-mine')}}"> @lang('messages.Цифровой рудник') </a>
                                                        </li>
                                                        <li class="{{ request()->is('mine-to-mill') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('mine-to-mill')}}"> Mine to mill </a>
                                                        </li>
                                                        <li class="{{ request()->is('sana-safety') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('sana-safety')}}"> Sana Safety </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-menu__drop">
                                        <div class="mobile-menu__title-wrap toggle">
                                            <div class="mobile-menu__title"> @lang('messages.Устойчивое развитие') </div>
                                            <i class="icon-right"></i>
                                        </div>
                                        <div class="mobile-menu__dropdown">
                                            <ul>
                                                <li class="close-dropdown">
                                                    <i class="icon-left"></i> @lang('messages.Назад')
                                                </li>
                                                <li class="{{ request()->is('development-safety') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('development-safety')}}"> @lang('messages.Безопасность') </a>
                                                </li>
                                                <li class="{{ request()->is('development-ecology') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('development-ecology')}}"> @lang('messages.Экология') </a>
                                                </li>
                                                <li class="{{ request()->is('development-staff') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('development-staff')}}"> @lang('messages.Работники') </a>
                                                </li>
                                                <li class="{{ request()->is('development-local-communities') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('development-local-communities')}}"> @lang('messages.Местные сообщества') </a>
                                                </li>
                                                {{-- <li>
                                                    <a class="mobile-menu__link"
                                                       href="hide"> @lang('messages.Отчет об устойчивом развитии') </a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-menu__drop">
                                        <div class="mobile-menu__title-wrap toggle">
                                            <div class="mobile-menu__title"> @lang('messages.Карьера') </div>
                                            <i class="icon-right"></i>
                                        </div>
                                        <div class="mobile-menu__dropdown">
                                            <ul>
                                                <li class="close-dropdown">
                                                    <i class="icon-left"></i> @lang('messages.Назад')
                                                </li>
                                                <li class="{{ request()->is('career') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('career')}}"> @lang('messages.Почему мы?') </a>
                                                </li>
                                                <li class="{{ request()->is('vacancies') ? 'active' : null }}">
                                                    <span class="mobile-menu__link mobile-menu__link_second"> @lang('messages.Вакансии') <i
                                                                class="icon-right"></i></span>
                                                    <ul class="mobile-menu__dropdown">
                                                        <li class="close-dropdown">
                                                            <i class="icon-left"></i> @lang('messages.Назад')
                                                        </li>
                                                        <li class="{{ request()->is('vacancies') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('vacancies')}}"> @lang('messages.Актуальные вакансии') </a>
                                                        </li>
                                                        <li class="">
                                                            <a class="mobile-menu__link"
                                                               href="https://hh.kz/search/vacancy?area=160&st=searchVacancy&text=алтыналмас"> Head Hunter </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="{{ request()->is('jastar') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('jastar')}}"> @lang('messages.Молодым специалистам') </a>
                                                </li>
                                                <li class="{{ request()->is('studying-programs') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('studying-programs')}}"> @lang('messages.Программы обучения') </a>
                                                </li>
                                                <li class="{{ request()->is('our-values') ? 'active' : null }}">
                                                    <span class="mobile-menu__link mobile-menu__link_second"> @lang('messages.Корпоративная культура') <i
                                                                class="icon-right"></i></span>
                                                    <ul class="mobile-menu__dropdown">
                                                        <li class="close-dropdown">
                                                            <i class="icon-left"></i> @lang('messages.Назад')
                                                        </li>
                                                        <li class="{{ request()->is('our-values') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('our-values')}}"> @lang('messages.Наши ценности') </a>
                                                        </li>
                                                        <li class="{{ request()->is('corporate-newspaper') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('corporate-newspaper')}}"> @lang('messages.Корпоративная газета') </a>
                                                        </li>
                                                        <li class="{{ request()->is('gallery') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('gallery')}}"> @lang('messages.Фотогалерея') </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="{{ request()->is('team-of-trainers') ? 'active' : null }}">
                                                    <span class="mobile-menu__link mobile-menu__link_second"> @lang('messages.Команда тренеров') <i
                                                                class="icon-right"></i> </span>
                                                    <ul class="mobile-menu__dropdown">
                                                        <li class="close-dropdown_sec">
                                                            <i class="icon-left"></i> @lang('messages.Назад')
                                                        </li>
                                                        <li class="{{ request()->is('team-of-trainers') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('team-of-trainers')}}"> @lang('messages.Команда тренеров') </a>
                                                        </li>
                                                        <li class="{{ request()->is('career-contacts') ? 'active' : null }}">
                                                            <a class="mobile-menu__link"
                                                               href="{{route('career-contacts')}}"> @lang('messages.Контакты для соискателей') </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-menu__drop">
                                        <div class="mobile-menu__title-wrap toggle toggle">
                                            <div class="mobile-menu__title"> @lang('messages.Поставщикам') </div>
                                            <i class="icon-right"></i>
                                        </div>
                                        <div class="mobile-menu__dropdown">
                                            <ul>
                                                <li class="close-dropdown">
                                                    <i class="icon-left"></i> @lang('messages.Назад')
                                                </li>
                                                <li class="{{ request()->is('suppliers-form') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('suppliers-form')}}"> @lang('messages.Стать поставщиком') </a>
                                                </li>
                                                <li class="{{ request()->is('suppliers-principles') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('suppliers-principles')}}"> @lang('messages.Принципы закупочной политики') </a>
                                                </li>
                                                <li class="{{ request()->is('suppliers-inside-doc') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('suppliers-inside-doc')}}"> @lang('messages.Внутренние нормативные документы') </a>
                                                </li>
                                                <li class="{{ request()->is('suppliers-realization') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('suppliers-realization')}}"> @lang('messages.Реализация неликвидов') </a>
                                                </li>
                                                <li class="">
{{--                                                    ЕГЕ--}}
                                                    <span class="mobile-menu__link mobile-menu__link_second"> @lang('messages.Электронные закупки') <i
                                                                class="icon-right"></i> </span>
                                                    <div class="mobile-menu__dropdown">
                                                        <ul>
                                                            <li class="close-dropdown_sec">
                                                                <i class="icon-left"></i> @lang('messages.Назад')
                                                            </li>
                                                            <li>
                                                                <a class="mobile-menu__link"
                                                                   href="https://standard.comex.kz/index.php?number=&name=&cus=Алты"
                                                                   target="_blank">
                                                                    <div class="menu-title">Standard Comex</div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="mobile-menu__link" href="http://reestr.nadloc.kz/ru/tender/list"
                                                                   target="_blank">
                                                                    <div class="menu-title">Reestr Nadloc</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="{{ request()->is('suppliers-contacts') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{route('suppliers-contacts')}}"> @lang('messages.Контакты для поставщиков') </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-menu__drop">
                                        <div class="mobile-menu__title-wrap toggle">
                                            <div class="mobile-menu__title"> @lang('messages.Инвесторы и СМИ') </div>
                                            <i class="icon-right"></i>
                                        </div>
                                        <div class="mobile-menu__dropdown">
                                            <ul>
                                                <li class="close-dropdown">
                                                    <i class="icon-left"></i> @lang('messages.Назад')
                                                </li>
                                                <li class="{{ request()->is('newsPage') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{ route('newsPage')}}"> @lang('messages.Новости') </a>
                                                </li>
                                                <li class="{{ request()->is('investors-contacts') ? 'active' : null }}">
                                                    <a class="mobile-menu__link"
                                                       href="{{ route('investors-contacts')}}"> @lang('messages.Контакты') </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex align-items-center search-lang-wrap">
                        <div class="flex align-items-center">
                            <div class="mobile-menu-icon">
                                <i class="icon-menu"
                                   onclick="this.className = (this.className == 'icon-menu' ? 'icon-close' : 'icon-menu')"></i>
                            </div>
                            <div class="search">
                                <div class="search-header-icon">
                                    <i class="icon-search"
                                       onclick="this.className = (this.className == 'icon-search' ? 'icon-close' : 'icon-search')"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex align-items-center">
                            <div class="lang-switch">
                                @if (app()->getLocale() == 'ru')
                                    <div class="active-lang"> RU</div>
                                    <div class="lang-wrap">
                                        <a href="locale/kz">
                                            KZ
                                        </a>
                                        <a href="locale/en">
                                            EN
                                        </a>
                                    </div>
                                @endif
                                @if (app()->getLocale() == 'kz')
                                    <div class="active-lang"> KZ</div>
                                    <div class="lang-wrap">
                                        <a href="locale/ru">
                                            RU
                                        </a>
                                        <a href="locale/en">
                                            EN
                                        </a>
                                    </div>
                                @endif
                                @if (app()->getLocale() == 'en')
                                    <div class="active-lang"> EN</div>
                                    <div class="lang-wrap">
                                        <a href="locale/kz">
                                            KZ
                                        </a>
                                        <a href="locale/ru">
                                            RU
                                        </a>
                                    </div>
                                @endif


                            </div>
                            <div class="cost-wrap">
                                <div class="cost"> USD: 411.54 <i></i>
                                </div>
                                <div class="cost"> GOLD: $ 1743.50 +14.80▲</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-wrapper">
                <div class="container-fluid">
                    <form action="" method="get" class="search-form__panel" id="searchHeaderForm">
                        <input type="text" name="search" value="" list='datalist1' id="searchHeader"
                               class="search-form__input" autocomplete="off">
                        <datalist id="datalist1">
                            <option data-value="" value="ничего не найдено"></option>
                        </datalist>
                        <button type="submit" class="search-form__button">
                            <i class="icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </header><!-- end .header -->
        <!-- .content -->
        <main class="content">

            @yield('main-content')

        </main><!-- end .content -->
        <!-- .footer -->
        <footer class="footer">
            <div class="container-fluid flex justify-content-between">
                <nav class="nav-footer">
                    <ul>
                        <li><a href="{{route('glossary')}}">@lang('messages.Глоссарий')</a></li>
                        <li><a href="{{route('contacts')}}">@lang('messages.Контакты')</a></li>
                    </ul>
                </nav>
                <a class="maint" href="https://maint.kz/ "><img src="{{ asset('/img/maint.png') }}"
                                                                alt="Разработано Maint"></a>
            </div>
        </footer><!-- end .footer -->
    </div>
</div><!-- end .wrapper -->

<script src="{{ asset('js/app.min.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
</body>

</html>
