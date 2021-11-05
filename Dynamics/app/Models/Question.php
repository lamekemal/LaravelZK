<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questionnaire(){
        return $this-> BelongsTo(Questionnaire::class);
    }


    public function reponses(){
        return $this-> hasMany(Reponse::class);
    }
}
