<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterInfo;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    //

    public function manageFooter()
    {
        return view('admin.Settings.manageFooter');
    }


    // public function UpdateFooter(Request $request){
    //     FooterInfo::updateOrCreate(
    //         ['id' => 1],
    //         [
    //             'short_description' => $request->short_description,
    //             'address' => $request->address,
    //             'email' => $request->email,
    //             'phone' => $request->phone,
    //             'copyright' => $request->copyright
    //         ]
    //     );

    //     toastr()->success('Updated Successfully!');
    //     return redirect()->back();
    // }

    public function UpdateFooter(Request $request)
    {
        try {
            // Update or create the FooterInfo entry
            FooterInfo::updateOrCreate(
                ['id' => 1],
                [
                    'short_description' => $request->short_description,
                    'address' => $request->address,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'copyright' => $request->copyright
                ]
            );
            toastr()->success('Updated Successfully!');
        } catch (\Exception $e) {
            toastr()->error('An error occurred while updating the footer. Please try again.');
            \Log::error('Footer update error: ' . $e->getMessage());
        }

        // Redirect back to the previous page
        return redirect()->back();
    }
}
