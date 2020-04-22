<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class BoardController extends Controller
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
        $boards = Board::all()->reverse();
        return view('admin-board', compact('boards'));
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
            'position_kz'=>'required|string|max:60000|min:1',
            'position_ru'=>'required|string|max:60000|min:1',
            'position_en'=>'required|string|max:60000|min:1',
        ]);

        $img_url = $request->file('img_url')->store('');

        $board = new Board;
        $board->img_url=$img_url;
        $board->name_kz=$request->name_kz;
        $board->name_ru=$request->name_ru;
        $board->name_en=$request->name_en;
        $board->position_kz=$request->position_kz;
        $board->position_ru=$request->position_ru;
        $board->position_en=$request->position_en;

        $board->save();

        Session::flash('success','Карточка успешно добавлена.');
        return redirect()->route('admin-board.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $board = Board::find($id);
        return view('admin-board-edit', compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $board = Board::find($id);

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
            Storage::disk('public')->delete($board->img_url);

            $board->img_url=$img_url;
            $board->name_kz=$request->name_kz;
            $board->name_ru=$request->name_ru;
            $board->name_en=$request->name_en;
            $board->position_kz=$request->position_kz;
            $board->position_ru=$request->position_ru;
            $board->position_en=$request->position_en;

            $board->save();

            Session::flash('success','Карточка успешно отредактирована.');
            return redirect()->route('admin-board.index');
        } else {
            $this->validate($request,[
                'name_kz'=>'required|string|max:191|min:1',
                'name_ru'=>'required|string|max:191|min:1',
                'name_en'=>'required|string|max:191|min:1',
                'position_kz'=>'required|string|max:60000|min:1',
                'position_ru'=>'required|string|max:60000|min:1',
                'position_en'=>'required|string|max:60000|min:1',
            ]);
            $board->name_kz=$request->name_kz;
            $board->name_ru=$request->name_ru;
            $board->name_en=$request->name_en;
            $board->position_kz=$request->position_kz;
            $board->position_ru=$request->position_ru;
            $board->position_en=$request->position_en;

            $board->save();

            Session::flash('success','Карточка успешно отредактирована.');
            return redirect()->route('admin-board.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board = Board::find($id);
        Storage::disk('public')->delete($board->img_url);

        $board->delete();

        Session::flash('success','Карточка удалена успешно.');
        return redirect()->route('admin-board.index');
    }
}
