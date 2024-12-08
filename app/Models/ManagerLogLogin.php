<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerLogLogin extends Model
{
    use HasFactory;

    protected $table = 'propertymanagerlog';

    public function login(){
        return $this->belongsTo(Login::class,'PropertyManagerId','Id');
    }
}
