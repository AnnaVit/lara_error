<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'title' => 'Редактировать новость',
            'route' => 'admin::news::index',
        ],
        [
            'title' => 'Добавить категорию',
            'route' => 'admin::news::categoryAdd',
        ],
    ];


    public function index()
    {
        return view('admin.index', ['menu' => $this->adminMenu]);

    }

    public function create(Request $request)
    {
        return view('admin.create');
    }

    public function save()
    {
        //логика сохранения
        return redirect()->route('admin::news::create');

    }


    public function update()
    {
        echo 'I,m update';
    }

    public function delete()
    {
        echo 'I,m delete';
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

