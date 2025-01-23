<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'categories_name',
        'is_deleted'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
