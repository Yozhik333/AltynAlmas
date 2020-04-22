@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Редактирование карточки в блоке "Совет Директоров" на странице "Руководство компании".
    </div>

    <div class="block admin-news-img">
        <img src="/storage/{{$director->img_url}}">
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-board-of-directors.update', $director->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label class="col-sm-12" for="img_url">Выберите новую фотографию, если необхоимо сменить фотографию. Если менять фотографию не требуется, то оставьте это поле пустым.</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_url" name="img_url">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_kz">Имя на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_kz" name="name_kz" value="{{ $director->name_kz }}">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Должность на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="position_kz" class="col-sm-12">{{ $director->position_kz }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_ru">Имя на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_ru" name="name_ru" value="{{ $director->name_ru }}">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Должность на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="position_ru" class="col-sm-12">{{ $director->position_ru }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_en">Имя на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_en" name="name_en" value="{{ $director->name_en }}">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Должность на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="position_en" class="col-sm-12">{{ $director->position_en }}</textarea>
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
