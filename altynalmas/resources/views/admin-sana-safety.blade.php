@extends('layouts.main')


@section('content')

    @isset($sanaSafety)
        @if (count($sanaSafety) == 0)
            <div class="container text-xl-center admin-text">
                Здесь Вы можете добавить описание для страницы "Sana Safety".
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-sana-safety.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-12" for="img_url">Добавьте фото.</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url" name="img_url">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_kz" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_ru" class="col-sm-12"></textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_en" class="col-sm-12"></textarea>
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
                Здесь Вы можете отредактировать описание для страницы "Sana Safety".
            </div>

            <div class="block admin-news-img">
                <div><img src="/storage/{{$sanaSafety[0]->img_url}}"></div>
            </div>


            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-sana-safety.update', $sanaSafety[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label class="col-sm-12" for="img_url">Добавьте новое фото или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="img_url" name="img_url">
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_kz" class="col-sm-12">{{$sanaSafety[0]->text_kz}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_ru" class="col-sm-12">{{$sanaSafety[0]->text_ru}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_en" class="col-sm-12">{{$sanaSafety[0]->text_en}}</textarea>
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
