<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Altynalmas административная панель</title>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/summernote/summernote.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/oneui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">

</head>
<body>
    <div class="header">
        <div class="container container-admin">
            <a href="#" class="headr-logo">
                <img src="{{ asset('img/logo.png') }}">

            </a>
            <ul class="navbar-nav ml-auto">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Выход') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="container">

        </div>
    </div>
    <div class="admin-menu">
        <div class="admin-menu_item"><a class="admin-menu_item_link" href="{{ route('admin-news.index') }}"> Инвесторы и СМИ. Новости</a></div>
        <div class="admin-menu_item">
            <a class="admin-menu_item_link" href="#"> О компании</a>
            <div class="admin-menu_item_dropdown">
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-years.index') }}">История</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-board-of-directors.index') }}">Руководство компании. Совет директоров</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-board.index') }}">Руководство компании. Правление</a>
            </div>
        </div>
        <div class="admin-menu_item">
            <a class="admin-menu_item_link" href="#"> Активы. Операционная деятельность</a>
            <div class="admin-menu_item_dropdown">
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-akbakay.index') }}">Акбакай</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-aktogay.index') }}">Актогай</a>
            </div>
        </div>
        <div class="admin-menu_item">
            <a class="admin-menu_item_link" href="#"> Активы. Проекты</a>
            <div class="admin-menu_item_dropdown">
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-digital-mine.index') }}">Цифровой рудник</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-mine-to-mill.index') }}">Mine to mill</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-sana-safety.index') }}">Sana safety</a>
            </div>
        </div>
        <div class="admin-menu_item">
            <a class="admin-menu_item_link" href="#">Устойчивое развитие</a>
            <div class="admin-menu_item_dropdown">
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-safety.index') }}">Безопасность</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-ecology.index') }}">Экология</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-local-communities.index') }}">Местные сообщества</a>
            </div>
        </div>
        <div class="admin-menu_item">
            <a class="admin-menu_item_link" href="#"> Карьера</a>
            <div class="admin-menu_item_dropdown">
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-vacancies.index') }}">Вакансии</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-education.index') }}">Программы обучения</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-newspaper.index') }}">Корпоративная газета</a>
            <a class="admin-menu_item_dropdown_link" href="{{route('admin-gallery.index')}}">Фотогалерея</a>
                <a class="admin-menu_item_dropdown_link" href="{{ route('admin-coaches.index') }}">Команда тренеров</a>
            </div>
        </div>

        <div class="admin-menu_item"><a class="admin-menu_item_link" href="{{ route('admin-supplier-form.index') }}"> Поставщикам. Анкета</a></div>
        <div class="admin-menu_item"><a class="admin-menu_item_link" href="{{route('admin-glossary.index')}}"> Глоссарий</a></div>
    </div>

    <div class="container mt-3">
        @include('errors.merror')


        @yield('content')

    </div>


    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('js/core/js.cookie.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-vide/jquery.vide.min.js') }}"></script>
    <script src="{{ asset('js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>



    <script>
        jQuery(function () {
            App.initHelpers('appear');

        });
    </script>
    <script>
        jQuery(function () {
            App.initHelpers('summernote');
        });
</script>
</body>
</html>
