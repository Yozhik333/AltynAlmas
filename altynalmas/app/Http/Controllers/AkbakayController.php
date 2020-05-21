<?php

namespace App\Http\Controllers;

use App\Akbakay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AkbakayController extends Controller
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
        $akbakay = Akbakay::all();
        return view('admin-akbakay', compact('akbakay'));
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
            'img_url' => 'required|file|max:50000',
            'img_url_kz' => 'required|file|max:50000',
            'img_url_en' => 'required|file|max:50000',
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $img_url = $request->file('img_url')->store('');
        $img_url_kz = $request->file('img_url_kz')->store('');
        $img_url_en = $request->file('img_url_en')->store('');

        $akbakay = new Akbakay;
        $akbakay->img_url=$img_url;
        $akbakay->img_url_kz=$img_url_kz;
        $akbakay->img_url_en=$img_url_en;
        $akbakay->title_kz=$request->title_kz;
        $akbakay->title_ru=$request->title_ru;
        $akbakay->title_en=$request->title_en;
        $akbakay->text_kz=$request->text_kz;
        $akbakay->text_ru=$request->text_ru;
        $akbakay->text_en=$request->text_en;

        $akbakay->save();

        Session::flash('success','Информация успешно добавлена.');
        return redirect()->route('admin-akbakay.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Akbakay  $akbakay
     * @return \Illuminate\Http\Response
     */
    public function show(Akbakay $akbakay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Akbakay  $akbakay
     * @return \Illuminate\Http\Response
     */
    public function edit(Akbakay $akbakay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Akbakay  $akbakay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $akbakay = Akbakay::find($id);

        $this->validate($request,[
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $akbakay->title_kz=$request->title_kz;
        $akbakay->title_ru=$request->title_ru;
        $akbakay->title_en=$request->title_en;
        $akbakay->text_kz=$request->text_kz;
        $akbakay->text_ru=$request->text_ru;
        $akbakay->text_en=$request->text_en;

        if($request->file('img_url')){
            $this->validate($request,[
                'img_url' => 'required|file|max:50000',
            ]);
            $img_url = $request->file('img_url')->store('');
            Storage::disk('public')->delete($akbakay->img_url);

            $akbakay->img_url=$img_url;
        }

        if($request->file('img_url_kz')){
            $this->validate($request,[
                'img_url_kz' => 'required|file|max:50000',
            ]);
            $img_url_kz = $request->file('img_url_kz')->store('');
            Storage::disk('public')->delete($akbakay->img_url_kz);

            $akbakay->img_url_kz=$img_url_kz;
        }

        if($request->file('img_url_en')){
            $this->validate($request,[
                'img_url_en' => 'required|file|max:50000',
            ]);
            $img_url_en = $request->file('img_url_en')->store('');
            Storage::disk('public')->delete($akbakay->img_url_en);

            $akbakay->img_url_en=$img_url_en;
        } 

        $akbakay->save();

        Session::flash('success','Информация успешно отредактирована.');
        return redirect()->route('admin-akbakay.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akbakay  $akbakay
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $akbakay = Akbakay::find($id);
        Storage::disk('public')->delete($akbakay->img_url);
        Storage::disk('public')->delete($akbakay->img_url_kz);
        Storage::disk('public')->delete($akbakay->img_url_en);

        $akbakay->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-akbakay.index');
    }
}
