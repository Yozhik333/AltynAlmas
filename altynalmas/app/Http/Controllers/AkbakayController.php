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
        // var_dump($request); die;
        $this->validate($request,[
            'img_url' => 'required|file|max:50000',
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $img_url = $request->file('img_url')->store('');

        $akbakay = new Akbakay;
        $akbakay->img_url=$img_url;
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

        // var_dump($request); die;
        if($request->file('img_url')){
            $this->validate($request,[
                'img_url' => 'required|file|max:50000',
                'title_kz'=>'required|string|max:191|min:1',
                'title_ru'=>'required|string|max:191|min:1',
                'title_en'=>'required|string|max:191|min:1',
                'text_kz'=>'required|string|max:60000|min:1',
                'text_ru'=>'required|string|max:60000|min:1',
                'text_en'=>'required|string|max:60000|min:1',
            ]);
            $img_url = $request->file('img_url')->store('');
            Storage::disk('public')->delete($akbakay->img_url);

            $akbakay->img_url=$img_url;
            $akbakay->title_kz=$request->title_kz;
            $akbakay->title_ru=$request->title_ru;
            $akbakay->title_en=$request->title_en;
            $akbakay->text_kz=$request->text_kz;
            $akbakay->text_ru=$request->text_ru;
            $akbakay->text_en=$request->text_en;

            $akbakay->save();

            Session::flash('success','Информация успешно отредактирована.');
            return redirect()->route('admin-akbakay.index');
        } else {
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

            $akbakay->save();

            Session::flash('success','Информация успешно отредактирована.');
            return redirect()->route('admin-akbakay.index');
        }
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

        $akbakay->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-akbakay.index');
    }
}
