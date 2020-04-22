<?php

namespace App\Http\Controllers;

use App\SanaSafety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class SanaSafetyController extends Controller
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
        $sanaSafety = SanaSafety::all();
        return view('admin-sana-safety', compact('sanaSafety'));
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
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $img_url = $request->file('img_url')->store('');

        $sanaSafety = new SanaSafety;
        $sanaSafety->img_url=$img_url;
        $sanaSafety->text_kz=$request->text_kz;
        $sanaSafety->text_ru=$request->text_ru;
        $sanaSafety->text_en=$request->text_en;

        $sanaSafety->save();

        Session::flash('success','Описание успешно добавлено.');
        return redirect()->route('admin-sana-safety.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SanaSafety  $sanaSafety
     * @return \Illuminate\Http\Response
     */
    public function show(SanaSafety $sanaSafety)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SanaSafety  $sanaSafety
     * @return \Illuminate\Http\Response
     */
    public function edit(SanaSafety $sanaSafety)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SanaSafety  $sanaSafety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sanaSafety = SanaSafety::find($id);

        // var_dump($request); die;

        $this->validate($request,[
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        if($request->file('img_url')){
            $img_url = $request->file('img_url')->store('');
            Storage::disk('public')->delete($sanaSafety->img_url);
            $sanaSafety->img_url=$img_url;
        }

        $sanaSafety->text_kz=$request->text_kz;
        $sanaSafety->text_ru=$request->text_ru;
        $sanaSafety->text_en=$request->text_en;

        $sanaSafety->save();

        Session::flash('success','Описание успешно отредактировано.');
        return redirect()->route('admin-sana-safety.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SanaSafety  $sanaSafety
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanaSafety $sanaSafety)
    {
        //
    }
}
