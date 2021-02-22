<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInformation extends Model
{
    use HasFactory;
    protected $fillable=['viName','enName','taxCode','address','city_id','district_id','sub_district_id','representative','phone','email','civilScale','founding','dateOfChangeofBusinessLicense','status','bisinessInformation_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformation::class);
    }
    public function city(){
        return $this->hasOne(City::class);
    }
    public function district(){
        return $this->hasOne(District::class)
    }
}
