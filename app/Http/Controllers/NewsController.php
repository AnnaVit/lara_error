<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;


class NewsController extends Controller
{


   /* public function getCategories()
    {
        $categories = \DB::table('category')->pluck('name_category', 'id');
        return $categories;

    }*/


    public function categories(Category $categories){

        $data = [
            'title' => 'TEST ADD title',
            'content' => 'TEST ADD content',
            'publish_date' => date('Y-m-d'),
            'news_category' => 6,
            'news_source' => 1,
        ];

        /*$model = new News();
        $model->title = $data['title'];
        $model->content = $data['content'];
        $model->publish_date = $data['publish_date'];
        $model->news_category = $data['news_category'];
        $model->news_source = $data['news_source'];
        $model->save();
        exit;*/

        /*
        $model = News::find(6);
        $model->title = 'ADD TITLE V2';
        $model->save();
        exit;
        */

        /*$model = News::find(6);
        $model->delete();
        exit;
        */

        /*$model = new News();
        $model->fill($data);
        $model->save();
        exit;*/


        /*$result  = News::all();
        //dd($result);
        foreach ($result as $item){
            dump($item->title);
        }
        */
        //$categories = $this->getCategories();
        //$categories = (new Category())->getCategories();
        return view('news.index', ['categories' => $categories->getCategories()]);

    }

    public function news(News $news, string $category){ //сделай инъекцию зависимостей

        //$news = News::query()
        //            ->where('news_category', $category)
        //            ->get();
        //dd($news);
        //$news = (new News())->getByCategoryId($category);
        //return view('news.news', ['news' => $news, 'idCategory' => $category]);
        return view('news.news',
            ['news' => ($news->getByCategoryId($category)),
                'idCategory' => $category]);

    }

    public function article(News $news, $id){

        //dd($news->news_category);
        //$article = News::find($id);
        //dd($article->category->news);

        //$cat = Category::find(1);
        //dd($cat);
        //dd($article);
        //$article = (new News())->getArticle($id);
        //return view('news.article', ['article' => $article]);
        return view('news.article', ['article' => ($news->getArticle($id))]);

    }



}
