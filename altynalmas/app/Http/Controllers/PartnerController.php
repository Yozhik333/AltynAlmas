<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class PartnerController extends Controller
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
        $partners = Partner::all()->reverse();
        return view('admin-partners', compact('partners'));
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
            'img' => 'required|file|max:50000',
            'url'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
        ]);
        
        $img = $request->file('img')->store('');
        
        $partners = new Partner;
        $partners->img = $img;
        $partners->url=$request->url;
        $partners->title_en=$request->title_en;
        $partners->is_active=$request->is_active;

        $partners->save();

        Session::flash('success','Информация о партнёре успешно добавлена.');
        return redirect()->route('admin-partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin-partners-edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updatePartner = Partner::find($id);

        if($request->file('img')){

            $this->validate($request,[
                'img' => 'required|file|max:50000',
            ]);

            $img = $request->file('img')->store('');
            Storage::disk('public')->delete($updatePartner->img);
            $updatePartner->img=$img;
            
        }

        $this->validate($request,[
            'url'=>'required|string|max:191|min:1',                
            'title_en'=>'required|string|max:191|min:1',
        ]);
        $updatePartner->url=$request->url;
        $updatePartner->title_en=$request->title_en;            
        $updatePartner->is_active=$request->is_active;

        $updatePartner->save();

        Session::flash('success','Информация о партнёре успешно отредактирована.');
        return redirect()->route('admin-partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletePartner = Partner::find($id);
        
        Storage::disk('public')->delete($deletePartner->img);

        $deletePartner->delete();

        Session::flash('success','Информация о партнёре удалена успешно.');
        return redirect()->route('admin-partners.index');
    }
}
