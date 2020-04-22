<?php

namespace App\Http\Controllers;

use App\MineToMill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class MineToMillController extends Controller
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
        $mineToMill = MineToMill::all();
        return view('admin-mine-to-mill', compact('mineToMill'));
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
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $mineToMill = new MineToMill;

        $mineToMill->text_kz=$request->text_kz;
        $mineToMill->text_ru=$request->text_ru;
        $mineToMill->text_en=$request->text_en;

        $mineToMill->save();

        Session::flash('success','Описание успешно добавлено.');
        return redirect()->route('admin-mine-to-mill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MineToMill  $mineToMill
     * @return \Illuminate\Http\Response
     */
    public function show(MineToMill $mineToMill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MineToMill  $mineToMill
     * @return \Illuminate\Http\Response
     */
    public function edit(MineToMill $mineToMill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MineToMill  $mineToMill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mineToMill = MineToMill::find($id);

        // var_dump($request); die;

        $this->validate($request,[
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $mineToMill->text_kz=$request->text_kz;
        $mineToMill->text_ru=$request->text_ru;
        $mineToMill->text_en=$request->text_en;

        $mineToMill->save();

        Session::flash('success','Описание успешно отредактировано.');
        return redirect()->route('admin-mine-to-mill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MineToMill  $mineToMill
     * @return \Illuminate\Http\Response
     */
    public function destroy(MineToMill $mineToMill)
    {
        //
    }
}
