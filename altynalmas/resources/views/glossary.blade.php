@extends('header-footer.header-footer')


@section('main-content')
    <section class="glossary">
        <div class="container-fluid">
        <ul class="nav nav-tabs glossary__header" id="myTab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#one" role="tab" aria-controls="profile" aria-selected="false"> A — Г </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="G-E" data-toggle="tab" href="#two" role="tab" aria-controls="profile" aria-selected="false"> Д — Ж </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#three" role="tab" aria-controls="home" aria-selected="true"> З — К </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="km" data-toggle="tab" href="#four" role="tab" aria-controls="home" aria-selected="true"> Л — О </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pn" data-toggle="tab" href="#five" role="tab" aria-controls="home" aria-selected="true"> П — Т </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="fc" data-toggle="tab" href="#six" role="tab" aria-controls="home" aria-selected="true"> У — Ц </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="csh" data-toggle="tab" href="#seven" role="tab" aria-controls="home" aria-selected="true"> Ч — Щ </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="y-ya" data-toggle="tab" href="#eight" role="tab" aria-controls="home" aria-selected="true"> Ы — Я </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade  active show" id="one" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> А </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'А' || $word->letter_ru == 'а' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Б </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Б' || $word->letter_ru == 'б' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> В </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'В' || $word->letter_ru == 'в' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Г </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Г' || $word->letter_ru == 'г' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Д </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Д' || $word->letter_ru == 'д' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Е </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Е' || $word->letter_ru == 'е' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ё </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ё' || $word->letter_ru == 'ё' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ж </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ж' || $word->letter_ru == 'ж' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> З </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'З' || $word->letter_ru == 'з' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> И </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'И' || $word->letter_ru == 'и' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Й </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Й' || $word->letter_ru == 'й' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> К </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'К' || $word->letter_ru == 'к' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Л </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Л' || $word->letter_ru == 'л' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> М </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'М' || $word->letter_ru == 'м' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Н </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Н' || $word->letter_ru == 'н' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> О </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'О' || $word->letter_ru == 'о' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> П </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'П' || $word->letter_ru == 'п' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Р </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Р' || $word->letter_ru == 'р' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> С </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'С' || $word->letter_ru == 'с' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Т </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Т' || $word->letter_ru == 'т' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="six" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> У </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'У' || $word->letter_ru == 'у' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ф </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ф' || $word->letter_ru == 'ф' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Х </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Х' || $word->letter_ru == 'х' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ц </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ц' || $word->letter_ru == 'ц' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="seven" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ч </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ч' || $word->letter_ru == 'ч' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ш </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ш' || $word->letter_ru == 'ш' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Щ </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Щ' || $word->letter_ru == 'щ' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="eight" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex">
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ы </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ы' || $word->letter_ru == 'ы' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Э </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Э' || $word->letter_ru == 'э' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Ю </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Ю' || $word->letter_ru == 'ю' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                    <div class="glossary__item">
                        <div class="glossary__item-header"> Я </div>
                        @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_ru == 'Я' || $word->letter_ru == 'я' )
                                    <div class="glossary__item-header-title"> {{$word->word_ru}} </div>
                                    <div class="glossary__item-description"> {{$word->text_ru}} </div>
                                    @endif
                                @endif
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
