@extends('layouts.main')


@section('content')

    <div class="container text-xl-center admin-text">
        Здесь Вы можете загрузить новые файлы анкеты для поставщиков.
    </div>


    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-newspaper.update', $newspaper->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="block admin-news-img">
                    <div><img src="/storage/{{$newspaper->img_kz}}"></div>
                    <div><a href="/storage/{{$newspaper->file_kz}}">Скачать и просмотреть корпоративную газету на казахском языке.</a></div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="img_kz">Добавьте новое фото газеты на казахском языке или оставьте это поле пустым</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_kz" name="img_kz">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_kz">Добавьте новый файл газеты на казахском языке или оставьте это поле пустым</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_kz" name="file_kz">
                    </div>
                </div>

                <div class="block admin-news-img">
                    <div><img src="/storage/{{$newspaper->img_kz}}"></div>
                    <div><a href="/storage/{{$newspaper->file_ru}}">Скачать и просмотреть корпоративную газету на русском языке.</a></div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="img_ru">Добавьте новое фото газеты на русском языке или оставьте это поле пустым</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_ru" name="img_ru">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_ru">Добавьте новый файл газеты на русском языке или оставьте это поле пустым</label>
                    <div class="col-sm-12">
                        <input type="file" id="file_ru" name="file_ru">
                    </div>
                </div>

                <div class="block admin-news-img">
                    <div><img src="/storage/{{$newspaper->img_kz}}"></div>
                    <div><a href="/storage/{{$newspaper->file_en}}">Скачать и просмотреть корпоративную газету на английском языке.</a></div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="img_en">Добавьте новое фото газеты на английском языке или оставьте это поле пустым</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_en" name="img_en">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="file_en">Добавьте новый файл газеты на английском языке или оставьте это поле пустым</label>
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
                        <button class="btn btn-sm btn-success" type="submit">Отредактировать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
