<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'titre',
        'text',
        'texte',
        'user_id'
    ];

    public function blogHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
