<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'id',
        'name',
        'short_description',
        'description',
        'breadcrumb_image',
        'main_image',
        'slug',
    ];

    protected $searchableFields = ['*'];

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
