<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question(){
        return $this-> BelongsTo(Question::class);
    }
}
