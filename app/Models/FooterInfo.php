<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterInfo extends Model
{
    use HasFactory;

    protected $table ="footer_infos";
    
    protected $fillable = ['short_description', 'address', 'email', 'phone', 'copyright'];
}
