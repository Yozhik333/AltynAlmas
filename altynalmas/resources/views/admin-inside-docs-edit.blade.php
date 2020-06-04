@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Загрузка нового(-ых) файла(-ов) внутреннего документа.
    </div>

    

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-inside-docs.update', $insideDoc->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="block admin-news-img">
                    <div><a href="/storage/{{$insideDoc->file_kz}}">Просмотреть и скачать уже имеющийся файл внутреннего документа на казахском языке.</a></div>
                </div>
                <div class="block admin-news-img">
                    <div><a href="/storage/{{$insideDoc->file_ru}}">Просмотреть и скачать уже имеющийся файл внутреннего документа на русском языке.</a></div>
                </div>
                <div class="block admin-news-img">
                    <div><a href="/storage/{{$insideDoc->file_en}}">Просмотреть и скачать уже имеющийся файл внутреннего документа на английском языке.</a></div>
                </div>


                <div class="form-group">
                    <label class="col-sm-12" for="title_kz">Название внутреннего документа на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_kz" name="title_kz" value="{{ $insideDoc->title_kz }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_ru">Название внутреннего документа на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_ru" name="title_ru" value="{{ $insideDoc->title_ru }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_en">Название внутреннего документа на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_en" name="title_en" value="{{ $insideDoc->title_en }}">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-12" for="file_kz">Выберите новый файл внутреннего документа на казахском языке или оставьте это поле пустым. (имена загружаемых файлов должны быть разными для каждого языка)</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_kz" name="file_kz">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_ru">Выберите новый файл внутреннего документа на русском языке или оставьте это поле пустым. (имена загружаемых файлов должны быть разными для каждого языка)</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_ru" name="file_ru">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_en">Выберите новый файл внутреннего документа на английском языке или оставьте это поле пустым. (имена загружаемых файлов должны быть разными для каждого языка)</label>
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


@endsection
