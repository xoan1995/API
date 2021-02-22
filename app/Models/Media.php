<?php

namespace App\Models;

use Database\Seeders\BisinessInformationSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Media extends Model
{
    use HasFactory;
    protected $fillable=['url','link','size','trạng thái','bisinessInformation_id'];
    public function bisinessInformation(){
        return $this->belongsTo(BisinessInformationSeeder::class);
    }
    public function type(){
        return $this->hasOne(Type::class);
    }
}