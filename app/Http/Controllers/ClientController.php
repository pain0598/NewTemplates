<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminDetail;
use App\Models\RenterInfo;
use App\Models\SchoolManagement;
use App\Models\RenterUpdateHistory;
use App\Models\PetsManagement;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\NotifyDetail;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function renterInfoUpdateHistory()
    {
        $udpatehistorydata = RenterUpdateHistory::with('admindetailId')->with('renterinfoId')->get();
        dd($udpatehistorydata);
        return view('client.renterInfoUpdateHistory');
    }

    public function schoolManagement()
    {
        $SchoolManagement = SchoolManagement::where('status', 1)->get();
        return view('property.schoolManagement', ['data' => $SchoolManagement]);
    }

    public function schoolStore(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'school_type' => 'required|in:Elementary,Middle,High,District',
        ]);

        SchoolManagement::create([
            'school_name' => $request->school_name,
            'school_type' => $request->school_type,
            'added' => Carbon::now(),
            'modified' => Carbon::now(),

        ]);


        return response()->json(['message' => 'School information submitted successfully!']);
    }

    public function schoolDelete(Request $request)
    {
        $id = $request->id;
        SchoolManagement::where('school_id', $id)->delete();

        return response()->json(['message' => 'Selected records have been deleted successfully.']);
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        SchoolManagement::whereIn('school_id', $ids)->delete();

        return response()->json(['message' => 'Selected records have been deleted successfully.']);
    }


    public function petsManagement()
    {
        $data = PetsManagement::all();
        return view('property.petsManagement', ['data' => $data]);
    }

    public function notifyHistory(Request $request)
    {
        $NoOfRcord = 10; // Number of records to fetch
        $Start = 20; // Offset value

        $fetch_history = NotifyDetail::with([
            'renterinfo' => function ($query) {
                $query->select('Login_ID', DB::raw("CONCAT(Firstname, ' ', Lastname) as renter_name"));
            },
            'renterinfo.login' => function ($query) {
                $query->select('Id', 'UserName as manager_name');
            },
            'propertyinfo' => function ($query) {
                $query->select('Id', 'PropertyName as property_name');
            },
            'propertyinfo.login' => function ($query) {
                $query->select('Id');
            }
        ])
            ->select('NotifyDetails.*')
            ->limit($NoOfRcord)
            ->offset($Start)
            ->get();
            dd($fetch_history);
        return view('client.notifyHistory');
    }
}
