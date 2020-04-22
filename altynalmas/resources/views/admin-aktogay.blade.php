@extends('layouts.main')


@section('content')

    @isset($aktogay)
        @if (count($aktogay) == 0)
            <div class="container text-xl-center admin-text">
                Здесь Вы можете добавить информацию для страницы "Актогай".
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-aktogay.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-12" for="img_url">Добавьте фотографию схемы работы</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url" name="img_url">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="title_kz">Заголовок на казахском языке</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="title_kz" name="title_kz" placeholder="">
                            </div>
                        </div>
                    <div class="block">
                            <div class="block">
                                <h3 class="block-title">Текст на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_kz" class="js-summernote"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="title_ru">Заголовок на русском языке</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="title_ru" name="title_ru" placeholder="">
                            </div>
                        </div>
                    <div class="block">
                            <div class="block">
                                <h3 class="block-title">Текст на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_ru" class="js-summernote"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="title_en">Заголовок на английском языке</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="title_en" name="title_en" placeholder="">
                            </div>
                        </div>
                    <div class="block">
                            <div class="block">
                                <h3 class="block-title">Текст на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_en" class="js-summernote"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-sm btn-success" type="submit">Добавить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="container text-xl-center admin-text">
                Здесь Вы можете отредактировать информацию для страницы "Актогай".
            </div>

            <div class="block admin-news-img">
                <img src="/storage/{{$aktogay[0]->img_url}}">
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-aktogay.update', $aktogay[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label class="col-sm-12" for="img_url">Добавьте новую фотографию схемы работы или оставьте это поле пустым</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url" name="img_url">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="title_kz">Заголовок на казахском языке</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="title_kz" name="title_kz" value="{{$aktogay[0]->title_kz}}">
                            </div>
                        </div>
                    <div class="block">
                            <div class="block">
                                <h3 class="block-title">Текст на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_kz" class="js-summernote">{{$aktogay[0]->text_kz}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="title_ru">Заголовок на русском языке</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="title_ru" name="title_ru" value="{{$aktogay[0]->title_ru}}">
                            </div>
                        </div>
                    <div class="block">
                            <div class="block">
                                <h3 class="block-title">Текст на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_ru" class="js-summernote">{{$aktogay[0]->text_ru}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="title_en">Заголовок на английском языке</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="title_en" name="title_en" value="{{$aktogay[0]->title_en}}">
                            </div>
                        </div>
                    <div class="block">
                            <div class="block">
                                <h3 class="block-title">Текст на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_en" class="js-summernote">{{$aktogay[0]->text_en}}</textarea>
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
        @endif
    @endisset

@endsection
