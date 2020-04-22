<?php

namespace App\Http\Controllers;

use App\Ecology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EcologyController extends Controller
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
        $ecology = Ecology::all()->reverse();
        return view('admin-ecology', compact('ecology'));
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

        $ecology = new Ecology;
        $ecology->title_kz=$request->title_kz;
        $ecology->title_ru=$request->title_ru;
        $ecology->title_en=$request->title_en;
        $ecology->text_kz=$request->text_kz;
        $ecology->text_ru=$request->text_ru;
        $ecology->text_en=$request->text_en;
        $ecology->is_active=$request->is_active;

        $ecology->save();

        Session::flash('success','Информация успешно добавлена.');
        return redirect()->route('admin-ecology.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ecology  $ecology
     * @return \Illuminate\Http\Response
     */
    public function show(Ecology $ecology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ecology  $ecology
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ecology = Ecology::find($id);
        return view('admin-ecology-edit', compact('ecology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ecology  $ecology
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


        $ecology = Ecology::find($id);
        $ecology->title_kz=$request->title_kz;
        $ecology->title_ru=$request->title_ru;
        $ecology->title_en=$request->title_en;
        $ecology->text_kz=$request->text_kz;
        $ecology->text_ru=$request->text_ru;
        $ecology->text_en=$request->text_en;
        $ecology->is_active=$request->is_active;

        $ecology->save();

        Session::flash('success','Информация успешно отредактирована.');
        return redirect()->route('admin-ecology.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ecology  $ecology
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteEcology = Ecology::find($id);
        $deleteEcology->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-ecology.index');
    }
}
