<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgMajors extends Model
{
    use HasFactory;
    protected $fillable=['list_majors','relation_org_majors','org_bisiness_infor_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformation::class);
    }
    public function basicInfors(){
        return $this->belongsToMany(OrgBasicInfor::class);
    }
}
