@extends('layouts.main')


@section('content')

    @isset($education)
        @if (count($education) == 0)
            <div class="container text-xl-center admin-text">
                Здесь Вы можете добавить описание для блоков "Обязательное обучение", "Повышение квалификации", "Академическое обучение" на странице "Программы обучения".
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-education.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-12" for="compulsory_ed_img">Добавьте фото для блока "Обязательное обучение".</label>
                            <div class="col-sm-12">
                                <input type="file" id="compulsory_ed_img" name="compulsory_ed_img">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Обязательное обучение" на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="compulsory_ed_text_kz" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Обязательное обучение" на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="compulsory_ed_text_ru" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Обязательное обучение" на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="compulsory_ed_text_en" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="advanced_ed_img">Добавьте фото для блока "Повышение квалификации".</label>
                            <div class="col-sm-12">
                                <input type="file" id="advanced_ed_img" name="advanced_ed_img">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Повышение квалификации" на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="advanced_ed_text_kz" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Повышение квалификации" на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="advanced_ed_text_ru" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Повышение квалификации" на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="advanced_ed_text_en" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="special_ed_img">Добавьте фото для блока "Академическое обучение".</label>
                            <div class="col-sm-12">
                                <input type="file" id="special_ed_img" name="special_ed_img">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Академическое обучение" на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="special_ed_text_kz" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Академическое обучение" на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="special_ed_text_ru" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание для блока "Академическое обучение" на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="special_ed_text_en" class="col-sm-12"></textarea>
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
                Здесь Вы можете отредактировать описание для страницы "Программы обучения".
            </div>


            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-education.update', $education[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="block admin-news-img">
                            <div class="block"><h3 class="block-title">Уже загруженное фото для блока "Обязательное обучение".</h3></div>
                            <div><img src="/storage/{{$education[0]->compulsory_ed_img}}"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="compulsory_ed_img">Добавьте новое фото для блока "Обязательное обучение" или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="compulsory_ed_img" name="compulsory_ed_img">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Обязательное обучение" на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="compulsory_ed_text_kz" class="col-sm-12">{{$education[0]->compulsory_ed_text_kz}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Обязательное обучение" на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="compulsory_ed_text_ru" class="col-sm-12">{{$education[0]->compulsory_ed_text_ru}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Обязательное обучение" на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="compulsory_ed_text_en" class="col-sm-12">{{$education[0]->compulsory_ed_text_en}}</textarea>
                            </div>
                        </div>

                        <div class="block admin-news-img">
                            <div class="block"><h3 class="block-title">Уже загруженное фото для блока "Повышение квалификации".</h3></div>
                            <div><img src="/storage/{{$education[0]->advanced_ed_img}}"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="advanced_ed_img">Добавьте новое фото для блока "Повышение квалификации" или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="advanced_ed_img" name="advanced_ed_img">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Повышение квалификации" на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="advanced_ed_text_kz" class="col-sm-12">{{$education[0]->advanced_ed_text_kz}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Повышение квалификации" на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="advanced_ed_text_ru" class="col-sm-12">{{$education[0]->advanced_ed_text_ru}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Повышение квалификации" на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="advanced_ed_text_en" class="col-sm-12">{{$education[0]->advanced_ed_text_en}}</textarea>
                            </div>
                        </div>

                        <div class="block admin-news-img">
                            <div class="block"><h3 class="block-title">Уже загруженное фото для блока "Академическое обучение".</h3></div>
                            <div><img src="/storage/{{$education[0]->special_ed_img}}"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12" for="special_ed_img">Добавьте новое фото для блока "Академическое обучение" или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="special_ed_img" name="special_ed_img">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Академическое обучение" на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="special_ed_text_kz" class="col-sm-12">{{$education[0]->special_ed_text_kz}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Академическое обучение" на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="special_ed_text_ru" class="col-sm-12">{{$education[0]->special_ed_text_ru}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Отредактируйте описание для блока "Академическое обучение" на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="special_ed_text_en" class="col-sm-12">{{$education[0]->special_ed_text_en}}</textarea>
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
