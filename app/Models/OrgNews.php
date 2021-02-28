<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgNews extends Model
{
    use HasFactory;
    protected $fillable=['news_category','detailed_article','org_bisiness_infor_id'];
    public function orgBisinessInfor(){
        return $this->belongsTo(OrgBisinessInfor::class);
    }
}
