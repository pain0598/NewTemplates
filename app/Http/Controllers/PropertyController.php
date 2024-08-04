<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\PropertyInfo;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    //

    public function listManager()
    {
        $data = Login::where('user_type','M')->where('Status','1')
        ->whereHas('propertyinfo', function($query) {
            $query->where('Status', '1');
        })
        ->with('propertyinfo')
        ->first();
        dd($data);
        $asdf = '1,2,3';
        $query = Login::distinct()
            ->select('Login.*', 'PINFO1.PropertyName')
            ->leftJoin(DB::raw('(SELECT PINFO.UserId, PINFO.PropertyName, PINFO.Company, PINFO.CityId FROM PropertyInfo AS PINFO) AS PINFO1'), 'Login.Id', '=', 'PINFO1.UserId')
            ->whereIn('PINFO1.CityId', explode(',', $asdf));
            dd($query);
        return view('resources.listManager');
    }
}
