<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['org_bisiness_infor_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformation::class);
    }
}
