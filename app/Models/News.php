<?php


namespace App\Models;


class News
{

    public function getByCategoryId(int $categoryId)
    {
        $news = \DB::table('news')
            ->where('news_category', $categoryId)
            ->pluck('title','id');
        return $news;
    }

    public function getArticle($id)
    {
        $content = \DB::table('news')
            ->where('id', $id)
            ->pluck('content')
            ->first();
        return $content;
    }

}
