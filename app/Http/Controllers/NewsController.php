<?php


namespace App\Http\Controllers;

use App\Models\News;


class NewsController extends Controller
{

    public function getCategories()
    {
        $categories = \DB::table('category')->pluck('name_category', 'id');
        return $categories;

    }


    public function categories(){

        $categories = $this->getCategories();
        return view('news.index', ['categories' => $categories]);

    }

    public function news(string $category){

        $news = (new News())->getByCategoryId($category);
        return view('news.news', ['news' => $news, 'idCategory' => $category]);

    }

    public function article($id){
        $article = (new News())->getArticle($id);
        return view('news.article', ['article' => $article]);

    }

}
