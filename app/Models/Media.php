<?php

namespace App\Models;

use Database\Seeders\BisinessInformationSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Media extends Model
{
    use HasFactory;
    protected $fillable=['org_bisiness_infor_id'];
    public function orgBisinessInfor(){
        return $this->belongsTo(OrgBisinessInfor::class);
    }
    public function type(){
        return $this->hasOne(Type::class);
    }
}