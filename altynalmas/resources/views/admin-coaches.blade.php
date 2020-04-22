@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить информацию о тренере, а так же выбрать, будет ли она отображаться на сайте.
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-coaches.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="img_url">Доавьте фотографию тренера</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_url" name="img_url">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_kz">Имя Фамилия тренера на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_kz" name="name_kz">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="name_ru">Имя Фамилия тренера на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_ru" name="name_ru">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="name_en">Имя Фамилия тренера на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_en" name="name_en">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="position_kz">Должность на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="position_kz" name="position_kz">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="position_ru">Должность на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="position_ru" name="position_ru">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="position_en">Должность на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="position_en" name="position_en">
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Основная информация на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="js-summernote"></textarea>
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Основная информация на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="js-summernote"></textarea>
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Основная информация на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_en" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="is_active">Показывать на сайте?</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="is_active" name="is_active" size="1">
                            <option value="1">Показывать</option>
                            <option value="0">Не показывать</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-success" type="submit">Загрузить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @isset($coaches)
        @if (count($coaches) == 0)
            <div class="container text-xl-center admin-text">
                Вы пока не добавили никакой информации
            </div>
        @else
            <div class="container text-xl-center admin-text">
                Уже добавленная информация
            </div>

            <table class="table table-striped mb-5">
                <tbody>
                    <tr>
                        <td>
                            <b>Фамилия Имя тренера</b>
                        </td>
                        <td>
                            <b>Отображение на сайте</b>
                        </td>
                        <td>
                            <b>Редактирование информации</b>
                        </td>
                        <td>
                            <b>Удаление информации</b>
                        </td>
                    </tr>
                    @foreach($coaches as $coach)
                        <tr>
                            <td>
                                {{ $coach->name_ru }}
                            </td>
                            <td>
                                @if ($coach->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-coaches.edit', $coach->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-coaches.destroy', $coach->id )}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger" type="submit">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endisset

@endsection
