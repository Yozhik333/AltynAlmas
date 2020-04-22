@extends('layouts.main')


@section('content')

    @isset($supplierForm)
        @if (count($supplierForm) == 0)
            <div class="container text-xl-center admin-text">
                Здесь Вы можете загрузить файлы анкеты для поставщиков на трех языках.
            </div>

            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-supplier-form.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-12" for="supplier_form_kz">Добавьте анкету на казахском языке</label>
                            <div class="col-sm-12">
                                <input type="file" id="supplier_form_kz" name="supplier_form_kz">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="supplier_form_ru">Добавьте анкету на русском языке</label>
                            <div class="col-sm-12">
                                <input type="file" id="supplier_form_ru" name="supplier_form_ru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="supplier_form_en">Добавьте анкету на английском языке</label>
                            <div class="col-sm-12">
                                <input type="file" id="supplier_form_en" name="supplier_form_en">
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
        @else
            <div class="container text-xl-center admin-text">
                Здесь Вы можете загрузить новые файлы анкеты для поставщиков.
            </div>

            <div class="block admin-news-img">
                <div><a href="/storage/{{$supplierForm[0]->supplier_form_kz}}">Скачать уже имеющуюся анкету на казахском языке.</a></div>
            </div>
            <div class="block admin-news-img">
                <div><a href="/storage/{{$supplierForm[0]->supplier_form_ru}}">Скачать уже имеющуюся анкету на русском языке.</a></div>
            </div>
            <div class="block admin-news-img">
                <div><a href="/storage/{{$supplierForm[0]->supplier_form_en}}">Скачать уже имеющуюся анкету на английском языке.</a></div>
            </div>


            <div class="block">

                <div class="block-content block-content-narrow">
                    <form class="form-horizontal" action="{{ route('admin-supplier-form.update', $supplierForm[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label class="col-sm-12" for="supplier_form_kz">Добавьте новую анкету на казахском языке или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="supplier_form_kz" name="supplier_form_kz">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="supplier_form_ru">Добавьте новую анкету на русском языке или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="supplier_form_ru" name="supplier_form_ru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="supplier_form_en">Добавьте новую анкету на английском языке или оставьте это поле пустым.</label>
                            <div class="col-sm-12">
                                <input type="file" id="supplier_form_en" name="supplier_form_en">
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
        @endif
    @endisset

@endsection
