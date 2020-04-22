<?php

namespace App\Http\Controllers;

use App\Glossary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GlossaryController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glossary = Glossary::all();
        return view('admin-glossary', compact('glossary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'letter_kz'=>'required|string|max:1|min:1',
            'letter_ru'=>'required|string|max:1|min:1',
            'letter_en'=>'required|string|max:1|min:1',
            'word_kz'=>'required|string|max:191|min:1',
            'word_ru'=>'required|string|max:191|min:1',
            'word_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $word = new Glossary;
        $word->letter_kz=$request->letter_kz;
        $word->letter_ru=$request->letter_ru;
        $word->letter_en=$request->letter_en;
        $word->word_kz=$request->word_kz;
        $word->word_ru=$request->word_ru;
        $word->word_en=$request->word_en;
        $word->text_kz=$request->text_kz;
        $word->text_ru=$request->text_ru;
        $word->text_en=$request->text_en;
        $word->is_active=$request->is_active;

        $word->save();

        Session::flash('success','Информация о слове успешно добавлена.');
        return redirect()->route('admin-glossary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function show(Glossary $glossary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = Glossary::find($id);
        return view('admin-glossary-edit', compact('word'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $word = Glossary::find($id);

            $this->validate($request,[
                'letter_kz'=>'required|string|max:1|min:1',
                'letter_ru'=>'required|string|max:1|min:1',
                'letter_en'=>'required|string|max:1|min:1',
                'word_kz'=>'required|string|max:191|min:1',
                'word_ru'=>'required|string|max:191|min:1',
                'word_en'=>'required|string|max:191|min:1',
                'text_kz'=>'required|string|max:60000|min:1',
                'text_ru'=>'required|string|max:60000|min:1',
                'text_en'=>'required|string|max:60000|min:1',
            ]);

            $word->letter_kz=$request->letter_kz;
            $word->letter_ru=$request->letter_ru;
            $word->letter_en=$request->letter_en;
            $word->word_kz=$request->word_kz;
            $word->word_ru=$request->word_ru;
            $word->word_en=$request->word_en;
            $word->text_kz=$request->text_kz;
            $word->text_ru=$request->text_ru;
            $word->text_en=$request->text_en;
            $word->is_active=$request->is_active;

            $word->save();

            Session::flash('success','Информация о слове успешно отредактирована.');
            return redirect()->route('admin-glossary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Glossary  $glossary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $word = Glossary::find($id);

        $word->delete();

        Session::flash('success','Информация о слове удалена успешно.');
        return redirect()->route('admin-glossary.index');
    }
}
