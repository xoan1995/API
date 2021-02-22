<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocop extends Model
{
    use HasFactory;
    public function bisinessInformations(){
        return $$this->hasMany(BisinessInformation::class);
    }
}
