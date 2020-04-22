<?php

namespace App\Http\Controllers;

use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VacancyController extends Controller
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
        $vacancies = Vacancy::all();
        return view('admin-vacancies', compact('vacancies'));
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
            'name_kz'=>'required|string|max:191|min:1',
            'name_ru'=>'required|string|max:191|min:1',
            'name_en'=>'required|string|max:191|min:1',
            'requirements_kz'=>'required|string|max:60000|min:1',
            'requirements_ru'=>'required|string|max:60000|min:1',
            'requirements_en'=>'required|string|max:60000|min:1',
            'conditions_kz'=>'required|string|max:60000|min:1',
            'conditions_ru'=>'required|string|max:60000|min:1',
            'conditions_en'=>'required|string|max:60000|min:1',
            'duties_kz'=>'required|string|max:60000|min:1',
            'duties_ru'=>'required|string|max:60000|min:1',
            'duties_en'=>'required|string|max:60000|min:1',
            'hh_url'=>'required|string|max:191|min:1',
        ]);

        $vacancy = new Vacancy;

        $vacancy->name_kz=$request->name_kz;
        $vacancy->name_ru=$request->name_ru;
        $vacancy->name_en=$request->name_en;
        $vacancy->requirements_kz=$request->requirements_kz;
        $vacancy->requirements_ru=$request->requirements_ru;
        $vacancy->requirements_en=$request->requirements_en;
        $vacancy->conditions_kz=$request->conditions_kz;
        $vacancy->conditions_ru=$request->conditions_ru;
        $vacancy->conditions_en=$request->conditions_en;
        $vacancy->duties_kz=$request->duties_kz;
        $vacancy->duties_ru=$request->duties_ru;
        $vacancy->duties_en=$request->duties_en;
        $vacancy->is_active=$request->is_active;
        $vacancy->hh_url=$request->hh_url;

        $vacancy->save();

        Session::flash('success','Вакансия успешно добавлена.');
        return redirect()->route('admin-vacancies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = Vacancy::find($id);
        return view('admin-vacancies-edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vacancy = Vacancy::find($id);

        // var_dump($request); die;

        $this->validate($request,[
            'name_kz'=>'required|string|max:191|min:1',
            'name_ru'=>'required|string|max:191|min:1',
            'name_en'=>'required|string|max:191|min:1',
            'requirements_kz'=>'required|string|max:60000|min:1',
            'requirements_ru'=>'required|string|max:60000|min:1',
            'requirements_en'=>'required|string|max:60000|min:1',
            'conditions_kz'=>'required|string|max:60000|min:1',
            'conditions_ru'=>'required|string|max:60000|min:1',
            'conditions_en'=>'required|string|max:60000|min:1',
            'duties_kz'=>'required|string|max:60000|min:1',
            'duties_ru'=>'required|string|max:60000|min:1',
            'duties_en'=>'required|string|max:60000|min:1',
            'hh_url'=>'required|string|max:191|min:1',
        ]);

        $vacancy->name_kz=$request->name_kz;
        $vacancy->name_ru=$request->name_ru;
        $vacancy->name_en=$request->name_en;
        $vacancy->requirements_kz=$request->requirements_kz;
        $vacancy->requirements_ru=$request->requirements_ru;
        $vacancy->requirements_en=$request->requirements_en;
        $vacancy->conditions_kz=$request->conditions_kz;
        $vacancy->conditions_ru=$request->conditions_ru;
        $vacancy->conditions_en=$request->conditions_en;
        $vacancy->duties_kz=$request->duties_kz;
        $vacancy->duties_ru=$request->duties_ru;
        $vacancy->duties_en=$request->duties_en;
        $vacancy->is_active=$request->is_active;
        $vacancy->hh_url=$request->hh_url;

        $vacancy->save();

        Session::flash('success','Информация о вакансии успешно отредактирована.');
        return redirect()->route('admin-vacancies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();

        Session::flash('success','Вакансия удалена успешно.');
        return redirect()->route('admin-vacancies.index');
    }
}
