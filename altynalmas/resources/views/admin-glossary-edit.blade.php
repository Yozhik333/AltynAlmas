@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Редактирование информации о слове.
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-glossary.update', $word->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label class="col-sm-12" for="letter_kz">Буква, с которой начинается слово на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="letter_kz" name="letter_kz" value="{{$word->letter_kz}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="word_kz">Слово на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="word_kz" name="word_kz" value="{{$word->word_kz}}">
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Значение на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="col-sm-12">{{$word->text_kz}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="letter_ru">Буква, с которой начинается слово на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="letter_ru" name="letter_ru" value="{{$word->letter_ru}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="word_ru">Слово на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="word_ru" name="word_ru" value="{{$word->word_ru}}">
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Значение на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="col-sm-12">{{$word->text_ru}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="letter_en">Буква, с которой начинается слово на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="letter_en" name="letter_en" value="{{$word->letter_en}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="word_en">Слово на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="word_en" name="word_en" value="{{$word->word_en}}">
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Значение на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_en" class="col-sm-12">{{$word->text_en}}</textarea>
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
