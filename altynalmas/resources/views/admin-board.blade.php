@extends('layouts.main')


@section('content')
    <div class="container text-xl-center admin-text">
        Здесь Вы можете добавить, изменить или удалить информацию для блока "Правление" на странице "Руководство компании".
    </div>

    <div class="block">

        <div class="block-content block-content-narrow">
            <form class="form-horizontal" action="{{ route('admin-board.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="col-sm-12" for="img_url">Выберите фотографию</label>
                    <div class="col-sm-12">
                        <input type="file" id="img_url" name="img_url">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_kz">Имя на казахском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_kz" name="name_kz">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Должность на казахском языке.</h3>
                    </div>
                    <div class="block">
                        <textarea name="position_kz" class="col-sm-12"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_ru">Имя на русском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_ru" name="name_ru">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Должность на русском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="position_ru" class="col-sm-12"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-12" for="name_en">Имя на английском языке</label>
                    <div class="col-sm-12">
                        <input class="form-control" type="text" id="name_en" name="name_en">
                    </div>
                </div>
               <div class="block">
                    <div class="block">
                        <h3 class="block-title">Должность на английском языке</h3>
                    </div>
                    <div class="block">
                        <textarea name="position_en" class="col-sm-12"></textarea>
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

    @isset($boards)
        @if (count($boards) == 0)
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
                            <b>Имя</b>
                        </td>
                        <td>
                            <b>Редактирование информации</b>
                        </td>
                        <td>
                            <b>Удаление информации</b>
                        </td>
                    </tr>
                    @foreach($boards as $board)
                        <tr>
                            <td>
                                {{ $board->name_ru }}
                            </td>
                            <td>
                                <a href="{{ route('admin-board.edit', $board->id )}}" class="btn btn-info"> Редактировать </a>
                            </td>
                            <td>
                                <form action="{{ route('admin-board.destroy', $board->id )}}" method="post">
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
