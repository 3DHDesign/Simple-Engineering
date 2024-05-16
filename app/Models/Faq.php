<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['service_id', 'title', 'description', 'order_by'];

    protected $searchableFields = ['*'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
