@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить информацию о партнере, а так же выбрать, будет ли она отображаться на главной странице и будет ли она отображаться на сайте.
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-partners.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="img">Выберите фотографию</label>
                    <div class="col-sm-12">
                        <input type="file" id="img" name="img">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="title_en">Введите название</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="title_en" name="title_en">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="url">Ссылка на сайт компании партнера</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="url" name="url">
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

    @isset($partners)
        @if (count($partners) == 0)
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
                            <b>Партнёр</b>
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
                    @foreach($partners as $partner)
                        <tr>
                            <td>
                                {{ $partner->title_en }}
                            </td>
                            <td>
                                @if ($partner->is_active == 1)
                                    Информация отображается на сайте
                                @else
                                    Информация не отображается на сайте
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin-partners.edit', $partner->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-partners.destroy', $partner->id )}}" method="post">
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
