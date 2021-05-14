<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'content',
        'publish_date',
        'news_category',
        'news_source',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'news_category');//у одной новости одна категория
    }

    public function source()
    {
        return $this->belongsTo(Source::class, 'news_source');//у одной новости одна категория
    }

    public function getAll()
    {
        return $this::all();
    }

    public function getByCategoryId(int $categoryId)
    {
        return $this::query()
            ->where('news_category', $categoryId)
            ->get();
    }

    public function getArticle($id)
    {
        return $this::find($id);
    }

    public function saveNews($id, $data){
        $this::findOrNew($id)
            ->fill($data)
            ->save();
    }
}
