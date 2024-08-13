<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
      'level'
    ];

    public function classes() : HasOne{
        return $this->hasOne(Classes::class);
    }
}
