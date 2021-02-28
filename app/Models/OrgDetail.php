<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgDetail extends Model
{
    use HasFactory;
    protected $fillable=['description','about','org_bisiness_infor_id'];
    public function orgBisinessInfor(){
        return $this->belongsTo(OrgBisinessInfor::class);
    }
}
