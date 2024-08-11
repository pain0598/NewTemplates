<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Source;
use Yajra\DataTables\DataTables;

class AdministrationController extends Controller
{
    //

    public function manageSources(Request $request){
        $source = Source::all();
        if (request()->ajax()) {
            return Datatables::of($source)
            ->addIndexColumn()
                ->addColumn('sourcename',function($row){
                    return $row->SourceName;
                })

                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex" style="gap:10px;">
                                <a href="javascript:void(0)" class="edit btn"><i class="fa fa-edit" style="font-size:1.2rem;" ></i></a>
                                <a href="javascript:void(0)" class="btn delete-btn" data-id="'.$row->Id.'"><i class="fa fa-trash" aria-hidden="true" style="font-size:1.2rem;;color:red"></i></a>
                            </div>';
                    return $btn;
                })
                ->rawColumns(['sourcename','action'])
                ->make(true);
        }
        return view('administration.manageSources');
    }
}
