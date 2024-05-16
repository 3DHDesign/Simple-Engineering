<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'slug',
        'main_image',
        'breadcrumb_image',
        'status',
        'fb_upload',
        'isUploaded',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
        'fb_upload' => 'boolean',
        'isUploaded' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
