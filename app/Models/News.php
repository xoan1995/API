<?php

namespace App\Models;

use Database\Seeders\BisinessInformationSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=['danh mục tin tức','bài viết chi tiết','bisinessInformation_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformationSeeder::class);
    }
}
