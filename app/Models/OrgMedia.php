<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgMedia extends Model
{
    use HasFactory;
    protected $fillable=['url','link','logo','avatar','img_supple','img_certificate','size','status','org_bisiness_infor_id'];
    public function orgBisinessInfor(){
        return $this->belongsTo(OrgBisinessInfor::class);
    }
    public function bisinessInfors(){
        return $this->belongsToMany(OrgBisinessInfor::class);
    }
}
