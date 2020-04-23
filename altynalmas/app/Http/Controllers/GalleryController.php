<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

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
        $category = Category::all();
        return view('admin-gallery', compact('gallery', 'category'));
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
            'image' => 'required|image|max:50000',
            'category_id' => 'required|integer|exists:category,id',
            'date' => 'required|date',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);
        $photo = $request->file('image')->hashName();
        Storage::disk('public')->put('', $request->file('image'));

        $gallery = new Gallery;
        $gallery->title_kz = 'kz';
        $gallery->title_ru = 'ru';
        $gallery->title_en = 'en';
        $gallery->text_kz=$request->text_kz;
        $gallery->text_ru=$request->text_ru;
        $gallery->text_en=$request->text_en;
        $gallery->is_active=$request->is_active;
        $gallery->images = $photo;
        $gallery->category_id = $request->category_id;
        $gallery->date = $request->date;

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
    public function edit(Gallery $gallery, $id)
    {
        $gallery = Gallery::find($id);
        $category = Category::all();
        return view('admin-gallery-edit', compact('gallery', 'category'));
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
            'image' => 'nullable|image|max:50000',
            'category_id' => 'required|integer|exists:category,id',
            'date' => 'required|date',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $gallery = Gallery::find($id);
        if ($request->file('image')) {
            $photo = $request->file('image')->hashName();
            Storage::disk('public')->put('', $request->file('image'));
            $gallery->images = $photo;
        }

        $gallery->text_kz=$request->text_kz;
        $gallery->text_ru=$request->text_ru;
        $gallery->text_en=$request->text_en;
        $gallery->is_active=$request->is_active;
        $gallery->category_id = $request->category_id;
        $gallery->date = $request->date;

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
