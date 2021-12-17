<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatTask extends Model
{
    use HasFactory;
    public function tareaReport(){
        return  $this->belongsTo(TareaReport::class);
      }
}
