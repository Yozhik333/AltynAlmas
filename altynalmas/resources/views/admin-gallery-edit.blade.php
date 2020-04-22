@extends('layouts.main')

@section('content')

    <!-- <div class="container text-xl-center admin-text">
        Функционал будет добавлен чуть позже
    </div> -->

    <div class="container text-xl-center admin-text">
        Редактирование информации
    </div>

    <div class="block">
        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-gallery.update', $gallery->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="col-sm-12" for="category">Выберите категорию</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="category" name="category_id" size="1">
                            @foreach ($category as $cat)
                                @if ($cat->id == $gallery->category_id)
                                    <option value="{{$cat->id}}" selected>{{$cat->name_ru}}</option>
                                @else
                                    <option value="{{$cat->id}}">{{$cat->name_ru}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>   
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на казахском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_kz" class="col-sm-12">{{$gallery->text_kz}}</textarea>
                    </div>
                </div>                
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_ru" class="col-sm-12">{{$gallery->text_ru}}</textarea>
                    </div>
                </div>                
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Текст на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="text_en" class="col-sm-12">{{$gallery->text_en}}</textarea>
                    </div>
                </div>
                
                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Дата</h3>
                    </div>
                    <div class="block">
                        <input type="date" name="date" value="{{$gallery->date}}">
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
                    <label class="col-sm-12" for="images">Добавьте фотографию</label>
                    <div class="col-sm-12">
                        <input type="file" id="images" name="image">
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
