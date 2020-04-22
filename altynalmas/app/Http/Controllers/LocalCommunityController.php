<?php

namespace App\Http\Controllers;

use App\LocalCommunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalCommunityController extends Controller
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
        //localCommunities
        $localCommunities = LocalCommunity::all()->reverse();
        return view('admin-local-communities', compact('localCommunities'));
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
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);


        $localCommunities = new LocalCommunity;
        $localCommunities->title_kz=$request->title_kz;
        $localCommunities->title_ru=$request->title_ru;
        $localCommunities->title_en=$request->title_en;
        $localCommunities->text_kz=$request->text_kz;
        $localCommunities->text_ru=$request->text_ru;
        $localCommunities->text_en=$request->text_en;
        $localCommunities->is_active=$request->is_active;

        $localCommunities->save();

        Session::flash('success','Информация успешно добавлена.');
        return redirect()->route('admin-local-communities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LocalCommunity  $localCommunity
     * @return \Illuminate\Http\Response
     */
    public function show(LocalCommunity $localCommunity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LocalCommunity  $localCommunity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localCommunity = LocalCommunity::find($id);
        return view('admin-local-communities-edit', compact('localCommunity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LocalCommunity  $localCommunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);


        $localCommunity = LocalCommunity::find($id);
        $localCommunity->title_kz=$request->title_kz;
        $localCommunity->title_ru=$request->title_ru;
        $localCommunity->title_en=$request->title_en;
        $localCommunity->text_kz=$request->text_kz;
        $localCommunity->text_ru=$request->text_ru;
        $localCommunity->text_en=$request->text_en;
        $localCommunity->is_active=$request->is_active;

        $localCommunity->save();

        Session::flash('success','Информация успешно отредактирована.');
        return redirect()->route('admin-local-communities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LocalCommunity  $localCommunity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteLocalCommunities = LocalCommunity::find($id);
        $deleteLocalCommunities->delete();

        Session::flash('success','Информация удалена успешно.');
        return redirect()->route('admin-local-communities.index');
    }
}
