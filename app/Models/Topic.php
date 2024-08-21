<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'locked',
        'user_id',
    ];

    /**
     * Relation avec User : un topic appartient à un utilisateur
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec post : un topic peut avoir plusieurs post
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

    /**
     * Relation avec category : un topic à une seul catégorie
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
