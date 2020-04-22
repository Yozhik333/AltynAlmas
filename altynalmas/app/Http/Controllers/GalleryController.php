<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all()->reverse();
        return view('admin-gallery', compact('gallery'));
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
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);        
        $photo = $request->file('images')->hashName();
        Storage::disk('public')->put('', $request->file('image'));

        $gallery = new Gallery;
        $gallery->title_kz = 'kz';
        $gallery->title_ru = 'ru';
        $gallery->title_en = 'en';
        $gallery->text_kz=$request->text_kz;
        $gallery->text_ru=$request->text_ru;
        $gallery->text_en=$request->text_en;
        $gallery->is_active=$request->is_active;

        $gallery->save();

        Session::flash('success','Информация успешно добавлена.');
        return redirect()->route('admin-gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $gallery = Gallery::find($id);
        return view('admin-gallery-edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request,[
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);


        $gallery = Gallery::find($id);
        $gallery->text_kz=$request->text_kz;
        $gallery->text_ru=$request->text_ru;
        $gallery->text_en=$request->text_en;
        $gallery->is_active=$request->is_active;

        $gallery->save();

        Session::flash('success','Информация успешно отредактирована.');
        return redirect()->route('admin-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $deleteGallery = Gallery::find($id);
        $deleteGallery->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-gallery.index');
    }
}
