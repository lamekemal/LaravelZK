<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'description', 'images','user_id', 'validator', 'status','code'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function questions(){
        return $this-> hasMany(Question::class);
    }
}
