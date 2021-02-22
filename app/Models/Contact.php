<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['người liên hệ','sđt 1','sđt 2','email','địa chỉ','trạng thái','bisinessInformation_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformation::class);
    }
}
