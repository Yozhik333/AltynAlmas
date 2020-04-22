@extends('layouts.main')


@section('content')


    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить новую вакансию или отредактировать информацию для страницы "Актуальные вакансии".
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-vacancies.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="name_kz">Введите название вакансии на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_kz" name="name_kz">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_ru">Введите название вакансии на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_ru" name="name_ru">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_en">Введите название вакансии на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_en" name="name_en">
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Требования на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="requirements_kz" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Требования на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="requirements_ru" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Требования на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="requirements_en" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Условия на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="conditions_kz" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Условия на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="conditions_ru" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Условия на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="conditions_en" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Обязанности на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="duties_kz" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Обязанности на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="duties_ru" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Обязанности на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="duties_en" class="js-summernote"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="hh_url">Введите ссылку на вакансию в hh.kz</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="hh_url" name="hh_url">
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
                        <button class="btn btn-sm btn-success" type="submit">Добавить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @isset($vacancies)
        @if (count($vacancies) == 0)
            <div class="container text-xl-center admin-text">
                Вы пока не добавили ни одной вакансии
            </div>
        @else
            <div class="container text-xl-center admin-text">
                Уже добавленные вакансии
            </div>

            <table class="table table-striped mb-5">
                <tbody>
                    <tr>
                        <td>
                            <b>Название вакансии</b>
                        </td>
                        <td>
                            <b>Отображение на сайте</b>
                        </td>
                        <td>
                            <b>Редактирование вакансии</b>
                        </td>
                        <td>
                            <b>Удаление вакансии</b>
                        </td>
                    </tr>
                    @foreach($vacancies as $vacancy)
                        <tr>
                            <td>
                                {{ $vacancy->name_ru }}
                            </td>
                            <td>
                                @if ($vacancy->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-vacancies.edit', $vacancy->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-vacancies.destroy', $vacancy->id )}}" method="post">
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
