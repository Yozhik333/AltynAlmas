@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить название на сайте и сам файл внутреннего документа, а так же выбрать, будет ли он представлен на сайте.
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-inside-docs.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="title_kz">Название внутреннего документа на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_kz" name="title_kz">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-sm-12" for="title_ru">Название внутреннего документа на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_ru" name="title_ru">
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-sm-12" for="title_en">Название внутреннего документа на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_en" name="title_en">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-12" for="file_kz">Выберите файл внутреннего документа на казахском языке (имена загружаемых файлов должны быть разными для каждого языка)</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_kz" name="file_kz">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_ru">Выберите файл внутреннего документа на русском языке (имена загружаемых файлов должны быть разными для каждого языка)</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_ru" name="file_ru">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_en">Выберите файл внутреннего документа на английском языке (имена загружаемых файлов должны быть разными для каждого языка)</label>
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

    @isset($insideDocs)
        @if (count($insideDocs) == 0)
            <div class="container text-xl-center admin-text">
                Вы пока не добавили ни одного внутреннего документа
            </div>
        @else
            <div class="container text-xl-center admin-text">
                Уже добавленные внутренние документы
            </div>

            <table class="table table-striped mb-5">
                <tbody>
                    <tr>
                        <td>
                            <b>Название внутреннего документа</b>
                        </td>
                        <td>
                            <b>Отображение на сайте</b>
                        </td>
                        <td>
                            <b>Загрузка нового(-ых) файла(-ов) внутреннего документа</b>
                        </td>
                        <td>
                            <b>Удаление файлов внутреннего документа</b>
                        </td>
                    </tr>
                    @foreach($insideDocs as $insideDoc)
                        <tr>
                            <td>
                                {{ $insideDoc->title_ru }}
                            </td>
                            <td>
                                @if ($insideDoc->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-inside-docs.edit', $insideDoc->id )}}" class="btn btn-info"> Загрузить </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-inside-docs.destroy', $insideDoc->id )}}" method="post">
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
