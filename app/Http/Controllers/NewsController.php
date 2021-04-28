<?php


namespace App\Http\Controllers;

use App\Models\News;


class NewsController extends Controller
{
    public $categories = [
        1 => 'Здоровье',
        2 => 'IT',
        3 => 'Спорт',
        4 => 'Все новости',
    ];



    public function categories(){
        return view('news.index', ['categories' => $this->categories]);

    }

    public function news(string $category){
        if($category == 4){
            $news = (new News())->getAll();
        }else{
            $news = (new News())->getByCategoryId($category);
        }
        return view('news.news', ['news' => $news]);

    }

    public function article(int $id){
        $article = (new News())->getArticle($id);
        return view('news.article', ['article' => $article]);

    }

    public function allCategories()
    {
        return $this->categories;
    }
}
