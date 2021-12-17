<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaReport extends Model
{
    use HasFactory;

    public function catTasks(){
       return $this->hasMany(CatTask::class);
    }
}
