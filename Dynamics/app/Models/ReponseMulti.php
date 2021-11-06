<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReponseMulti extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function survey(){
        return $this->belongsTo(Survey::class);
    }
}
