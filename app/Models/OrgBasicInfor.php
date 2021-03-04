<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgBasicInfor extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'name_en',
        'code_tax',
        'address',
        'province_id',
        'district_id',
        'ward_id',
        'representative',
        'phone',
        'email',
        'civil_scale',
        'founding',
        'org_created',
        'status',
        'org_bisiness_infor_id'
    ];

    public function orgBisinessInfor()
    {
        return $this->belongsTo(OrgBisinessInfor::class);
    }
    public function district()
    {
        return $this->hasOne(District::class);
    }
    public function majors()
    {
        return $this->belongsToMany(OrgMajors::class);
    }
}
