<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BisinessInformation extends Model
{
    use HasFactory;
    protected $fillable=['ocop_id'];
    public function basicInformation(){
        return $this->hasOne(BasicInformation::class);
    }
    public function Detail(){
        return $this->hasOne(Detail::class);
    }
    public function contacts(){
        return $this->hasMany(Contact::class);
    }
    public function news(){
        return $this->hasMany(News::class);
    }
    public function medias(){
        return $this->hasMany(Media::class);
    }
    public function ocop(){
        return $this->belongsTo(Ocop::class);
    }
}
