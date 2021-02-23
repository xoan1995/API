<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInformation extends Model
{
    use HasFactory;
    protected $fillable=['city_id','district_id','ward_id','org_bisiness_infor_id'];
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
