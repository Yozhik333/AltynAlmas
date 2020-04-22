<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
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
        $education = Education::all();
        return view('admin-education', compact('education'));
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
            'compulsory_ed_img' => 'required|file|max:50000',
            'compulsory_ed_text_kz'=>'required|string|max:60000|min:1',
            'compulsory_ed_text_ru'=>'required|string|max:60000|min:1',
            'compulsory_ed_text_en'=>'required|string|max:60000|min:1',
            'advanced_ed_img' => 'required|file|max:50000',
            'advanced_ed_text_kz'=>'required|string|max:60000|min:1',
            'advanced_ed_text_ru'=>'required|string|max:60000|min:1',
            'advanced_ed_text_en'=>'required|string|max:60000|min:1',
            'special_ed_img' => 'required|file|max:50000',
            'special_ed_text_kz'=>'required|string|max:60000|min:1',
            'special_ed_text_ru'=>'required|string|max:60000|min:1',
            'special_ed_text_en'=>'required|string|max:60000|min:1',
        ]);

        $compulsory_ed_img = $request->file('compulsory_ed_img')->store('');
        $advanced_ed_img = $request->file('advanced_ed_img')->store('');
        $special_ed_img = $request->file('special_ed_img')->store('');

        $education = new Education;
        $education->compulsory_ed_img=$compulsory_ed_img;
        $education->compulsory_ed_text_kz=$request->compulsory_ed_text_kz;
        $education->compulsory_ed_text_ru=$request->compulsory_ed_text_ru;
        $education->compulsory_ed_text_en=$request->compulsory_ed_text_en;
        $education->advanced_ed_img=$advanced_ed_img;
        $education->advanced_ed_text_kz=$request->advanced_ed_text_kz;
        $education->advanced_ed_text_ru=$request->advanced_ed_text_ru;
        $education->advanced_ed_text_en=$request->advanced_ed_text_en;
        $education->special_ed_img=$special_ed_img;
        $education->special_ed_text_kz=$request->special_ed_text_kz;
        $education->special_ed_text_ru=$request->special_ed_text_ru;
        $education->special_ed_text_en=$request->special_ed_text_en;

        $education->save();

        Session::flash('success','Описание успешно добавлено.');
        return redirect()->route('admin-education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $education = Education::find($id);

        // var_dump($request); die;

        $this->validate($request,[
            'compulsory_ed_text_kz'=>'required|string|max:60000|min:1',
            'compulsory_ed_text_ru'=>'required|string|max:60000|min:1',
            'compulsory_ed_text_en'=>'required|string|max:60000|min:1',
            'advanced_ed_text_kz'=>'required|string|max:60000|min:1',
            'advanced_ed_text_ru'=>'required|string|max:60000|min:1',
            'advanced_ed_text_en'=>'required|string|max:60000|min:1',
            'special_ed_text_kz'=>'required|string|max:60000|min:1',
            'special_ed_text_ru'=>'required|string|max:60000|min:1',
            'special_ed_text_en'=>'required|string|max:60000|min:1',
        ]);

        if($request->file('compulsory_ed_img')){
            $compulsory_ed_img = $request->file('compulsory_ed_img')->store('');
            Storage::disk('public')->delete($education->compulsory_ed_img);
            $education->compulsory_ed_img=$compulsory_ed_img;
        }

        if($request->file('advanced_ed_img')){
            $advanced_ed_img = $request->file('advanced_ed_img')->store('');
            Storage::disk('public')->delete($education->advanced_ed_img);
            $education->advanced_ed_img=$advanced_ed_img;
        }

        if($request->file('special_ed_img')){
            $special_ed_img = $request->file('special_ed_img')->store('');
            Storage::disk('public')->delete($education->special_ed_img);
            $education->special_ed_img=$special_ed_img;
        }

        $education->compulsory_ed_text_kz=$request->compulsory_ed_text_kz;
        $education->compulsory_ed_text_ru=$request->compulsory_ed_text_ru;
        $education->compulsory_ed_text_en=$request->compulsory_ed_text_en;
        $education->advanced_ed_text_kz=$request->advanced_ed_text_kz;
        $education->advanced_ed_text_ru=$request->advanced_ed_text_ru;
        $education->advanced_ed_text_en=$request->advanced_ed_text_en;
        $education->special_ed_text_kz=$request->special_ed_text_kz;
        $education->special_ed_text_ru=$request->special_ed_text_ru;
        $education->special_ed_text_en=$request->special_ed_text_en;

        $education->save();

        Session::flash('success','Описание успешно отредактировано.');
        return redirect()->route('admin-education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
