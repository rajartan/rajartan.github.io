<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $guarder = ['id'];

    protected $with = ['category'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
