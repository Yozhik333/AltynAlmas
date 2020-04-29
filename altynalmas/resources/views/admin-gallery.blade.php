@extends('layouts.main')

@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить информацию для страницы "Галерея", а так же выбрать, будет ли информация отображаться на сайте.
    </div>
    <!-- <div class="container text-xl-center admin-text">
        Функционал будет добавлен чуть позже
    </div> -->

    <div class="block">
        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf             
                <div class="form-group">
                    <label class="col-sm-12" for="category">Выберите категорию</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="category" name="category_id" size="1">
                            @foreach ($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->name_ru}}</option>
                            @endforeach
                        </select>
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

                <div class="block">
                    <div class="block">
                        <h3 class="block-title">Дата</h3>
                    </div>
                    <div class="block">
                        <input type="date" name="date">
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

                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-sm btn-success" type="submit">Загрузить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @isset($gallery)
        @if (count($gallery) == 0)
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
                            <b>Заголовок</b>
                        </td>
                        <td>
                            <b>Изображение</b>
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
                    @foreach($gallery as $gall)
                        <tr>
                            <td>
                                {{ $gall->text_ru }}
                            </td>
                            <td>
                                <div class = "admin-img-in-table"><img src="/storage/{{$gall->images}}"></div>
                            </td>
                            <td>
                                @if ($gall->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-gallery.edit', $gall->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-gallery.destroy', $gall->id )}}" method="post">
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
