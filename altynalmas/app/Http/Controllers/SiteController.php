<?php

namespace App\Http\Controllers;

use App\Akbakay;
use App\Aktogay;
use App\Board;
use App\BoardOfDirectors;
use App\VicePresident;
use App\Coach;
use App\DigitalMine;
use App\Ecology;
use App\Education;
use App\LocalCommunity;
use App\MineToMill;
use App\News;
use App\Newspaper;
use App\Safety;
use App\SanaSafety;
use App\InsideDoc;
use App\SupplierForm;
use App\Vacancy;
use App\Year;
use App\Glossary;
use App\Category;
use App\Gallery;

use Illuminate\Http\Request;

use Config;

class SiteController extends Controller
{
    
    public function showNewsOnMain()
    {
        $newses = News::all();
        $news = $newses->sortByDesc('date');

        $news->values()->all();
        return view('index', compact('news'));
    }

    public function showNewsOnNewsPage()
    {
        $newses = News::all();
        $news = $newses->sortByDesc('date');

        $news->values()->all();

        return view('investors-and-media', compact('news'));
    }

    public function openNews($id)
    {

        $news = News::all();
        return view('investors-news', compact('news'));

    }

    public function history()
    {
        $years = Year::all();
        return view('history', compact('years'));
    }

    public function governance()
    {
        $board = Board::all();
        $boardOfDirectors = BoardOfDirectors::all();
        $presidents = VicePresident::all();
        return view('governance', compact('board', 'boardOfDirectors', 'presidents'));
    }

    public function akbakay()
    {
        $akbakay = Akbakay::all();
        return view('akbakay', compact('akbakay'));
    }

    public function aktogay()
    {
        $aktogay = Aktogay::all();
        return view('aktogay', compact('aktogay'));
    }

    public function digitalMine()
    {
        $digitalMine = DigitalMine::all();
        return view('digital-mine', compact('digitalMine'));
    }

    public function mineToMill()
    {
        $mineToMill = MineToMill::all();
        return view('mine-to-mill', compact('mineToMill'));
    }

    public function sanaSafety()
    {
        $sanaSafety = SanaSafety::all();
        return view('sana-safety', compact('sanaSafety'));
    }

    public function developmentSafety()
    {
        $developmentSafety = Safety::all();
        return view('development-safety', compact('developmentSafety'));
    }

    public function developmentEcology()
    {
        $developmentEcology = Ecology::all();
        return view('development-ecology', compact('developmentEcology'));
    }

    public function developmentLocalCommunities()
    {
        $developmentLocalCommunities = LocalCommunity::all();
        return view('development-local-communities', compact('developmentLocalCommunities'));
    }

    public function vacancies()
    {
        $vacancies = Vacancy::all()->reverse();
        return view('vacancies', compact('vacancies'));
    }

    public function studyingPrograms()
    {
        $education = Education::all();
        return view('studying-programs', compact('board', 'education'));
    }

    public function corporateNewspaper()
    {
        $corporateNewspaper = Newspaper::all()->reverse();
        return view('corporate-newspaper', compact('corporateNewspaper'));
    }

    public function gallery()
    {
        $categories = Category::all();        
        if ($categories != null) {
            foreach ($categories as $category) {
                $category->galleries = Gallery::where('category_id', $category->id)->get()->reverse();                
            }
        }        
        return view('gallery', 
        ['categories' => $categories]);
    }

    public function teamOfTrainers()
    {
        $trainers = Coach::all();
        return view('team-of-trainers', compact('trainers'));
    }

    public function insideDocs()
    {
        $insideDocs = InsideDoc::all();
        return view('suppliers-inside-doc', compact('insideDocs'));
    }

    public function suppliers()
    {
        $suppliersForm = SupplierForm::all();
        return view('suppliers-form', compact('suppliersForm'));
    }

    public function glossary()
    {
        $glossary = Glossary::all();
        return view('glossary', compact('glossary'));
    }
	
	public function search()
    {
        $lang = Config::get('app.locale');
        if ($lang == 'en') {
            $news = News::select('title_en as name','id')->get();
            $years = Year::select('text_en as name', 'id')->get();
            $akbakay = Akbakay::select('title_en as name', 'id')->get();
            $aktogay = Aktogay::select('title_en as name', 'id')->get();
        }
        else if ($lang == 'kz') {
            $news = News::select('title_kz as name', 'id')->get();
            $years = Year::select('text_kz as name', 'id')->get();
            $akbakay = Akbakay::select('title_en as name', 'id')->get();
            $aktogay = Aktogay::select('title_en as name', 'id')->get();
        }
        else {
            $news = News::select('title_ru as name','id')->get();
            $years = Year::select('text_ru as name', 'id')->get();
            $akbakay = Akbakay::select('title_en as name', 'id')->get();
            $aktogay = Aktogay::select('title_en as name', 'id')->get();
        }

        $content = '';
        foreach ($news as $itemNews) {
            $content .= '<option data-value="/investors-news/'.$itemNews->id.'" value="'.$itemNews->name.'"></option>';
        }

        foreach ($years as $year) {
            $content .= '<option data-value="/history" value="'.$year->name.'"></option>';
        }

        foreach ($akbakay as $itemAkbakay) {
            $content .= '<option data-value="/akbakay" value="'.$itemAkbakay->name.'"></option>';
        }

        foreach ($aktogay as $itemAktogay) {
            $content .= '<option data-value="/aktogay" value="'.$itemAktogay->name.'"></option>';
        }
        
        return $content;        
    }
}
