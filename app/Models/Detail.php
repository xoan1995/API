<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable=['description','about','org_bisiness_infor_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformation::class);
    }
}
