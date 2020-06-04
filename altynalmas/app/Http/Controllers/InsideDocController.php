<?php

namespace App\Http\Controllers;

use App\InsideDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Session;

class InsideDocController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insideDocs = InsideDoc::all();
        return view('admin-inside-docs', compact('insideDocs'));
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
            'file_kz' => 'required|file|max:50000',
            'file_ru' => 'required|file|max:50000',
            'file_en' => 'required|file|max:50000',
        ]);
        

        $file_kz_name = $request->file('file_kz')->getClientOriginalName();
        $file_ru_name = $request->file('file_ru')->getClientOriginalName();
        $file_en_name = $request->file('file_en')->getClientOriginalName();

        $file_kz = Storage::putFileAs('', $request->file('file_kz'), $file_kz_name);
        $file_ru = Storage::putFileAs('', $request->file('file_ru'), $file_ru_name);
        $file_en = Storage::putFileAs('', $request->file('file_en'), $file_en_name);

        $insideDoc = new InsideDoc;
        $insideDoc->title_kz=$request->title_kz;
        $insideDoc->title_ru=$request->title_ru;
        $insideDoc->title_en=$request->title_en;
        $insideDoc->file_kz=$file_kz;
        $insideDoc->file_ru=$file_ru;
        $insideDoc->file_en=$file_en;
        $insideDoc->is_active=$request->is_active;

        $insideDoc->save();

        Session::flash('success','Файлы внутреннего документа успешно загружены.');
        return redirect()->route('admin-inside-docs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InsideDoc  $insideDoc
     * @return \Illuminate\Http\Response
     */
    public function show(InsideDoc $insideDoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InsideDoc  $insideDoc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insideDoc = InsideDoc::find($id);
        return view('admin-inside-docs-edit', compact('insideDoc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InsideDoc  $insideDoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $insideDoc = InsideDoc::find($id);

        $this->validate($request,[
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
        ]);

        $insideDoc->title_kz=$request->title_kz;
        $insideDoc->title_ru=$request->title_ru;
        $insideDoc->title_en=$request->title_en;
        $insideDoc->is_active=$request->is_active;

        
        if($request->file('file_kz')){
            Storage::disk('public')->delete($insideDoc->file_kz);
            $file_kz_name = $request->file('file_kz')->getClientOriginalName();
            $file_kz = Storage::putFileAs('', $request->file('file_kz'), $file_kz_name);
            $insideDoc->file_kz=$file_kz;
        }
        if($request->file('file_ru')){
            Storage::disk('public')->delete($insideDoc->file_ru);
            $file_ru_name = $request->file('file_ru')->getClientOriginalName();
            $file_ru = Storage::putFileAs('', $request->file('file_ru'), $file_ru_name);
            $insideDoc->file_ru=$file_ru;
        }
        if($request->file('file_en')){
            $file_en_name = $request->file('file_en')->getClientOriginalName();
            $file_en = Storage::putFileAs('', $request->file('file_en'), $file_en_name);
            Storage::disk('public')->delete($insideDoc->file_en);
            $insideDoc->file_en=$file_en;
        }

        $insideDoc->save();

        Session::flash('success','Новый(-ые) файл(-ы) внутреннего документа успешно загружены.');
        return redirect()->route('admin-inside-docs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InsideDoc  $insideDoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insideDoc = InsideDoc::find($id);

        Storage::disk('public')->delete($insideDoc->file_kz);
        Storage::disk('public')->delete($insideDoc->file_ru);
        Storage::disk('public')->delete($insideDoc->file_en);
        $insideDoc->delete();

        Session::flash('success','Файлы внутреннего документа удалены успешно.');
        return redirect()->route('admin-inside-docs.index');
    }
}
