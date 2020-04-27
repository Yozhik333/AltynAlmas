<?php

namespace App\Http\Controllers;

use App\VicePresident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class VicePresidentController extends Controller
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
        $presidents = VicePresident::all()->reverse();
        return view('admin-vice-presidents', compact('presidents'));
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

        $president = new VicePresident;
        $president->img_url=$img_url;
        $president->name_kz=$request->name_kz;
        $president->name_ru=$request->name_ru;
        $president->name_en=$request->name_en;
        $president->position_kz=$request->position_kz;
        $president->position_ru=$request->position_ru;
        $president->position_en=$request->position_en;

        $president->save();

        Session::flash('success','Карточка успешно добавлена.');
        return redirect()->route('admin-vice-presidents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VicePresident  $vicePresident
     * @return \Illuminate\Http\Response
     */
    public function show(VicePresident $vicePresident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VicePresident  $vicePresident
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $president = VicePresident::find($id);
        return view('admin-vice-presidents-edit', compact('president'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VicePresident  $vicePresident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $president = VicePresident::find($id);

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
            Storage::disk('public')->delete($president->img_url);

            $president->img_url=$img_url;
            $president->name_kz=$request->name_kz;
            $president->name_ru=$request->name_ru;
            $president->name_en=$request->name_en;
            $president->position_kz=$request->position_kz;
            $president->position_ru=$request->position_ru;
            $president->position_en=$request->position_en;

            $president->save();

            Session::flash('success','Карточка успешно отредактирована.');
            return redirect()->route('admin-vice-presidents.index');
        } else {
            $this->validate($request,[
                'name_kz'=>'required|string|max:191|min:1',
                'name_ru'=>'required|string|max:191|min:1',
                'name_en'=>'required|string|max:191|min:1',
                'position_kz'=>'required|string|max:60000|min:1',
                'position_ru'=>'required|string|max:60000|min:1',
                'position_en'=>'required|string|max:60000|min:1',
            ]);
            $president->name_kz=$request->name_kz;
            $president->name_ru=$request->name_ru;
            $president->name_en=$request->name_en;
            $president->position_kz=$request->position_kz;
            $president->position_ru=$request->position_ru;
            $president->position_en=$request->position_en;

            $president->save();

            Session::flash('success','Карточка успешно отредактирована.');
            return redirect()->route('admin-vice-presidents.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VicePresident  $vicePresident
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $president = VicePresident::find($id);
        Storage::disk('public')->delete($president->img_url);

        $president->delete();

        Session::flash('success','Карточка удалена успешно.');
        return redirect()->route('admin-vice-presidents.index');
    }
}
