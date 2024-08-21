<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Relation avec topic : une catégorie a plusieurs topics
     */
    public function topics(){
        return $this->hasMany(Topic::class);
    }
}
