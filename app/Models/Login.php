<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $table = 'Login';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'Id';

    // Define custom timestamps
    protected $dates = ['CreatedOn', 'ModifiedOn'];

    public function renterinfo(){
        return $this->hasOne(RenterInfo::class,'Login_ID','Id');
    }

    public function propertyinfo(){
        return $this->hasMany(PropertyInfo::class,'UserId','Id');
    }
}
