@extends('layouts.main')


@section('content')

    @isset($digitalMine)
        @if (count($digitalMine) == 0)
            <div class="container text-xl-center admin-text">
                Здесь Вы можете добавить описание для страницы "Программа 'Цифровой рудник' ".
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-digital-mine.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-12" for="img_url_1">Добавьте фото-превью для видео №1.</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url_1" name="img_url_1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="video_url_1">Добавьте видео №1. Для корректного отображения браузерами, формат видео должен быть 'mp4'.</label>
                            <div class="col-sm-12">
                                <input type="file" id="video_url_1" name="video_url_1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="img_url_2">Добавьте фото-превью для видео №2.</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url_2" name="img_url_2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="video_url_2">Добавьте видео №2. Для корректного отображения браузерами, формат видео должен быть 'mp4'.</label>
                            <div class="col-sm-12">
                                <input type="file" id="video_url_2" name="video_url_2">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_kz" class="js-summernote"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_ru" class="js-summernote"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на английском языке</h3>
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
                Здесь Вы можете отредактировать описание для страницы "Программа 'Цифровой рудник' ".
            </div>

            <div class="block admin-news-img">
                <div class="block"><h3 class="block-title">Уже загруженное фото-превью для видео №1</h3></div>
                <div><img src="/storage/{{$digitalMine[0]->img_url_1}}"></div>
            </div>
            <div class="block admin-news-img flex-column">
                <div class="block"><h3 class="block-title">Уже загруженное видео №1.</h3></div>
                <div>
                    <video class="video" controls="" id="myVideo2">
                        <source src="/storage/{{$digitalMine[0]->video_url_1}}" type="video/mp4">
                        Your browser doesn't support HTML5 video tag.
                    </video>
                </div>
            </div>
            <div class="block admin-news-img">
                <div class="block"><h3 class="block-title">Уже загруженное фото-превью для видео №2</h3></div>
                <div><img src="/storage/{{$digitalMine[0]->img_url_2}}"></div>
            </div>
            <div class="block admin-news-img">
                <div class="block"><h3 class="block-title">Уже загруженное видео №2</h3></div>
                <div>
                    <video class="video" controls="" id="myVideo2">
                        <source src="/storage/{{$digitalMine[0]->video_url_2}}" type="video/mp4">
                        Your browser doesn't support HTML5 video tag.
                    </video>
                </div>
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-digital-mine.update', $digitalMine[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label class="col-sm-12" for="img_url_1">Добавьте новое фото-превью для видео №1 или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url_1" name="img_url_1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="video_url_1">Добавьте новое видео №1 или оставьте это поле пустым.  Для корректного отображения браузерами, формат видео должен быть 'mp4'.</label>
                            <div class="col-sm-12">
                                <input type="file" id="video_url_1" name="video_url_1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="img_url_2">Добавьте новое фото-превью для видео №2 или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url_2" name="img_url_2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="video_url_2">Добавьте новое видео №2 или оставьте это поле пустым. Для корректного отображения браузерами, формат видео должен быть 'mp4'.</label>
                            <div class="col-sm-12">
                                <input type="file" id="video_url_2" name="video_url_2">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_kz" class="js-summernote">{{$digitalMine[0]->text_kz}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_ru" class="js-summernote">{{$digitalMine[0]->text_ru}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_en" class="js-summernote">{{$digitalMine[0]->text_en}}</textarea>
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
