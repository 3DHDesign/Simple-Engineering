<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'description', 'image', 'link'];

    protected $searchableFields = ['*'];
}
