<?php

namespace App\Http\Controllers;

use App\Newspaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Session;

class NewspaperController extends Controller
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
        $newspapers = Newspaper::all();
        return view('admin-newspaper', compact('newspapers'));
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
            'img_kz' => 'required|file|max:50000',
            'img_ru' => 'required|file|max:50000',
            'img_en' => 'required|file|max:50000',
            'file_kz' => 'required|file|max:50000',
            'file_ru' => 'required|file|max:50000',
            'file_en' => 'required|file|max:50000',
        ]);

        $img_kz = Storage::putFile('', $request->file('img_kz'));
        $file_kz_name = $request->file('file_kz')->getClientOriginalName();
        $file_kz = Storage::putFileAs('', $request->file('file_kz'), $file_kz_name);

        $img_ru = Storage::putFile('', $request->file('img_ru'));
        $file_ru_name = $request->file('file_ru')->getClientOriginalName();
        $file_ru = Storage::putFileAs('', $request->file('file_ru'), $file_ru_name);

        $img_en = Storage::putFile('', $request->file('img_en'));
        $file_en_name = $request->file('file_en')->getClientOriginalName();
        $file_en = Storage::putFileAs('', $request->file('file_en'), $file_en_name);

        $newspaper = new Newspaper;
        $newspaper->img_kz=$img_kz;
        $newspaper->file_kz=$file_kz;
        $newspaper->img_ru=$img_ru;
        $newspaper->file_ru=$file_ru;
        $newspaper->img_en=$img_en;
        $newspaper->file_en=$file_en;
        $newspaper->is_active=$request->is_active;

        $newspaper->save();

        Session::flash('success','Фото и файлы газеты успешно загружены.');
        return redirect()->route('admin-newspaper.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function show(Newspaper $newspaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newspaper = Newspaper::find($id);
        return view('admin-newspaper-edit', compact('newspaper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newspaper = Newspaper::find($id);

        if($request->img_kz){
            Storage::delete($newspaper->img_kz);
            $img_kz = Storage::putFile('', $request->file('img_kz'));
            $newspaper->img_kz=$img_kz;
        }
        if($request->file_kz){
            Storage::delete($newspaper->file_kz);
            $file_kz_name = $request->file('file_kz')->getClientOriginalName();
            $file_kz = Storage::putFileAs('', $request->file('file_kz'), $file_kz_name);
            $newspaper->file_kz=$file_kz;
        }

        if($request->img_ru){
            Storage::delete($newspaper->img_ru);
            $img_ru = Storage::putFile('', $request->file('img_ru'));
            $newspaper->img_ru=$img_ru;
        }
        if($request->file_ru){
            Storage::delete($newspaper->file_ru);
            $file_ru_name = $request->file('file_ru')->getClientOriginalName();
            $file_ru = Storage::putFileAs('', $request->file('file_ru'), $file_ru_name);
            $newspaper->file_ru=$file_ru;
        }

        if($request->img_en){
            Storage::delete($newspaper->img_en);
            $img_en = Storage::putFile('', $request->file('img_en'));
            $newspaper->img_en=$img_en;
        }
        if($request->file_en){
            Storage::delete($newspaper->file_en);
            $file_en_name = $request->file('file_en')->getClientOriginalName();
            $file_en = Storage::putFileAs('', $request->file('file_en'), $file_en_name);
            $newspaper->file_en=$file_en;
        }
        
        $newspaper->is_active=$request->is_active;

        $newspaper->save();

        Session::flash('success','Фото и файлы газеты успешно отредактированы.');
        return redirect()->route('admin-newspaper.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newspaper = Newspaper::find($id);
        Storage::delete($newspaper->img_kz);
        Storage::delete($newspaper->img_ru);
        Storage::delete($newspaper->img_en);
        Storage::delete($newspaper->file_kz);
        Storage::delete($newspaper->file_ru);
        Storage::delete($newspaper->file_en);

        $newspaper->delete();

        Session::flash('success','Фото и файлы газеты удалены успешно.');
        return redirect()->route('admin-newspaper.index');
    }
}
