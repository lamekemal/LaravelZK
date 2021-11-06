<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDashboard extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function surveys(){
        return $this-> hasMany(Survey::class);
    }
}
