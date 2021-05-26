<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'name_category',
    ];

    protected $table = 'category';

    public function news()
    {
        return $this->hasMany(News::class, 'news_category');//одна категория к многим новостям
    }

    public function getCategories()
    {
        return $this::query()
            ->pluck('name_category', 'id');

    }

    public function saveCategory($id, $data)
    {
        $this::findOrNew($id)
            ->fill(['name_category' => $data->name_category])
            ->save();
    }

    public function deleteCategory($category)
    {
        $this::destroy($category);
    }

}
