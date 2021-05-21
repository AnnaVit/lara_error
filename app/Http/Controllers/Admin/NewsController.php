<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\AdminNewsSaveRequest;
use App\Http\Controllers\NewsController as ForNews;
use Illuminate\Support\Facades\Validator;


class NewsController extends Controller
{

    private $adminMenu = [
        [
            'title' => 'Добавить новость',
            'route' => 'admin::news::create'
        ],
        [
            'title' => 'Добавить категорию',
            'route' => 'admin::news::category',
        ],
    ];


    public function index(News $news)
    {
        return view('admin.index', ['menu' => $this->adminMenu, 'news' => $news->getAll()]);
    }

    public function create()
    {
        $category = ((new Category())->getCategories());
        return view('admin.create', ['categories' => $category]);
    }

    public function save(AdminNewsSaveRequest $request, News $news)
    {
        $news->saveNews($request->article["id"], $request->article);
        return redirect()->route('admin::news::create');
    }

    public function update(Request $request, News $news)
    {
        $category = ((new Category())->getCategories());
        return view('admin.create',['news' => $news->getArticle($request->news),
            'categories' => $category]);
    }

    public function delete(Request $request, News $news)
    {
        $news::destroy($request->article["id"]);
        return redirect()->route('admin::news::index');
    }

}

