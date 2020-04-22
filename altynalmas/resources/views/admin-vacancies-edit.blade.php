@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете отредактировать информацию на странице "Актуальные вакансии".
    </div>


    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-vacancies.update', $vacancy->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}


                <div class="form-group">
                    <label class="col-sm-12" for="name_kz">Отредактируйте название вакансии на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_kz" name="name_kz" value="{{$vacancy->name_kz}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_ru">Отредактируйте название вакансии на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_ru" name="name_ru" value="{{$vacancy->name_ru}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_en">Отредактируйте название вакансии на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_en" name="name_en" value="{{$vacancy->name_en}}">
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте требования на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="requirements_kz" class="js-summernote">{{$vacancy->requirements_kz}}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте требования на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="requirements_ru" class="js-summernote">{{$vacancy->requirements_ru}}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте требования на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="requirements_en" class="js-summernote">{{$vacancy->requirements_en}}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте условия на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="conditions_kz" class="js-summernote">{{$vacancy->conditions_kz}}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте условия на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="conditions_ru" class="js-summernote">{{$vacancy->conditions_ru}}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте условия на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="conditions_en" class="js-summernote">{{$vacancy->conditions_en}}</textarea>
                    </div>
                </div>


                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте обязанности на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="duties_kz" class="js-summernote">{{$vacancy->duties_kz}}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте обязанности на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="duties_ru" class="js-summernote">{{$vacancy->duties_ru}}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Отредактируйте обязанности на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="duties_en" class="js-summernote">{{$vacancy->duties_en}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="hh_url">Отредактируйте ссылку на вакансию в hh.kz</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="hh_url" name="hh_url" value="{{$vacancy->hh_url}}">
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
                        <button class="btn btn-sm btn-success" type="submit">Отредактировать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
