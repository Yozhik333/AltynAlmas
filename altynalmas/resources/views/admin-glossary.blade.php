@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить слово и его значение для страницы "Глоссарий", а так же выбрать, будет ли информация отображаться на сайте.
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-glossary.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="letter_kz">Буква, с которой начинается слово на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="letter_kz" name="letter_kz">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="word_kz">Слово на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="word_kz" name="word_kz">
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Значение на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="col-sm-12"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="letter_ru">Буква, с которой начинается слово на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="letter_ru" name="letter_ru">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="word_ru">Слово на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="word_ru" name="word_ru">
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Значение на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="col-sm-12"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="letter_en">Буква, с которой начинается слово на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="letter_en" name="letter_en">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12" for="word_en">Слово на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="word_en" name="word_en">
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Значение на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_en" class="col-sm-12"></textarea>
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
                        <button class="btn btn-sm btn-success" type="submit">Загрузить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @isset($glossary)
        @if (count($glossary) == 0)
            <div class="container text-xl-center admin-text">
                Вы пока не добавили никакой информации
            </div>
        @else
            <div class="container text-xl-center admin-text">
                Уже добавленная информация
            </div>

            <table class="table table-striped mb-5">
                <tbody>
                    <tr>
                        <td>
                            <b>Слово</b>
                        </td>
                        <td>
                            <b>Отображение на сайте</b>
                        </td>
                        <td>
                            <b>Редактирование информации</b>
                        </td>
                        <td>
                            <b>Удаление информации</b>
                        </td>
                    </tr>
                    @foreach($glossary as $word)
                        <tr>
                            <td>
                                {{ $word->word_ru }}
                            </td>
                            <td>
                                @if ($word->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-glossary.edit', $word->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-glossary.destroy', $word->id )}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger" type="submit">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endisset

@endsection
