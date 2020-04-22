<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class CoachController extends Controller
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
        $coaches = Coach::all()->reverse();
        return view('admin-coaches', compact('coaches'));
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
            'name_kz'=>'required|string|max:191|min:1',
            'name_ru'=>'required|string|max:191|min:1',
            'name_en'=>'required|string|max:191|min:1',
            'position_kz'=>'required|string|max:191|min:1',
            'position_ru'=>'required|string|max:191|min:1',
            'position_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);

        $img_url = Storage::putFile('' , $request->file('img_url'));

        $coach = new Coach;
        $coach->img_url=$img_url;
        $coach->name_kz=$request->name_kz;
        $coach->name_ru=$request->name_ru;
        $coach->name_en=$request->name_en;
        $coach->position_kz=$request->position_kz;
        $coach->position_ru=$request->position_ru;
        $coach->position_en=$request->position_en;
        $coach->text_kz=$request->text_kz;
        $coach->text_ru=$request->text_ru;
        $coach->text_en=$request->text_en;
        $coach->is_active=$request->is_active;

        $coach->save();

        Session::flash('success','Информация о тренере успешно добавлена.');
        return redirect()->route('admin-coaches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coach = Coach::find($id);
        return view('admin-coaches-edit', compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $coach = Coach::find($id);

        if($request->file('img_url')){
            $this->validate($request,[
                'img_url' => 'required|file|max:50000',
                'name_kz'=>'required|string|max:191|min:1',
                'name_ru'=>'required|string|max:191|min:1',
                'name_en'=>'required|string|max:191|min:1',
                'position_kz'=>'required|string|max:191|min:1',
                'position_ru'=>'required|string|max:191|min:1',
                'position_en'=>'required|string|max:191|min:1',
                'text_kz'=>'required|string|max:60000|min:1',
                'text_ru'=>'required|string|max:60000|min:1',
                'text_en'=>'required|string|max:60000|min:1',
            ]);
            $img_url = Storage::putFile('' , $request->file('img_url'));
            Storage::delete($coach->img_url);

            $coach->img_url=$img_url;
            $coach->name_kz=$request->name_kz;
            $coach->name_ru=$request->name_ru;
            $coach->name_en=$request->name_en;
            $coach->position_kz=$request->position_kz;
            $coach->position_ru=$request->position_ru;
            $coach->position_en=$request->position_en;
            $coach->text_kz=$request->text_kz;
            $coach->text_ru=$request->text_ru;
            $coach->text_en=$request->text_en;
            $coach->is_active=$request->is_active;

            $coach->save();

            Session::flash('success','Информация о тренере успешно отредактирована.');
            return redirect()->route('admin-coaches.index');
        } else {
            $this->validate($request,[
                'name_kz'=>'required|string|max:191|min:1',
                'name_ru'=>'required|string|max:191|min:1',
                'name_en'=>'required|string|max:191|min:1',
                'position_kz'=>'required|string|max:191|min:1',
                'position_ru'=>'required|string|max:191|min:1',
                'position_en'=>'required|string|max:191|min:1',
                'text_kz'=>'required|string|max:60000|min:1',
                'text_ru'=>'required|string|max:60000|min:1',
                'text_en'=>'required|string|max:60000|min:1',
            ]);

            $coach->name_kz=$request->name_kz;
            $coach->name_ru=$request->name_ru;
            $coach->name_en=$request->name_en;
            $coach->position_kz=$request->position_kz;
            $coach->position_ru=$request->position_ru;
            $coach->position_en=$request->position_en;
            $coach->text_kz=$request->text_kz;
            $coach->text_ru=$request->text_ru;
            $coach->text_en=$request->text_en;
            $coach->is_active=$request->is_active;

            $coach->save();

            Session::flash('success','Информация о тренере успешно отредактирована.');
            return redirect()->route('admin-coaches.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coach = Coach::find($id);
        Storage::delete($coach->img_url);

        $coach->delete();

        Session::flash('success','Информация о тренере удалена успешно.');
        return redirect()->route('admin-coaches.index');
    }
}
