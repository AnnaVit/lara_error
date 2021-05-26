<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;


class NewsController extends Controller
{


    public function categories(Category $categories)
    {

        return view('news.index', ['categories' => $categories->getCategories()]);

    }

    public function news(News $news, string $category){

        return view('news.news',
            ['news' => ($news->getByCategoryId($category)),
                'idCategory' => $category]);

    }

    public function article(News $news, $id){

        return view('news.article', ['article' => ($news->getArticle($id))]);

    }



}
