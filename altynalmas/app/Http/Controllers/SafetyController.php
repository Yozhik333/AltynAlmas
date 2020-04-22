<?php

namespace App\Http\Controllers;

use App\Safety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SafetyController extends Controller

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
        $safety = Safety::all()->reverse();
        return view('admin-safety', compact('safety'));
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
        // var_dump($request); die;
        $this->validate($request,[
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);


        $safety = new Safety;
        $safety->title_kz=$request->title_kz;
        $safety->title_ru=$request->title_ru;
        $safety->title_en=$request->title_en;
        $safety->text_kz=$request->text_kz;
        $safety->text_ru=$request->text_ru;
        $safety->text_en=$request->text_en;
        $safety->is_active=$request->is_active;

        $safety->save();

        Session::flash('success','Информация успешно добавлена.');
        return redirect()->route('admin-safety.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Safety  $safety
     * @return \Illuminate\Http\Response
     */
    public function show(Safety $safety)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Safety  $safety
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $safety = Safety::find($id);
        return view('admin-safety-edit', compact('safety'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Safety  $safety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);


        $safety = Safety::find($id);
        $safety->title_kz=$request->title_kz;
        $safety->title_ru=$request->title_ru;
        $safety->title_en=$request->title_en;
        $safety->text_kz=$request->text_kz;
        $safety->text_ru=$request->text_ru;
        $safety->text_en=$request->text_en;
        $safety->is_active=$request->is_active;

        $safety->save();

        Session::flash('success','Информация успешно отредактирована.');
        return redirect()->route('admin-safety.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Safety  $safety
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteSafety = Safety::find($id);
        $deleteSafety->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-safety.index');
    }
}
