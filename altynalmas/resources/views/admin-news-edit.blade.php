@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Редактирование новости.
    </div>

    <div class="block admin-news-img">
        <img src="/storage/{{$news->img_url}}">
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-news.update', $news->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label class="col-sm-12" for="img_url">Выберите новую фотографию для новости, если необхоимо сменить фотографию. Если менять фотографию не требуется, то оставьте это поле пустым.</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_url" name="img_url">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="date">Введите дату новости</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="date" name="date" value="{{ $news->date }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_kz">Заголовок для на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_kz" name="title_kz" value="{{ $news->title_kz }}">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст новости на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="col-sm-12">{{ $news->text_kz }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_ru">Заголовок для на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_ru" name="title_ru" value="{{ $news->title_ru }}">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст новости на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="col-sm-12">{{ $news->text_ru }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_en">Заголовок для на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_en" name="title_en" value="{{ $news->title_en }}">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст новости на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_en" class="col-sm-12">{{ $news->text_en }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="show_on_main">Показывать на главной странице?</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="show_on_main" name="show_on_main" size="1">
                            <option value="1">Показывать</option>
                            <option value="0">Не показывать</option>
                        </select>
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
                        <button class="btn btn-sm btn-success" type="submit">Редактировать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
