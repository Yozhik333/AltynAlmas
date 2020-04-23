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
    <title>Главная</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}">
  </head>

  <body data-namespace="main" data-template="index">
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
                          <div class="menu-title"> О компании </div>
                          <div class="menu-icon">
                            <i class=""></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu dropdown-level-1">
                          <li class="active ">
                            <a class="link " href="{{ route('about') }}">
                              <div class="menu-title"> О компании </div>
                              <div class="menu-icon">
                                <i class="icon-right"></i>
                              </div>
                            </a>
                          </li>
                          <li class="active ">
                            <a class="link " href="{{ route('about-mission') }}">
                              <div class="menu-title"> Миссия </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{ route('history') }}">
                              <div class="menu-title"> История </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{ route('main-deposits') }}">
                              <div class="menu-title"> Основные направления деятельности </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" dropdownWrap">
                            <a class="link " href="{{ route('corporate') }}">
                              <div class="menu-title"> Корпоративное управление </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                            <ul class="dropdown-menu dropdown-level-">
                              <li class=" ">
                                <a class="link " href="{{ route('corporate') }}">
                                  <div class="menu-title"> Корпоративное управление </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="{{ route('governance')}}">
                                  <div class="menu-title"> Руководство компании </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="{{ route('committee')}}">
                                  <div class="menu-title"> Комитеты Совета Директоров </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="https://kase.kz/ru/issuers/ALMS/">
                                  <div class="menu-title"> Раскрытие информации </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class=" dropdownWrap">
                        <a class="link prevDev" href="{{route('akbakay')}}">
                          <div class="menu-title"> Активы </div>
                          <div class="menu-icon">
                            <i class=""></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu dropdown-level-2">
                          <li class="active dropdownWrap">
                            <a class="link " href="{{route('akbakay')}}">
                              <div class="menu-title"> Операционная деятельность </div>
                              <div class="menu-icon">
                                <i class="icon-right"></i>
                              </div>
                            </a>
                            <ul class="dropdown-menu dropdown-level-">
                              <li class=" ">
                                <a class="link " href="{{route('akbakay')}}">
                                  <div class="menu-title"> Акбакай </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="{{route('aktogay')}}">
                                  <div class="menu-title"> Актогай </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="active ">
                            <a class="link " href="{{route('growth-projects')}}">
                              <div class="menu-title"> Проекты роста </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('place-of-birth')}}">
                              <div class="menu-title"> Месторождения </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" dropdownWrap">
                            <a class="link " href="{{route('digital-mine')}}">
                              <div class="menu-title"> Проекты </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                            <ul class="dropdown-menu dropdown-level-">
                              <li class=" ">
                                <a class="link " href="{{route('digital-mine')}}">
                                  <div class="menu-title"> Цифровой рудник </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="{{route('mine-to-mill')}}">
                                  <div class="menu-title"> Mine to mill </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="{{route('sana-safety')}}">
                                  <div class="menu-title"> Sana Safety </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class=" dropdownWrap">
                        <a class="link prevDev" href="{{route('development-safety')}}">
                          <div class="menu-title"> Устойчивое развитие </div>
                          <div class="menu-icon">
                            <i class=""></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu dropdown-level-3">
                          <li class=" ">
                            <a class="link " href="{{route('development-safety')}}">
                              <div class="menu-title"> Безопасность </div>
                              <div class="menu-icon">
                                <i class="icon-right"></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('development-ecology')}}">
                              <div class="menu-title"> Экология </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('development-staff')}}">
                              <div class="menu-title"> Сотрудники </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('development-local-communities')}}">
                              <div class="menu-title"> Местные сообщества </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class="active ">
                            <a class="link " href="hide">
                              <div class="menu-title"> Отчет об устойчивом развитии </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class=" dropdownWrap">
                        <a class="link prevDev" href="{{route('career')}}">
                          <div class="menu-title"> Карьера </div>
                          <div class="menu-icon">
                            <i class=""></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu dropdown-level-4">
                          <li class=" ">
                            <a class="link " href="{{route('career')}}">
                              <div class="menu-title"> Почему мы? </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('vacancies')}}">
                              <div class="menu-title"> Вакансии </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('jastar')}}">
                              <div class="menu-title"> Молодым специалистам </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('studying-programs')}}">
                              <div class="menu-title"> Программы обучения </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" dropdownWrap">
                            <a class="link " href="">
                              <div class="menu-title"> Корпоративная культура </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                            <ul class="dropdown-menu dropdown-level-">
                              <li class=" ">
                                <a class="link " href="{{route('our-values')}}">
                                  <div class="menu-title"> Наши ценности </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="{{route('corporate-newspaper')}}">
                                  <div class="menu-title"> Корпоративная газета </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                              <li class=" ">
                                <a class="link " href="{{route('gallery')}}">
                                    {{--  --}}
                                  <div class="menu-title"> Фотогалерея </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class=" dropdownWrap">
                            <a class="link " href="{{route('team-of-trainers')}}">
                              <div class="menu-title"> Команда тренеров </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                            <ul class="dropdown-menu dropdown-level-">
                              <li class=" ">
                                <a class="link " href="{{route('career-contacts')}}">
                                  <div class="menu-title"> Контакты для соискателей </div>
                                  <div class="menu-icon">
                                    <i class=""></i>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class=" dropdownWrap">
                        <a class="link prevDev" href="{{route('suppliers-form')}}">
                          <div class="menu-title"> Поставщикам </div>
                          <div class="menu-icon">
                            <i class=""></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu dropdown-level-5">
                          <li class=" ">
                            <a class="link " href="{{route('suppliers-form')}}">
                              <div class="menu-title"> Стать поставщиком </div>
                              <div class="menu-icon">
                                <i class="icon-right"></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('suppliers-principles')}}">
                              <div class="menu-title"> Принципы закупочной политики </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('suppliers-realization')}}">
                              <div class="menu-title"> Реализация неликвидов </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                          <li class="active ">
                            <a class="link " href="{{route('suppliers-contacts')}}">
                              <div class="menu-title"> Электронные закупки </div>
                              <div class="menu-icon">
                                <i class="icon-right"></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{route('suppliers-contacts')}}">
                              <div class="menu-title"> Контакты для поставщиков </div>
                              <div class="menu-icon">
                                <i class=""></i>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class=" dropdownWrap">
                        <a class="link prevDev" href="{{ route('newsPage')}}">
                          <div class="menu-title"> Инвесторы и СМИ </div>
                          <div class="menu-icon">
                            <i class=""></i>
                          </div>
                        </a>
                        <ul class="dropdown-menu dropdown-level-6">
                          <li class=" ">
                            <a class="link " href="{{ route('newsPage')}}">
                              <div class="menu-title"> Новости </div>
                              <div class="menu-icon">
                                <i class="icon-right"></i>
                              </div>
                            </a>
                          </li>
                          <li class=" ">
                            <a class="link " href="{{ route('investors-contacts')}}">
                              <div class="menu-title"> Контакты </div>
                              <div class="menu-icon">
                                <i class=""></i>
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
                          <div class="mobile-menu__title"> О компании </div>
                          <i class="icon-right"></i>
                        </div>
                        <div class="mobile-menu__dropdown">
                          <ul>
                            <li class="close-dropdown">
                              <i class="icon-left"></i> Назад
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{ route('about') }}"> О компании </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{ route('about-mission') }}"> Миссия </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" class="link " href="{{ route('history') }}"> История </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{ route('main-deposits') }}"> Основные направления деятельности </a>
                            </li>
                            <li>
                              <span class="mobile-menu__link mobile-menu__link_second"> Корпоративное управление <i class="icon-right"></i> </span>
                              <div class="mobile-menu__dropdown">
                                <ul>
                                  <li class="close-dropdown_sec">
                                    <i class="icon-left"></i> Назад
                                </li>
                                  <li>
                                    <a class="mobile-menu__link" href="{{ route('corporate') }}"> Корпоративное управление </a>
                                  </li>
                                  <li>
                                    <a class="mobile-menu__link" href="{{ route('governance')}}"> Руководство компании </a>
                                  </li>
                                  <li>
                                    <a class="mobile-menu__link" href="{{ route('committee')}}"> Комитеты Совета Директоров </a>
                                  </li>
                                  <li>
                                    <a class="mobile-menu__link" href="https://kase.kz/ru/issuers/ALMS/"> Раскрытие информации </a>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="mobile-menu__drop">
                        <div class="mobile-menu__title-wrap toggle">
                          <div class="mobile-menu__title"> Активы </div>
                          <i class="icon-right"></i>
                        </div>
                        <div class="mobile-menu__dropdown">
                          <ul>
                            <li class="close-dropdown">
                              <i class="icon-left"></i> Назад
                            </li>
                            <li>
                              <span class="mobile-menu__link mobile-menu__link_second"> Операционная деятельность <i class="icon-right"></i> </span>
                              <ul class="mobile-menu__dropdown">
                                <li class="close-dropdown_sec">
                                  <i class="icon-left"></i> Назад
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('akbakay')}}"> Акбакай </a>
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('akbakay')}}"> Актогай </a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('growth-projects')}}"> Проекты роста </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('place-of-birth')}}"> Месторождения </a>
                            </li>
                            <li>
                              <span class="mobile-menu__link mobile-menu__link_second"> Проекты <i class="icon-right"></i> </span>
                              <ul class="mobile-menu__dropdown">
                                <li class="close-dropdown_sec">
                                  <i class="icon-left"></i> Назад
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('digital-mine')}}"> Цифровой рудник </a>
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('mine-to-mill')}}"> Mine to mill </a>
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('sana-safety')}}"> Sana Safety </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="mobile-menu__drop">
                        <div class="mobile-menu__title-wrap toggle">
                          <div class="mobile-menu__title"> Устойчивое рвзвитие </div>
                          <i class="icon-right"></i>
                        </div>
                        <div class="mobile-menu__dropdown">
                          <ul>
                            <li class="close-dropdown">
                              <i class="icon-left"></i> Назад
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('development-safety')}}"> Безопасность </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('development-ecology')}}"> Экология </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('development-staff')}}"> Сотрудники </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('development-local-communities')}}"> Местные сообщества </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="hide"> Отчет об устойчивом развитии </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="mobile-menu__drop">
                        <div class="mobile-menu__title-wrap toggle">
                          <div class="mobile-menu__title"> Карьера </div>
                          <i class="icon-right"></i>
                        </div>
                        <div class="mobile-menu__dropdown">
                          <ul>
                            <li class="close-dropdown">
                              <i class="icon-left"></i> Назад
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('career')}}"> Почему мы? </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('vacancies')}}"> Вакансии </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('jastar')}}"> Молодым специалистам </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('studying-programs')}}"> Программы обучения </a>
                            </li>
                            <li>
                              <span class="mobile-menu__link mobile-menu__link_second"> Корпоративная культура <i class="icon-right"></i></span>
                              <ul class="mobile-menu__dropdown">
                                <li class="close-dropdown">
                                  <i class="icon-left"></i> Назад
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('our-values')}}"> Наши ценности </a>
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('corporate-newspaper')}}"> Корпоративная газета </a>
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('gallery')}}"> Фотогалерея </a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <span class="mobile-menu__link mobile-menu__link_second"> Команда тренеров <i class="icon-right"></i> </span>
                              <ul class="mobile-menu__dropdown">
                                <li class="close-dropdown_sec">
                                  <i class="icon-left"></i> Назад
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('team-of-trainers')}}"> Команда тренеров </a>
                                </li>
                                <li>
                                  <a class="mobile-menu__link" href="{{route('career-contacts')}}"> Контакты для соискателей </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="mobile-menu__drop">
                        <div class="mobile-menu__title-wrap toggle toggle">
                          <div class="mobile-menu__title"> Поставщикам </div>
                          <i class="icon-right"></i>
                        </div>
                        <div class="mobile-menu__dropdown">
                          <ul>
                            <li class="close-dropdown">
                              <i class="icon-left"></i> Назад
                            </li>
                            <li>
                                <a class="mobile-menu__link" href="{{route('suppliers-form')}}"> Стать поставщиком </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('suppliers-principles')}}"> Принципы закупочной политики </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{route('suppliers-realization')}}"> Реализация неликвидов </a>
                            </li>
                            <!--                <li>-->
                            <!--                    <a class="mobile-menu__link"-->
                            <!--                       href="">-->
                            <!--                            Электронные закупки-->
                            <!--                    </a>-->
                            <!--                </li>-->
                            <li>
                              <a class="mobile-menu__link" href="{{route('suppliers-contacts')}}"> Контакты для поставщиков </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="mobile-menu__drop">
                        <div class="mobile-menu__title-wrap toggle">
                          <div class="mobile-menu__title"> Инвесторы и сми </div>
                          <i class="icon-right"></i>
                        </div>
                        <div class="mobile-menu__dropdown">
                          <ul>
                            <li class="close-dropdown">
                              <i class="icon-left"></i> Назад
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{ route('newsPage')}}"> Новости </a>
                            </li>
                            <li>
                              <a class="mobile-menu__link" href="{{ route('investors-contacts')}}"> Контакты </a>
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
                    <i class="icon-menu" onclick="this.className = (this.className == 'icon-menu' ? 'icon-close' : 'icon-menu')"></i>
                  </div>
                  <div class="search">
                    <div class="search-header-icon">
                      <i class="icon-search" onclick="this.className = (this.className == 'icon-search' ? 'icon-close' : 'icon-search')"></i>
                    </div>
                  </div>
                </div>
                <div class="flex align-items-center">
                  <div class="lang-switch">
                    <div class="active-lang"> RU </div>
                    <div class="lang-wrap">
                      <a href="#">
                        KZ
                      </a>
                      <a href="#">
                        EN
                      </a>
                    </div>
                    <a href="locale/kz">kz</a>
                    <a href="locale/ru">ru</a>
                    <a href="locale/en">en</a>
                  </div>
                  <div class="cost-wrap">
                    <div class="cost"> USD: 678,30 <i></i>
                    </div>
                    <div class="cost"> GOLD: $ 1 282,50 -0,09% </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="search-wrapper">
            <div class="container-fluid">
              <form action="" class="search-form__panel">
                <input type="text" name="q" value="" class="search-form__input" autocomplete="off">
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
                <li><a href="{{route('glossary')}}">Глоссарий</a></li>
                <li><a href="{{route('contacts')}}">Контакты</a></li>
              </ul>
            </nav>
            <a class="maint" href="https://maint.kz/ "><img src="{{ asset('/img/maint.png') }}" alt="Разработано Maint"></a>
          </div>
        </footer><!-- end .footer -->
      </div>
    </div><!-- end .wrapper -->

    <script src="{{ asset('js/app.min.js') }}"></script>
  </body>

</html>
