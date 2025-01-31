<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactUsHanlding;
use Yajra\DataTables\DataTables;
use App\Models\PropertyInquiry;
use Illuminate\Support\Facades\Log;
use App\Models\ManagerTermsCMS;
use App\Models\AboutUSCMS;

class AdminController extends Controller
{
    //

    public function index()
    {
        return view('dashboard');
    }

    public function revertContactUs(Request $request)
    {
        $listofcontactus = ContactUsHanlding::all();
        if (request()->ajax()) {
            return Datatables::of($listofcontactus)
                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    return @$row->name ?? '';
                })
                ->addColumn('email', function ($row) {
                    return @$row->email ?? '';
                })
                ->addColumn('message', function ($row) {
                    return @$row->message ?? '';
                })
                ->addColumn('message', function ($row) {
                    return @$row->subject  ?? '';
                })
                ->addColumn('revert', function ($row) {
                    if ($row->reverted == 'yes') {
                        return '<span class="badge badge-success">Reverted</span>';
                    } else {
                        return '
                            <button class="btn btn-warning btn-sm btn-pending" data-id="' . $row->id . '">Pending</button>
                            <div class="message-box mt-2" id="message-box-' . $row->id . '" style="display:none;">
                                <textarea class="form-control message-input" id="message-input-' . $row->id . '" placeholder="Type your message..."></textarea>
                                <button class="btn btn-primary btn-sm mt-2 btn-send-message" data-id="' . $row->id . '">Submit</button>
                            </div>
                        ';
                    }
                })
                ->rawColumns(['name', 'email', 'subject', 'message', 'revert'])
                ->make(true);
        }
        return view('contact_us');
    }


    public function revertContactUsUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'message' => 'required|string|max:255',
        ]);
        $userinfo = ContactUsHanlding::where('id', $request->id)->first();
        $update = ContactUsHanlding::where('id', $request->id)->update([
            'reverted' => 'yes',
        ]);
        $details = [
            'name' => $userinfo->name,
            'email' => $userinfo->email,
            'message' => $request->message,
        ];
        Mail::to('admin@yourdomain.com')->send(new ContactUsMail($details));
        return response()->json(['success' => true, 'message' => 'Reverted successfully.']);
    }


    public function sendEmail(Request $request)
    {
        // Prepare the data to be sent in the email
        $details = [
            'name' => "Tester Test",
            'email' => "test@gmail.com",
            'message' => "We are Very Sorry",
        ];

        // Send the email using the ContactUsMail mailable
        Mail::to('admin@yourdomain.com')->send(new ContactUsMail($details));

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }


    // public function revertPropertyInquiry(Request $request){
    //     $listofpropertyinquiry = PropertyInquiry::with('propertyinfo','login')
    //     ->orderBy('Id','desc')
    //     ->get();
    //     if (request()->ajax()) {
    //         return Datatables::of($listofpropertyinquiry)
    //             ->addIndexColumn()
    //             ->addColumn('propertyname', function ($row) {
    //                 return @$row->propertyinfo->PropertyName ?? '';
    //             })
    //             ->addColumn('username', function ($row) {
    //                 return @$row->login->UserName ?? '';
    //             })
    //             ->addColumn('subject', function ($row) {
    //                 return @$row->Subject ?? '';
    //             })
    //             ->addColumn('message', function ($row) {
    //                 return @$row->Message  ?? '';
    //             })
    //             ->addColumn('revert', function ($row) {
    //                 if (@$row->reverted == 'yes') {
    //                     return '<span class="badge badge-success">Reverted</span>';
    //                 } else {
    //                     return '
    //                         <button class="btn btn-warning btn-sm btn-pending" data-id="' . $row->Id . '">Pending</button>
    //                         <div class="message-box mt-2" id="message-box-' . $row->Id . '" style="display:none;">
    //                             <textarea class="form-control message-input" id="message-input-' . $row->Id . '" placeholder="Type your message..."></textarea>
    //                             <button class="btn btn-primary btn-sm mt-2 btn-send-message" data-id="' . $row->Id . '">Submit</button>
    //                         </div>
    //                     ';
    //                 }
    //             })
    //             ->rawColumns(['propertyname','username', 'subject', 'message', 'revert'])
    //             ->make(true);
    //     }
    //     return view('propertyInquiry');
    // }

    public function revertPropertyInquiry(Request $request)
    {
        try {
            // Get the list of property inquiries with related data
            $listofpropertyinquiry = PropertyInquiry::with('propertyinfo', 'login')
                ->orderBy('Id', 'desc')
                ->take(200)
                ->get();

            // Check if the request is AJAX for DataTables
            if ($request->ajax()) {
                return Datatables::of($listofpropertyinquiry)
                    ->addIndexColumn()

                    // Property Name Column
                    ->addColumn('propertyname', function ($row) {
                        return htmlspecialchars(@$row->propertyinfo->PropertyName ?? '');
                    })

                    // Username Column
                    ->addColumn('username', function ($row) {
                        return htmlspecialchars(@$row->login->UserName ?? '');
                    })

                    // Subject Column
                    ->addColumn('subject', function ($row) {
                        return htmlspecialchars(@$row->Subject ?? '');
                    })

                    // Message Column
                    ->addColumn('message', function ($row) {
                        return htmlspecialchars(@$row->Message ?? '');
                    })

                    // Revert Button Column
                    ->addColumn('revert', function ($row) {
                        if ($row->reverted === 'yes') {
                            return '<span class="badge badge-success">Reverted</span>';
                        } else {
                            $rowId = htmlspecialchars($row->Id);
                            return '
                            <button class="btn btn-warning btn-sm btn-pending" data-id="' . $rowId . '">Pending</button>
                            <div class="message-box mt-2" id="message-box-' . $rowId . '" style="display:none;">
                                <textarea class="form-control message-input" id="message-input-' . $rowId . '" placeholder="Type your message..."></textarea>
                                <button class="btn btn-primary btn-sm mt-2 btn-send-message" data-id="' . $rowId . '">Submit</button>
                            </div>
                        ';
                        }
                    })

                    // Indicate that the 'revert' column contains raw HTML
                    ->rawColumns(['revert'])

                    // Return the DataTable response
                    ->make(true);
            }

            // Return the view for property inquiry
            return view('propertyInquiry');
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            \Log::error('Error in revertPropertyInquiry: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);

            // Return a user-friendly error response
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'An error occurred while loading property inquiries. Please try again later.'
                ], 500);
            }

            // For non-AJAX requests, return a generic error view or message
            return view('errors.general', ['message' => 'An error occurred while loading property inquiries.']);
        }
    }


    public function revertPropertyInquiryUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'message' => 'required|string|max:255',
        ]);
        $userinfo = PropertyInquiry::where('Id', $request->id)->first();
        $update = PropertyInquiry::where('Id', $request->id)->update([
            'reverted' => 'yes',
        ]);
        $details = [
            'name' => $userinfo->name,
            'email' => $userinfo->email,
            'message' => $request->message,
        ];
        Mail::to('admin@yourdomain.com')->send(new ContactUsMail($details));
        return response()->json(['success' => true, 'message' => 'Reverted successfully.']);
    }

    public function pagesCMS()
    {
        $managerterms = ManagerTermsCMS::where('status', 1)->get();
        return view('pages', [
            'managerterms' => $managerterms,
        ]);
    }

    public function adminProfile()
    {
        return view('adminProfile');
    }

    public function addRenter()
    {
        return view('addRenter');
    }

    public function aboutUsCMS()
    {
        $aboutUs = AboutUSCMS::first();
        return view('admin.Settings.aboutUsCMS',['aboutUs' => $aboutUs]);
    }

    public function aboutUsCMSUpdate(Request $request)
    {
        dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $aboutUs = AboutUs::firstOrCreate([]);
        $aboutUs->title = $request->title;
        $aboutUs->heading = $request->heading;
        $aboutUs->description = $request->description;

        if ($request->hasFile('image')) {
            if ($aboutUs->image) {
                Storage::disk('s3')->delete($aboutUs->image);
            }
            $path = $request->file('image')->store('aboutus', 's3');
            $aboutUs->image = Storage::disk('s3')->url($path);
        }

        $aboutUs->save();

        return response()->json([
            'success' => true,
            'message' => 'About Us content updated successfully.',
            'image' => $aboutUs->image ?? null
        ]);
    }

    public function equalHousing(){
        $aboutUs = AboutUSCMS::first();
        $managerterms = ManagerTermsCMS::where('status', 1)->get();
        return view('admin.Settings.equalHousing',['managerterms' => $managerterms]);
    }


    public function equalHousingUpdate(Request $request){
        dd($request->all());
    }


}
