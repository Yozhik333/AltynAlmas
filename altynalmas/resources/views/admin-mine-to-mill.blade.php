@extends('layouts.main')


@section('content')

    @isset($mineToMill)
        @if (count($mineToMill) == 0)
            <div class="container text-xl-center admin-text">
                Здесь Вы можете добавить описание для страницы "Mine to Mill".
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-mine-to-mill.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

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
                Здесь Вы можете отредактировать описание для страницы "Mine to Mill".
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-mine-to-mill.update', $mineToMill[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на казахском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_kz" class="js-summernote">{{$mineToMill[0]->text_kz}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на русском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_ru" class="js-summernote">{{$mineToMill[0]->text_ru}}</textarea>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block">
                                <h3 class="block-title">Описание на английском языке</h3>
                            </div>
                            <div class="block">
                                <textarea name="text_en" class="js-summernote">{{$mineToMill[0]->text_en}}</textarea>
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
