<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifyDetail extends Model
{
    use HasFactory;
    protected $table = 'NotifyDetails';

    public function renterinfo(){
        return $this->belongsTo(RenterInfo::class,'renter_id','Login_ID');
    }

    public function propertyinfo(){
        return $this->belongsTo(PropertyInfo::class,'property_id','Id');
    }
}
