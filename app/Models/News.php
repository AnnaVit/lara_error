<?php


namespace App\Models;


class News
{
    private $news = [
        1 => [
            'id' => 1,
            'title' => 'news 1',
            'content' => 'news 1 content',
            'category_id' => 1,
        ],

        2 => [
            'id' => 2,
            'title' => 'news 2',
            'content' => 'news 2 content',
            'category_id' => 2,

        ],

        3 => [
            'id' => 3,
            'title' => 'news 3',
            'content' => 'news 3 content',
            'category_id' => 3,

        ],

        4 => [
            'id' => 4,
            'title' => 'news 4',
            'content' => 'news 4 content',
            'category_id' => 2,

        ],

        5 => [
            'id' => 5,
            'title' => 'news 5',
            'content' => 'news 5 content',
            'category_id' => 1,

        ]
    ];

    public function getByCategoryId(int $categoryId)
    {
        $news = [];
        foreach ($this->news as $id => $item){
            if($item['category_id'] == $categoryId){
                $news[$id] = $item;
            }
        }
        return $news;
    }

    public function getArticle($id)
    {
        return $this->news[$id]['content'];
    }

    public function getAll(){
        return $this->news;
    }
}
