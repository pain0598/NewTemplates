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
// use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Response;

class ClientController extends Controller
{
    public function renterInfoUpdateHistory(Request $request)
    {
        $updateHistoryData = RenterUpdateHistory::with('admindetailId', 'renterinfoId');

        if ($request->ajax()) {
            if ($request->has('rentername') && $request->rentername != '') {
                $updateHistoryData->whereHas('renterinfoId', function ($query) use ($request) {
                    $query->where('Firstname', 'like', '%' . $request->rentername . '%');
                });
            }

            if ($request->has('adminname') && $request->adminname != '') {
                $updateHistoryData->whereHas('admindetailId', function ($query) use ($request) {
                    $query->where('admin_name', 'like', '%' . $request->adminname . '%');
                });
            }

            if ($request->has('fromsearch') && $request->fromsearch != '') {
                $updateHistoryData->whereDate('updated_date', '>=', $request->fromsearch);
            }

            if ($request->has('tosearch') && $request->tosearch != '') {
                $updateHistoryData->whereDate('updated_date', '<=', $request->tosearch);
            }
            return DataTables::of($updateHistoryData)
                ->addIndexColumn()
                ->addColumn('rentername', function ($query) {
                    return $query->renterinfoId->Firstname ?? 'N/A';
                })
                ->addColumn('adminname', function ($query) {
                    return $query->admindetailId->admin_name ?? 'N/A';
                })
                ->addColumn('updatedOn', function ($query) {
                    return $query->updated_date ?? 'N/A';
                })
                ->addColumn('action', function ($query) {
                    $edit = '<a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>';
                    $delete = '<a href="" class="delete-item btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>';
                    return $edit . $delete;
                })
                ->rawColumns(['rentername', 'adminname', 'updatedOn', 'action'])
                ->setRowId('id')
                ->make(true);
        }
        return view('client.renterInfoUpdateHistory');
    }
    // public function exportCsv(Request $request)
    // {
    //     $updateHistoryData = RenterUpdateHistory::with('admindetailId', 'renterinfoId');

    //     // Apply filters if present
    //     if ($request->has('rentername') && $request->rentername != '') {
    //         $updateHistoryData->whereHas('renterinfoId', function ($query) use ($request) {
    //             $query->where('Firstname', 'like', '%' . $request->rentername . '%');
    //         });
    //     }

    //     if ($request->has('adminname') && $request->adminname != '') {
    //         $updateHistoryData->whereHas('admindetailId', function ($query) use ($request) {
    //             $query->where('admin_name', 'like', '%' . $request->adminname . '%');
    //         });
    //     }

    //     if ($request->has('fromsearch') && $request->fromsearch != '') {
    //         $updateHistoryData->whereDate('updated_date', '>=', $request->fromsearch);
    //     }

    //     if ($request->has('tosearch') && $request->tosearch != '') {
    //         $updateHistoryData->whereDate('updated_date', '<=', $request->tosearch);
    //     }

    //     $records = $updateHistoryData->get();

    //     $csvData = [
    //         ['ID', 'Renter Name', 'Admin Name', 'Updated On'], // CSV Headers
    //     ];

    //     foreach ($records as $record) {
    //         $csvData[] = [
    //             $record->id,
    //             $record->renterinfoId->Firstname ?? 'N/A',
    //             $record->admindetailId->admin_name ?? 'N/A',
    //             $record->updated_date ?? 'N/A',
    //         ];
    //     }

    //     // Create and return CSV response
    //     $filename = 'renter_info_update_history.csv';
    //     $handle = fopen('php://output', 'w');
    //     foreach ($csvData as $row) {
    //         fputcsv($handle, $row);
    //     }
    //     fclose($handle);

    //     $headers = [
    //         'Content-Type' => 'text/csv',
    //         'Content-Disposition' => "attachment; filename=\"$filename\"",
    //     ];

    //     return Response::make('', 200, $headers);
    // }
    public function exportCsv(Request $request)
    {
        $updateHistoryData = RenterUpdateHistory::with('admindetailId', 'renterinfoId');

        // Apply filters if present
        if ($request->has('rentername') && $request->rentername != '') {
            $updateHistoryData->whereHas('renterinfoId', function ($query) use ($request) {
                $query->where('Firstname', 'like', '%' . $request->rentername . '%');
            });
        }

        if ($request->has('adminname') && $request->adminname != '') {
            $updateHistoryData->whereHas('admindetailId', function ($query) use ($request) {
                $query->where('admin_name', 'like', '%' . $request->adminname . '%');
            });
        }

        if ($request->has('fromsearch') && $request->fromsearch != '') {
            $updateHistoryData->whereDate('updated_date', '>=', $request->fromsearch);
        }

        if ($request->has('tosearch') && $request->tosearch != '') {
            $updateHistoryData->whereDate('updated_date', '<=', $request->tosearch);
        }

        $records = $updateHistoryData->get();

        $csvData = [
            ['ID', 'Renter Name', 'Admin Name', 'Updated On'], // CSV Headers
        ];

        foreach ($records as $record) {
            $csvData[] = [
                $record->id,
                $record->renterinfoId->Firstname ?? 'N/A',
                $record->admindetailId->admin_name ?? 'N/A',
                $record->updated_date ?? 'N/A',
            ];
        }

        $filename = 'renter_info_update_history.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        // Open output stream for download
        $handle = fopen('php://output', 'w');

        // Add CSV rows
        foreach ($csvData as $row) {
            fputcsv($handle, $row);
        }

        fclose($handle);

        return response()->streamDownload(function () use ($csvData) {
            $handle = fopen('php://output', 'w');
            foreach ($csvData as $row) {
                fputcsv($handle, $row);
            }
            fclose($handle);
        }, $filename, $headers);
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
