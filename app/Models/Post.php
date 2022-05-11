<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use HasFactory;

    use sortable;

    protected $fillable = [
        'title',
        'description',
    ];

    public $sortable = ['id', 'title', 'description'];

}
