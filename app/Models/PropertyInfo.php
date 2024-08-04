<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyInfo extends Model
{
    use HasFactory;

    protected $table = 'PropertyInfo';

    public function notifydetail(){
        return $this->hasMany(NotifyDetail::class,'property_id','Id');
    }

    public function login(){
        return $this->belongsTo(Login::class,'UserId','Id');
    }
}
