<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenterInfo extends Model
{
    use HasFactory;
    protected $table = 'Renter_info';
    public $timestamps = false;

    protected $guarded = [];

    protected $dates = ['Emove_date', 'Lmove_date','Reminder_date'];


    public function renterupdatehistory(){
        return $this->hasMany(RenterUpdateHistory::class,'user_id','Id');
    }

    public function notifydetail(){
        return $this->hasMany(NotifyDetail::class,'renter_id','Login_ID');
    }

    public function login(){
        return $this->belongsTo(Login::class,'Login_ID','Id');
    }

    public function adminDetail()
    {
        return $this->belongsTo(AdminDetail::class, 'added_by', 'admin_detail_id');
    }

}
