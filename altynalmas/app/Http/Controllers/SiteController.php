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
        $news = News::all()->reverse();
        return view('index', compact('news'));
    }

    public function showNewsOnNewsPage()
    {
        $news = News::all()->reverse();
        return view('investors-and-media', compact('news'));
    }

    public function openNews($id)
    {
        $news = News::find($id);
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
	
	public function search($search)
    {
        $lang = Config::get('app.locale');
        if ($lang == 'en') {
            $news = News::select('title_en as name','id')->where('title_en', 'LIKE', "%$search%")->get();
            // $years = Year::select()->where('name', 'LIKE', "%$search%")->get();
        }
        else if ($lang == 'kz') {
            $news = News::select('title_kz as name', 'id')->where('title_kz', 'LIKE', "%$search%")->get();
        }
        else {
            $news = News::select('title_ru as name','id')->where('title_ru', 'LIKE', "%$search%")->get();
        }
        
        return response()->json($news, 200);        
    }
}
