<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Controllers\NewsController as ForNews;


class NewsController extends Controller
{

    private $adminMenu = [
        [
            'title' => 'Добавить новость',
            'route' => 'admin::news::create'
        ],
        [
            'title' => 'Добавить категорию',
            'route' => 'admin::news::categoryAdd',
        ],
    ];


    public function index(News $news)
    {
        return view('admin.index', ['menu' => $this->adminMenu, 'news' => $news->getAll()]);

    }

    public function create()
    {
        return view('admin.create');
    }

    public function save(Request $request, News $news)
    {
        $news->saveNews($request->article["id"], $request->article);
        return redirect()->route('admin::news::create');

    }

    public function update(Request $request, News $news)
    {
        return view('admin.create',['news' => $news->getArticle($request->news)]);
    }

    public function delete(Request $request, News $news)
    {
        $news::destroy($request->article["id"]);
        return redirect()->route('admin::news::index');
    }

    public function categoryAdd()
    {
        return view('admin.category');
    }


    public function addCategory(Request $request)
    {
        $categories = (new ForNews())->allCategories();
        $categories[] = $request['category'];
        return redirect()->route('admin::news::categoryAdd');

    }


}

