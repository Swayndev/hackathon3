<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Animal;

class Owners extends Model
{
    use HasFactory;

    public function hasAnimal()
    {
        return $this->hasMany(Animal::class);
    }

}
