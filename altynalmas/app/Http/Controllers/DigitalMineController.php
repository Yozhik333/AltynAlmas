<?php

namespace App\Http\Controllers;

use App\DigitalMine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class DigitalMineController extends Controller
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
        $digitalMine = DigitalMine::all();
        return view('admin-digital-mine', compact('digitalMine'));
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
            'img_url_1' => 'required|file|max:50000',
            'video_url_1' => 'required|file|max:50000',
            'img_url_2' => 'required|file|max:50000',
            'video_url_2' => 'required|file|max:50000',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $img_url_1 = $request->file('img_url_1')->store('');
        $video_url_1 = $request->file('video_url_1')->store('');
        $img_url_2 = $request->file('img_url_2')->store('');
        $video_url_2 = $request->file('video_url_2')->store('');

        $digitalMine = new DigitalMine;
        $digitalMine->img_url_1=$img_url_1;
        $digitalMine->video_url_1=$video_url_1;
        $digitalMine->img_url_2=$img_url_2;
        $digitalMine->video_url_2=$video_url_2;
        $digitalMine->text_kz=$request->text_kz;
        $digitalMine->text_ru=$request->text_ru;
        $digitalMine->text_en=$request->text_en;

        $digitalMine->save();

        Session::flash('success','Описание успешно добавлено.');
        return redirect()->route('admin-digital-mine.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DigitalMine  $digitalMine
     * @return \Illuminate\Http\Response
     */
    public function show(DigitalMine $digitalMine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DigitalMine  $digitalMine
     * @return \Illuminate\Http\Response
     */
    public function edit(DigitalMine $digitalMine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DigitalMine  $digitalMine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $digitalMine = DigitalMine::find($id);

        // var_dump($request); die;

        $this->validate($request,[
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        if($request->file('img_url_1')){
            $img_url_1 = $request->file('img_url_1')->store('');
            Storage::disk('public')->delete($digitalMine->img_url_1);
            $digitalMine->img_url_1=$img_url_1;
        }
        if($request->file('video_url_1')){
            $video_url_1 = $request->file('video_url_1')->store('');
            Storage::disk('public')->delete($digitalMine->video_url_1);
            $digitalMine->video_url_1=$video_url_1;
        }
        if($request->file('img_url_2')){
            $img_url_2 = $request->file('img_url_2')->store('');
            Storage::disk('public')->delete($digitalMine->img_url_2);
            $digitalMine->img_url_2=$img_url_2;
        }
        if($request->file('video_url_2')){
            $video_url_2 = $request->file('video_url_2')->store('');
            Storage::disk('public')->delete($digitalMine->video_url_2);
            $digitalMine->video_url_2=$video_url_2;
        }

        $digitalMine->text_kz=$request->text_kz;
        $digitalMine->text_ru=$request->text_ru;
        $digitalMine->text_en=$request->text_en;

        $digitalMine->save();

        Session::flash('success','Описание успешно отредактировано.');
        return redirect()->route('admin-digital-mine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DigitalMine  $digitalMine
     * @return \Illuminate\Http\Response
     */
    public function destroy(DigitalMine $digitalMine)
    {
        //
    }
}
