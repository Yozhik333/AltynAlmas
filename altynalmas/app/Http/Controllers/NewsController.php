<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
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
        $news = News::all()->reverse();
        return view('admin-news', compact('news'));
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
            'date'=>'required|string|max:191|min:6',
            'title_kz'=>'required|string|max:191|min:1',
            'title_ru'=>'required|string|max:191|min:1',
            'title_en'=>'required|string|max:191|min:1',
            'text_kz'=>'required|string|max:60000|min:1',
            'text_ru'=>'required|string|max:60000|min:1',
            'text_en'=>'required|string|max:60000|min:1',
        ]);
        
        $img_url = $request->file('img_url')->store('');
        
        $news = new News;
        $news->img_url=$img_url;
        $news->date=$request->date;
        $news->title_kz=$request->title_kz;
        $news->title_ru=$request->title_ru;
        $news->title_en=$request->title_en;
        $news->text_kz=$request->text_kz;
        $news->text_ru=$request->text_ru;
        $news->text_en=$request->text_en;
        $news->is_active=$request->is_active;
        $news->show_on_main=$request->show_on_main;

        $news->save();

        Session::flash('success','Новость успешно добавлена.');
        return redirect()->route('admin-news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function showOnMain()
    {
        $news = News::all()->reverse();
        return view('index', compact('news'));
    }

    public function showOnNewsPage()
    {
        $news = News::all()->reverse();
        return view('investors-and-media', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $news = News::find($id);
        return view('admin-news-edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $upload = $request->file('img_url');
        // $path = $upload->store('news');

        $updateNews = News::find($id);

        // var_dump($request); die;
        if($request->file('img_url')){
            $this->validate($request,[
                'img_url' => 'required|file|max:50000',
                'date'=>'required|string|max:191|min:6',
                'title_kz'=>'required|string|max:191|min:1',
                'title_ru'=>'required|string|max:191|min:1',
                'title_en'=>'required|string|max:191|min:1',
                'text_kz'=>'required|string|max:60000|min:1',
                'text_ru'=>'required|string|max:60000|min:1',
                'text_en'=>'required|string|max:60000|min:1',
            ]);
            $img_url = $request->file('img_url')->store('');
            //$correct_img_url = str_replace('public/', '', $img_url);
            Storage::disk('public')->delete($updateNews->img_url);

            $updateNews->img_url=$img_url;
            $updateNews->date=$request->date;
            $updateNews->title_kz=$request->title_kz;
            $updateNews->title_ru=$request->title_ru;
            $updateNews->title_en=$request->title_en;
            $updateNews->text_kz=$request->text_kz;
            $updateNews->text_ru=$request->text_ru;
            $updateNews->text_en=$request->text_en;
            $updateNews->is_active=$request->is_active;
            $updateNews->show_on_main=$request->show_on_main;

            $updateNews->save();

            Session::flash('success','Новость успешно отредактирована.');
            return redirect()->route('admin-news.index');
        } else {
            $this->validate($request,[
                'date'=>'required|string|max:191|min:6',
                'title_kz'=>'required|string|max:191|min:1',
                'title_ru'=>'required|string|max:191|min:1',
                'title_en'=>'required|string|max:191|min:1',
                'text_kz'=>'required|string|max:60000|min:1',
                'text_ru'=>'required|string|max:60000|min:1',
                'text_en'=>'required|string|max:60000|min:1',
            ]);
            $updateNews->date=$request->date;
            $updateNews->title_kz=$request->title_kz;
            $updateNews->title_ru=$request->title_ru;
            $updateNews->title_en=$request->title_en;
            $updateNews->text_kz=$request->text_kz;
            $updateNews->text_ru=$request->text_ru;
            $updateNews->text_en=$request->text_en;
            $updateNews->is_active=$request->is_active;
            $updateNews->show_on_main=$request->show_on_main;

            $updateNews->save();

            Session::flash('success','Новость успешно отредактирована.');
            return redirect()->route('admin-news.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $deleteNews = News::find($id);
        Storage::disk('public')->delete($deleteNews->img_url);

        $deleteNews->delete();

        Session::flash('success','Новость удалена успешно.');
        return redirect()->route('admin-news.index');
    }
}
