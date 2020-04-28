@extends('header-footer.header-footer')

@section('title')
  @if (app()->getLocale() == 'ru')
    Глоссарий
  @endif
  @if (app()->getLocale() == 'kz')
    Сүзгі
  @endif
  @if (app()->getLocale() == 'en')
    Glossary
  @endif
@endsection

@section('main-content')
    <section class="glossary">
        <div class="container-fluid">

            @if (app()->getLocale() == 'ru')
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
            @endif
            @if (app()->getLocale() == 'kz')
                <ul class="nav nav-tabs glossary__header" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#one" role="tab" aria-controls="profile" aria-selected="false"> A — Ғ </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="G-E" data-toggle="tab" href="#two" role="tab" aria-controls="profile" aria-selected="false"> Д — И </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#three" role="tab" aria-controls="home" aria-selected="true"> Й — М </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="km" data-toggle="tab" href="#four" role="tab" aria-controls="home" aria-selected="true"> Н - П </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="pn" data-toggle="tab" href="#five" role="tab" aria-controls="home" aria-selected="true"> Р — Ү </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="fc" data-toggle="tab" href="#six" role="tab" aria-controls="home" aria-selected="true"> Ұ — Ц </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="csh" data-toggle="tab" href="#seven" role="tab" aria-controls="home" aria-selected="true"> Ч — Ы </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="y-ya" data-toggle="tab" href="#eight" role="tab" aria-controls="home" aria-selected="true"> І — Я </a>
                    </li>
                </ul>
            @endif
            @if (app()->getLocale() == 'en')
                <ul class="nav nav-tabs glossary__header" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#one" role="tab" aria-controls="profile" aria-selected="false"> A — D </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="G-E" data-toggle="tab" href="#two" role="tab" aria-controls="profile" aria-selected="false"> E — H </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#three" role="tab" aria-controls="home" aria-selected="true"> I — L </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="km" data-toggle="tab" href="#four" role="tab" aria-controls="home" aria-selected="true"> M — P </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="pn" data-toggle="tab" href="#five" role="tab" aria-controls="home" aria-selected="true"> Q — T </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="fc" data-toggle="tab" href="#six" role="tab" aria-controls="home" aria-selected="true"> U — W </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="csh" data-toggle="tab" href="#seven" role="tab" aria-controls="home" aria-selected="true"> X — Z </a>
                    </li>
                </ul>
            @endif

            @if (app()->getLocale() == 'ru')
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
                            @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_ru == 'Е' || $word->letter_ru == 'е' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_ru == 'Ё' || $word->letter_ru == 'ё' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
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
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_ru == 'Й' || $word->letter_ru == 'й' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
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
                            @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_ru == 'Ч' || $word->letter_ru == 'ч' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
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
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_ru == 'Щ' || $word->letter_ru == 'щ' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
                        </div>
                    </div>
        
                    <div class="tab-pane fade" id="eight" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_ru == 'Ы' || $word->letter_ru == 'ы' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
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
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_ru == 'Ю' || $word->letter_ru == 'ю' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_ru == 'Я' || $word->letter_ru == 'я' )
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
                                            @endif
                                        @endif
                                        @break
                                    @endforeach
                                @endisset
                        </div>
                    </div>
                </div>

            @endif



            @if (app()->getLocale() == 'kz')

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade  active show" id="one" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            <div class="glossary__item">
                                <div class="glossary__item-header"> А </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'А' || $word->letter_kz == 'а' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                            @foreach ($glossary as $word)
                                @if ($word->is_active == 1)
                                    @if ($word->letter_kz == 'Ә' || $word->letter_kz == 'ә' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Ә </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Ә' || $word->letter_kz == 'ә' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Б </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Б' || $word->letter_kz == 'б' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'В' || $word->letter_kz == 'в' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> В </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'В' || $word->letter_kz == 'в' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Г </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Г' || $word->letter_kz == 'г' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Ғ' || $word->letter_kz == 'ғ' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Ғ </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Ғ' || $word->letter_kz == 'ғ' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                        </div>
                    </div>
                    <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Д </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Д' || $word->letter_kz == 'д' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Е' || $word->letter_kz == 'е' || $word->letter_kz == 'Ё' || $word->letter_kz == 'ё'  )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Е </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Е' || $word->letter_kz == 'е' || $word->letter_kz == 'Ё' || $word->letter_kz == 'ё'  )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Ж </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Ж' || $word->letter_kz == 'ж' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'З' || $word->letter_kz == 'з' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> З </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'З' || $word->letter_kz == 'з' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> И </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'И' || $word->letter_kz == 'и' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Й' || $word->letter_kz == 'й' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Й </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Й' || $word->letter_kz == 'й' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> К </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'К' || $word->letter_kz == 'к' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Қ </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Қ' || $word->letter_kz == 'қ' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Л' || $word->letter_kz == 'л' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Л </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Л' || $word->letter_kz == 'л' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> М </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'М' || $word->letter_kz == 'м' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Н' || $word->letter_kz == 'н' )                           
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Н </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Н' || $word->letter_kz == 'н' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Ң' || $word->letter_kz == 'ң' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Ң </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Ң' || $word->letter_kz == 'ң' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> О </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'О' || $word->letter_kz == 'о' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Ө </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Ө' || $word->letter_kz == 'ө' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> П </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'П' || $word->letter_kz == 'п' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
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
                                <div class="glossary__item-header"> Р </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Р' || $word->letter_kz == 'р' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
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
                                            @if ($word->letter_kz == 'С' || $word->letter_kz == 'с' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
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
                                            @if ($word->letter_kz == 'Т' || $word->letter_kz == 'т' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'У' || $word->letter_kz == 'у' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> У </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'У' || $word->letter_kz == 'у' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Ү </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Ү' || $word->letter_kz == 'ү' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
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
                                <div class="glossary__item-header"> Ұ </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Ұ' || $word->letter_kz == 'ұ' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
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
                                            @if ($word->letter_kz == 'Ф' || $word->letter_kz == 'ф' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Х' || $word->letter_kz == 'х' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Х </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Х' || $word->letter_kz == 'х' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Һ' || $word->letter_kz == 'һ' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Һ </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Һ' || $word->letter_kz == 'һ' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Ц </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Ц' || $word->letter_kz == 'ц' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
        
                    <div class="tab-pane fade" id="seven" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Ч' || $word->letter_kz == 'ч' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Ч </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Ч' || $word->letter_kz == 'ч' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Ш </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Ш' || $word->letter_kz == 'ш' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Щ' || $word->letter_kz == 'щ' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Щ </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Щ' || $word->letter_kz == 'щ' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> Ы </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'Ы' || $word->letter_kz == 'ы' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
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
                                <div class="glossary__item-header"> І </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_kz == 'І' || $word->letter_kz == 'і' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
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
                                            @if ($word->letter_kz == 'Э' || $word->letter_kz == 'э' )
                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Ю' || $word->letter_kz == 'ю' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Ю </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Ю' || $word->letter_kz == 'ю' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_kz == 'Я' || $word->letter_kz == 'я' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Я </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_kz == 'Я' || $word->letter_kz == 'я' )
                                                            <div class="glossary__item-header-title"> {{$word->word_kz}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_kz}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>            
            @endif



            @if (app()->getLocale() == 'en')

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade  active show" id="one" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            <div class="glossary__item">
                                <div class="glossary__item-header"> A </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'A' || $word->letter_en == 'a' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> B </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'B' || $word->letter_en == 'b' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> C </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'C' || $word->letter_en == 'c' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> D </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'D' || $word->letter_en == 'd' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
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
                                <div class="glossary__item-header"> E </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'E' || $word->letter_en == 'e' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> F </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'F' || $word->letter_en == 'f' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> G </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'G' || $word->letter_en == 'g' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> H </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'H' || $word->letter_en == 'h' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
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
                                <div class="glossary__item-header"> I </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'I' || $word->letter_en == 'i' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> J </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'J' || $word->letter_en == 'j' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> K </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'K' || $word->letter_en == 'k' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> L </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'L' || $word->letter_en == 'l' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
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
                                <div class="glossary__item-header"> M </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'M' || $word->letter_en == 'm' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> N </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'N' || $word->letter_en == 'n' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> O </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'O' || $word->letter_en == 'o' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> P </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'P' || $word->letter_en == 'p' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
        
                    <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex">
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_en == 'Q' || $word->letter_en == 'q' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Q </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_en == 'Q' || $word->letter_en == 'q' )
                                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            <div class="glossary__item">
                                <div class="glossary__item-header"> R </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'R' || $word->letter_en == 'r' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> S </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'S' || $word->letter_en == 's' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> T </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'T' || $word->letter_en == 'T' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
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
                                <div class="glossary__item-header"> U </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'U' || $word->letter_en == 'u' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> V </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'V' || $word->letter_en == 'v' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            <div class="glossary__item">
                                <div class="glossary__item-header"> W </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'W' || $word->letter_en == 'w' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
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
                                <div class="glossary__item-header"> X </div>
                                @isset($glossary)
                                    @foreach ($glossary as $word)
                                        @if ($word->is_active == 1)
                                            @if ($word->letter_en == 'X' || $word->letter_en == 'x' )
                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endisset
                            </div>
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_en == 'Y' || $word->letter_en == 'y' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Y </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_en == 'Y' || $word->letter_en == 'y' )
                                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                            @isset($glossary)
                                @foreach ($glossary as $word)
                                    @if ($word->is_active == 1)
                                        @if ($word->letter_en == 'Z' || $word->letter_en == 'z' )
                                            <div class="glossary__item">
                                                <div class="glossary__item-header"> Z </div>
                                                @isset($glossary)
                                                    @foreach ($glossary as $word)
                                                        @if ($word->is_active == 1)
                                                            @if ($word->letter_en == 'Z' || $word->letter_en == 'z' )
                                                            <div class="glossary__item-header-title"> {{$word->word_en}} </div>
                                                            <div class="glossary__item-description"> {{$word->text_en}} </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            </div>
                                        @endif
                                    @endif
                                    @break
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            
            @endif

        
        
        </div>
    </section>

@endsection
