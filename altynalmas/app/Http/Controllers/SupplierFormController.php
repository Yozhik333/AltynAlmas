<?php

namespace App\Http\Controllers;

use App\SupplierForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Session;

class SupplierFormController extends Controller
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
        $supplierForm = SupplierForm::all();
        return view('admin-supplier-form', compact('supplierForm'));
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
            'supplier_form_kz' => 'required|file|max:50000',
            'supplier_form_ru' => 'required|file|max:50000',
            'supplier_form_en' => 'required|file|max:50000',
        ]);
        // $name = $request->file('supplier_form_kz')->getClientOriginalName();
        // dd($name);
        //Storage::putFileAs('photos', new File('/path/to/photo'), 'photo.jpg');

        $supplier_form_kz_name = $request->file('supplier_form_kz')->getClientOriginalName();
        $supplier_form_ru_name = $request->file('supplier_form_ru')->getClientOriginalName();
        $supplier_form_en_name = $request->file('supplier_form_en')->getClientOriginalName();

        $supplier_form_kz = Storage::putFileAs('', $request->file('supplier_form_kz'), $supplier_form_kz_name);
        $supplier_form_ru = Storage::putFileAs('', $request->file('supplier_form_ru'), $supplier_form_ru_name);
        $supplier_form_en = Storage::putFileAs('', $request->file('supplier_form_en'), $supplier_form_en_name);

        $supplierForm = new SupplierForm;
        $supplierForm->supplier_form_kz=$supplier_form_kz;
        $supplierForm->supplier_form_ru=$supplier_form_ru;
        $supplierForm->supplier_form_en=$supplier_form_en;

        $supplierForm->save();

        Session::flash('success','Файлы анкеты для поставщиков успешно загружены.');
        return redirect()->route('admin-supplier-form.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierForm  $supplierForm
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierForm $supplierForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupplierForm  $supplierForm
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierForm $supplierForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierForm  $supplierForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplierForm = SupplierForm::find($id);
        
        if($request->file('supplier_form_kz')){
            Storage::disk('public')->delete($supplierForm->supplier_form_kz);
            $supplier_form_kz_name = $request->file('supplier_form_kz')->getClientOriginalName();
            $supplier_form_kz = Storage::putFileAs('', $request->file('supplier_form_kz'), $supplier_form_kz_name);
            $supplierForm->supplier_form_kz=$supplier_form_kz;
        }
        if($request->file('supplier_form_ru')){
            Storage::disk('public')->delete($supplierForm->supplier_form_ru);
            $supplier_form_ru_name = $request->file('supplier_form_ru')->getClientOriginalName();
            $supplier_form_ru = Storage::putFileAs('', $request->file('supplier_form_ru'), $supplier_form_ru_name);
            $supplierForm->supplier_form_ru=$supplier_form_ru;
        }
        if($request->file('supplier_form_en')){
            $supplier_form_en_name = $request->file('supplier_form_en')->getClientOriginalName();
            $supplier_form_en = Storage::putFileAs('', $request->file('supplier_form_en'), $supplier_form_en_name);
            Storage::disk('public')->delete($supplierForm->supplier_form_en);
            $supplierForm->supplier_form_en=$supplier_form_en;
        }

        $supplierForm->save();

        Session::flash('success','Новый(-ые) файл(-ы) анкеты для поставщиков успешно загружены.');
        return redirect()->route('admin-supplier-form.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierForm  $supplierForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierForm $supplierForm)
    {
        //
    }
}
