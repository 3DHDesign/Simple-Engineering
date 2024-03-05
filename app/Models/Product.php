<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'short_description',
        'breadcrumb_image',
        'main_image',
        'image',
        'description',
        'slug',
    ];

    protected $searchableFields = ['*'];
}
