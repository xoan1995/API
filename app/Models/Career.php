<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable=['list_major','relation_org_major','org_bisinessInfor_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformation::class);
    }
}
