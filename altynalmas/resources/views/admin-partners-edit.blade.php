@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Редактирование новости.
    </div>

    <div class="block admin-news-img">
        <img src="/storage/{{$partner->img}}">
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-partners.update', $partner->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label class="col-sm-12" for="img">Выберите новую фотографию, если необхоимо сменить фотографию. Если менять фотографию не требуется, то оставьте это поле пустым.</label>
                    <div class="col-sm-12">
                        <input type="file" id="img" name="img">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_en">Измените название, если требуется</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_en" name="title_en" value="{{ $partner->title_en }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="url">Измените ссылку на сайт компании партнера, если требуется</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="url" name="url" value="{{ $partner->url }}">
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
