<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgContact extends Model
{
    use HasFactory;
    protected $fillable=['contact','phone_1','phone_2','email','address','status','org_bisiness_infor_id'];
    public function orgBisinessInfor(){
        return $this->belongsTo(OrgBisinessInfor::class);
    }
}
