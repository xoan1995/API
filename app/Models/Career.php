<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable=['danh sách ngành nghề','quan hệ ngành nghề vs doanh nghiệp','bisinessInformation_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformation::class);
    }
}
