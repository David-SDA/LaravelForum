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
}
