<?php

namespace App\Http\Controllers;

use App\Aktogay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AktogayController extends Controller
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
        $aktogay = Aktogay::all();
        return view('admin-aktogay', compact('aktogay'));
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

        $aktogay = new Aktogay;
        $aktogay->img_url=$img_url;
        $aktogay->img_url_kz=$img_url_kz;
        $aktogay->img_url_en=$img_url_en;
        $aktogay->title_kz=$request->title_kz;
        $aktogay->title_ru=$request->title_ru;
        $aktogay->title_en=$request->title_en;
        $aktogay->text_kz=$request->text_kz;
        $aktogay->text_ru=$request->text_ru;
        $aktogay->text_en=$request->text_en;

        $aktogay->save();

        Session::flash('success','Информация успешно добавлена.');
        return redirect()->route('admin-aktogay.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aktogay  $aktogay
     * @return \Illuminate\Http\Respons
     */
    public function show(Aktogay $aktogay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aktogay  $aktogay
     * @return \Illuminate\Http\Response
     */
    public function edit(Aktogay $aktogay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aktogay  $aktogay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aktogay = Aktogay::find($id);
        $this->validate($request,[
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $aktogay->title_kz=$request->title_kz;
        $aktogay->title_ru=$request->title_ru;
        $aktogay->title_en=$request->title_en;
        $aktogay->text_kz=$request->text_kz;
        $aktogay->text_ru=$request->text_ru;
        $aktogay->text_en=$request->text_en;

        if($request->file('img_url')){
            $this->validate($request,[
                'img_url' => 'required|file|max:50000',
            ]);
            $img_url = $request->file('img_url')->store('');
            Storage::disk('public')->delete($aktogay->img_url);

            $aktogay->img_url=$img_url;
        }

        if($request->file('img_url_kz')){
            $this->validate($request,[
                'img_url_kz' => 'required|file|max:50000',
            ]);
            $img_url_kz = $request->file('img_url_kz')->store('');
            Storage::disk('public')->delete($aktogay->img_url_kz);

            $aktogay->img_url_kz=$img_url_kz;
        }

        if($request->file('img_url_en')){
            $this->validate($request,[
                'img_url_en' => 'required|file|max:50000',
            ]);
            $img_url_en = $request->file('img_url_en')->store('');
            Storage::disk('public')->delete($aktogay->img_url_en);

            $aktogay->img_url_en=$img_url_en;
        }

        $aktogay->save();

        Session::flash('success','Информация успешно отредактирована.');
        return redirect()->route('admin-aktogay.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aktogay  $aktogay
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aktogay = Aktogay::find($id);
        Storage::disk('public')->delete($aktogay->img_url);
        Storage::disk('public')->delete($aktogay->img_url_kz);
        Storage::disk('public')->delete($aktogay->img_url_en);

        $aktogay->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-aktogay.index');
    }
}
