<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenterUpdateHistory extends Model
{
    use HasFactory;
    protected $table = 'Renter_Update_History';


    public function admindetailId(){
        return $this->belongsTo(AdminDetail::class,'admin_id','admin_detail_id');
    }

    public function renterinfoId(){
        return $this->belongsTo(RenterInfo::class,'user_id','Id');
    }


}
