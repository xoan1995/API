<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgBisinessInfor extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function basicInfor(){
        return $this->hasOne(OrgBasicInfor::class);
    }
    public function detail(){
        return $this->hasOne(OrgDetail::class);
    }
    public function contacts(){
        return $this->hasMany(OrgContact::class);
    }
    public function news(){
        return $this->belongsToMany(OrgNews::class);
    }
    public function medias(){
        return $this->belongsToMany(OrgMedia::class);
    }
}
