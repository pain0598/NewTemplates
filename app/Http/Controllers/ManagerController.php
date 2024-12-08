<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminDetail;
use App\Models\Login;
use App\Models\PropertyInfo;
use Carbon\Carbon;
use App\Models\RenterInfo;
use App\Models\ManagerLogLogin;
use Yajra\DataTables\DataTables;
class ManagerController extends Controller
{
    public function addManager()
    {
        $agent = AdminDetail::all();
        return view('resources.addManager', ['agents' => $agent]);
    }

    public function createManager(Request $request)
    {

        $validatedData = $request->validate([
            'userName' => 'required|string',
            'emailId' => 'required|email|max:255|unique:Login,Email',
            'password' => 'required|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);
        // Save the data to the database
        $login = new Login();
        $login->UserName = $request->input('userName');
        $login->Password = $request->input('password');
        $login->Email = $request->input('emailId');
        $login->CreatedOn = Carbon::now();
        $login->ModifiedOn = Carbon::now();
        $login->Status = '1';
        $login->UserIp = "127.0.0.1:8000";
        $login->user_type = 'M';
        $login->acc_to_craiglist = 'No';
        $login->save();

        return response()->json(['message' => 'Form submitted successfully']);
    }

    public function addUser()
    {
        $agent = AdminDetail::all();
        return view('client.addUser', ['agents' => $agent]);
    }

    public function createRenter(Request $request)
    {

        $validatedData = $request->validate([
            'assignAgent' => 'required',
            'userName' => 'required|string',
            'emailId' => 'required|email|max:255|unique:Login,Email',
            'password' => 'required|same:password_confirmation',
            'password_confirmation' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'cell' => 'required',
            'currentAddress' => 'required|string',
            'state' => 'required',
            'city' => 'required',
            'zipCode' => 'required',
        ]);

        $login = Login::create([
            'UserName' => $request->userName,
            'Password' => $request->password,
            'Email' => $request->emailId,
            'CreatedOn' => now(),
            'ModifiedOn' => now(),
            'Status' => '1',
            'UserIp' => $request->ip(),
            'user_type' => 'C',
            'acc_to_craiglist' => 'No',
        ]);
        if (!$login) {
            return response()->json(['message' => 'Failed to create login'], 500);
        }
        $loginId = $login->Id;

        // Insert into `RenterInfo` table
        RenterInfo::create([
            'Login_ID' => $loginId,
            'FirstName' => $request->firstName,
            'LastName' => $request->lastName,
            'phone' => $request->cell,
            'Evening_phone' => $request->otherPhone,
            'Current_address' => $request->currentAddress,
            'Cityid' => $request->city,
            'zipcode' => $request->zipCode,
            'Floor' => $request->floorPreference,
            'Garage' => $request->garagePreference,
            'Laundry' => $request->laundryPreference,
            'Cross_street' => $request->specificCrossStreet,
            'Communities_visited' => $request->communitiesVisited,
            'Credit_history' => $request->creditHistory,
            'Rental_history' => $request->rentalHistory,
            'Criminal_history' => $request->criminalHistory,
            'Lease_Term' => $request->leaseTerm,
            'Work_name_address' => $request->workNameAddress,
            'Area_move' => $request->moveToArea,
            'Emove_date' => $request->earliestMoveDate,
            'Lmove_date' => $request->latestMoveInDate,
            'Rent_start_range' => $request->desiredRentRangeFrom,
            'Rent_end_range' => $request->desiredRentRangeTo,
            'bedroom' => $request->numberOfBedRooms,
            'Pet_weight' => $request->petInfo,
            'Additional_info' => $request->additionalInfo,
            'Locator_Comments' => $request->locatorcomments,
            'Tour_Info' => $request->tourinfo,
            'probability' => $request->probability,
            'Hearabout' => $request->source,
            'Reminder_date' => $request->setremainder,
            'reminder_note' => $request->remaindernote,
            'added_by' => 94
        ]);

        return response()->json(['message' => 'Form submitted successfully']);
    }


    public function searchRenter(Request $request)
    {

        return view('client.searchRenter');
    }

    public function getSearchedRenter(Request $request)
    {
        $firstname = "Brandon";
        $query = Login::with('renterInfo');
        if ($request->filled('status')) {
            $query->where('Status', $request->status);
        }


        if ($request->filled('firstname')) {
            $query->whereHas('renterInfo', function ($q) use ($request) {
                $q->where('Firstname', 'like', '%' . $request->firstname . '%');
            });
        }


        if ($request->filled('lastname')) {
            $query->whereHas('renterInfo', function ($q) use ($request) {
                $q->where('lastname', 'like', '%' . $request->lastname . '%');
            });
        }

        if ($request->filled('phone')) {
            $query->whereHas('renterInfo', function ($q) use ($request) {
                $q->where('phone', 'like', '%' . $request->phone . '%');
            });
        }

        if ($request->filled('PR_from') && $request->filled('PR_to')) {
            $query->whereBetween('probability', [$request->PR_from, $request->PR_to]);
        }

        // Add other filters similarly...

        $logins = $query->paginate(10);

        return response()->json([
            'logins' => $logins,
            'pagination' => (string) $logins->links()
        ]);
    }


    public function searchManager()
    {

        return view('resources.searchManager');
    }



    // Administration
    public function myOfficeReports(Request $request)
    {
        $fetchHistory = Login::with(['renterInfo.adminDetail'])
            ->select('Login.Id', 'Login.Email', 'Login.CreatedOn', 'Login.Status')
            ->where('user_type', 'C')
            ->orderByDesc('Id')
            ->take(5)
            ->get();

            // ->map(function ($login) {
            //     return [
            //         'Id' => $login->Id,
            //         'Email' => $login->Email,
            //         'admin_name' => $login->renterInfo->adminDetails->admin_name,
            //         'CreatedOn' => $login->CreatedOn,
            //         'Status' => $login->Status,
            //         'added_by' => $login->renterInfo->added_by,
            //         'Firstname' => $login->renterInfo->Firstname,
            //         'phone' => $login->renterInfo->phone,
            //         'Lastname' => $login->renterInfo->Lastname,
            //     ];
            // });

            dd($fetchHistory);

        return view('administration.myOfficeReports');
    }



    public function manageLogLogin(Request $request){
        $getManagerLogin = ManagerLogLogin::with('login')
        ->orderBy('Id','desc')
        ->get();
        // dd($getManagerLogin);
        if (request()->ajax()) {
            return Datatables::of($getManagerLogin)
            ->addIndexColumn()
                ->addColumn('username',function($row){
                    return @$row->login->UserName ?? '';
                })
                ->addColumn('useremail',function($row){
                    return @$row->login->Email ?? '';
                })
                ->addColumn('t&c',function($row){
                    return @$row->TermsConditions ?? '';
                })
                ->addColumn('lastlogin',function($row){
                    return @$row->LastLoginDateTime  ?? '';
                })
                ->addColumn('lastlogout',function($row){
                    return @$row->LogOutDateTime ?? '';
                })
                ->rawColumns(['username','useremail','t&c','lastlogin','lastlogout'])
                ->make(true);
        }
        
        return view('resources.managerloginLog',['getManagerLogin' => $getManagerLogin ]);
    }
}
