<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInformation extends Model
{
    use HasFactory;
    protected $fillable=['name','name_en','tax_code','address','city_id','district_id','sub_district_id','representative','phone','email','civilScale','founding','org_created','status','org_bisiness_infor_id'];
    public function bisinessInformation(){
        return $this->belongsTo(OrgBisinessInfor::class);
    }
    public function city(){
        return $this->hasOne(City::class);
    }
    public function district(){
        return $this->hasOne(District::class);
    }   
}
