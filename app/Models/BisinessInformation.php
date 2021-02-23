<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BisinessInformation extends Model
{
    use HasFactory;
    protected $fillable=['ocop_id'];
    public function orgBasicInfor(){
        return $this->hasOne(OrgBasicInfor::class);
    }
    public function Detail(){
        return $this->hasOne(OrgDetail::class);
    }
    public function contacts(){
        return $this->hasMany(OrgContact::class);
    }
    public function news(){
        return $this->hasMany(OrgNews::class);
    }
    public function medias(){
        return $this->hasMany(OrgMedia::class);
    }
    public function ocop(){
        return $this->belongsTo(Ocop::class);
    }
}
