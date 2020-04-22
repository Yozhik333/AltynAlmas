<?php

namespace App\Http\Controllers;

use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class YearController extends Controller
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
        $years = Year::all()->reverse();
        return view('admin-years', compact('years'));
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
            'year'=>'required|string|max:4|min:4',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);


        $year = new Year;

        $year->year=$request->year;
        $year->text_kz=$request->text_kz;
        $year->text_ru=$request->text_ru;
        $year->text_en=$request->text_en;
        $year->is_active=$request->is_active;

        $year->save();

        Session::flash('success','Информация успешно добавлена.');
        return redirect()->route('admin-years.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $year = Year::find($id);
        return view('admin-year-edit', compact('year'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'year'=>'required|string|max:4|min:4',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);


        $year = Year::find($id);

        $year->year=$request->year;
        $year->text_kz=$request->text_kz;
        $year->text_ru=$request->text_ru;
        $year->text_en=$request->text_en;
        $year->is_active=$request->is_active;

        $year->save();

        Session::flash('success','Информация успешно отредактирована.');
        return redirect()->route('admin-years.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteYear = Year::find($id);
        $deleteYear->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-years.index');
    }
}
