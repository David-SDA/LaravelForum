<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'topic_id'
    ];

    /**
     * Relation avec user : un post appartient à un seul user
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec topic : un post appartient à un seul topic
     */
    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
