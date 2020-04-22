@extends('layouts.main')

@section('content')

    <div class="container text-xl-center admin-text">
        Редактирование информации
    </div>

    <div class="block">
        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-years.update', $year->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="col-sm-12" for="year">Год (только цифры)</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="year" name="year" placeholder="2020" value="{{ $year->year }}">
                    </div>
                </div>
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="col-sm-12">{{ $year->text_kz }}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="col-sm-12">{{ $year->text_ru }}</textarea>
                    </div>
                </div>

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_en" class="col-sm-12">{{ $year->text_en }}</textarea>
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
                <div class="form-group mt-1">
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-success" type="submit">Редактировать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
