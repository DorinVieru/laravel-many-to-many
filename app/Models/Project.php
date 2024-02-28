<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // INDICO I CAMPI FILLABLE
    protected $fillable = ['title', 'description', 'cover_image', 'slug', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}