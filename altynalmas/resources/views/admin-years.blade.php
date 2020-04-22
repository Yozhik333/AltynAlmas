@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить год и информацию к нему для страницы "История", а так же выбрать, будет ли информация отображаться на сайте.
    </div>

    <div class="block">
        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-years.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="year">Год (только цифры)</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="year" name="year" placeholder="2020">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="col-sm-12"></textarea>
                    </div>
                </div>

               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="col-sm-12"></textarea>
                    </div>
                </div>

               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на английском языке</h3>
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

    @isset($years)
        @if (count($years) == 0)
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
                            <b>Год</b>
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
                    @foreach($years as $year)
                        <tr>
                            <td>
                                {{ $year->year }}
                            </td>
                            <td>
                                @if ($year->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-years.edit', $year->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-years.destroy', $year->id )}}" method="post">
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
