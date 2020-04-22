<?php

namespace App\Http\Controllers;

use App\BoardOfDirectors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class BoardOfDirectorsController extends Controller
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
        $directors = BoardOfDirectors::all()->reverse();
        return view('admin-board-of-directors', compact('directors'));
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
            'name_kz'=>'required|string|max:191|min:1',
            'name_ru'=>'required|string|max:191|min:1',
            'name_en'=>'required|string|max:191|min:1',
            'position_kz'=>'required|string|max:60000|min:1',
            'position_ru'=>'required|string|max:60000|min:1',
            'position_en'=>'required|string|max:60000|min:1',
        ]);

        $img_url = $request->file('img_url')->store('');

        $director = new BoardOfDirectors;
        $director->img_url=$img_url;
        $director->name_kz=$request->name_kz;
        $director->name_ru=$request->name_ru;
        $director->name_en=$request->name_en;
        $director->position_kz=$request->position_kz;
        $director->position_ru=$request->position_ru;
        $director->position_en=$request->position_en;

        $director->save();

        Session::flash('success','Карточка успешно добавлена.');
        return redirect()->route('admin-board-of-directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoardOfDirectors  $boardOfDirectors
     * @return \Illuminate\Http\Response
     */
    public function show(BoardOfDirectors $boardOfDirectors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoardOfDirectors  $boardOfDirectors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $director = BoardOfDirectors::find($id);
        return view('admin-board-of-directors-edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoardOfDirectors  $boardOfDirectors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $director = BoardOfDirectors::find($id);

        if($request->file('img_url')){
            $this->validate($request,[
                'img_url' => 'required|file|max:50000',
                'name_kz'=>'required|string|max:191|min:1',
                'name_ru'=>'required|string|max:191|min:1',
                'name_en'=>'required|string|max:191|min:1',
                'position_kz'=>'required|string|max:60000|min:1',
                'position_ru'=>'required|string|max:60000|min:1',
                'position_en'=>'required|string|max:60000|min:1',
            ]);
            $img_url = $request->file('img_url')->store('');
            Storage::disk('public')->delete($director->img_url);

            $director->img_url=$img_url;
            $director->name_kz=$request->name_kz;
            $director->name_ru=$request->name_ru;
            $director->name_en=$request->name_en;
            $director->position_kz=$request->position_kz;
            $director->position_ru=$request->position_ru;
            $director->position_en=$request->position_en;

            $director->save();

            Session::flash('success','Карточка успешно отредактирована.');
            return redirect()->route('admin-board-of-directors.index');
        } else {
            $this->validate($request,[
                'name_kz'=>'required|string|max:191|min:1',
                'name_ru'=>'required|string|max:191|min:1',
                'name_en'=>'required|string|max:191|min:1',
                'position_kz'=>'required|string|max:60000|min:1',
                'position_ru'=>'required|string|max:60000|min:1',
                'position_en'=>'required|string|max:60000|min:1',
            ]);
            $director->name_kz=$request->name_kz;
            $director->name_ru=$request->name_ru;
            $director->name_en=$request->name_en;
            $director->position_kz=$request->position_kz;
            $director->position_ru=$request->position_ru;
            $director->position_en=$request->position_en;

            $director->save();

            Session::flash('success','Карточка успешно отредактирована.');
            return redirect()->route('admin-board-of-directors.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoardOfDirectors  $boardOfDirectors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director = BoardOfDirectors::find($id);
        Storage::disk('public')->delete($director->img_url);

        $director->delete();

        Session::flash('success','Карточка удалена успешно.');
        return redirect()->route('admin-board-of-directors.index');
    }
}
