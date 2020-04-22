@extends('layouts.main')


@section('content')

    <div class="container text-xl-center admin-text">
        Здесь Вы можете загрузить фото газеты и файлы газеты на трех языках.
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <div class="block">
                <h3 class="block-title">
                    Примечание: для корректного хранения, название файла газеты должно быть уникальным для каждого языка и для каждой даты.
                    Рекомендуется в конце названия файла добавлять дату и краткое обозначение языка (напр.: kz, ru, en).
                </h3>
            </div>
            <form class="form-horizontal" action="{{ route('admin-newspaper.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="img_kz">Добавьте фото газеты для казахского языка</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_kz" name="img_kz">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_kz">Добавьте файл газеты для казахского языка</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_kz" name="file_kz">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="img_ru">Добавьте фото газеты для русского языка</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_ru" name="img_ru">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_ru">Добавьте файл газеты для русского языка</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_ru" name="file_ru">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="img_en">Добавьте фото газеты для английского языка</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_en" name="img_en">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_en">Добавьте файл газеты для английского языка</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_en" name="file_en">
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
        @isset($newspapers)
        @if (count($newspapers) == 0)
            <div class="container text-xl-center admin-text">
                Вы пока не добавили никакой информации.
            </div>
        @else
            <div class="container text-xl-center admin-text">
                Уже добавленная информация
            </div>

            <table class="table table-striped mb-5">
                <tbody>
                    <tr>
                        <td>
                            <b>Фото</b>
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
                    @foreach($newspapers as $newspaper)
                        <tr>
                            <td>
                                <div class = "admin-img-in-table"><img src="/storage/{{$newspaper->img_ru}}"></div>
                            </td>
                            <td>
                                @if ($newspaper->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-newspaper.edit', $newspaper->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-newspaper.destroy', $newspaper->id )}}" method="post">
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
