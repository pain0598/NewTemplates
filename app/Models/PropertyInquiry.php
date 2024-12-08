<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyInquiry extends Model
{
    use HasFactory;

    protected $table = 'propertyinquiry';
    
    protected $guarded = [];

    public function propertyinfo(){
        return $this->belongsTo(PropertyInfo::class,'PropertyId','Id');
    }

    public function login(){
        return $this->belongsTo(Login::class,'UserId','Id');
    }




}
