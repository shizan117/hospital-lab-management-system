<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AmbulanceRequest;
use Illuminate\Support\Facades\Log;
class AmbulanceController extends Controller
{
    // frontend
    public function store(Request $request)
    {
        $request->validate([
            'from' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'ambulance_type' => 'required|string',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'phone' => ['required', 'regex:/^(01)[3-9][0-9]{8}$/'],
        ]);

        try {
            AmbulanceRequest::create([
                'from' => $request->from,
                'destination' => $request->destination,
                'ambulance_type' => $request->ambulance_type,
                'date' => $request->date,
                'round_trip' => $request->has('round_trip'),
                'name' => $request->name,
                'phone' => $request->phone,
            ]);

            return back()->with('success', 'Ambulance request sent successfully!');
        } catch (\Exception $e) {
//            return back()->with('error', 'Database error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please Contact with us');
        }
    }


    // backend
    // Show all ambulance requests ordered by latest first
    public function index(Request $request)
    {
        $status = $request->input('status', 'all');

        $query = AmbulanceRequest::query();

        if (in_array($status, ['pending', 'confirmed', 'cancelled'])) {
            $query->where('status', $status);
        }

        $requests = $query->orderBy('created_at', 'desc')->get();

        return view('backend.pages.ambulance.index', compact('requests'));
    }


    // Update status of ambulance request (pending -> confirm)
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $ambulanceRequest = AmbulanceRequest::findOrFail($id);
        $ambulanceRequest->status = $request->status;
        $ambulanceRequest->save();

        return redirect()->back()->with('success', 'Ambulance request status updated successfully.');
    }


    public function latest()
    {
        $latest = AmbulanceRequest::where('status', '!=', 'confirmed')
            ->latest()
            ->first();


        if (!$latest) {
//            Log::info('AmbulanceController@latest: No ambulance requests found.');
            return response()->json(null, 404);
        }

//        Log::info('AmbulanceController@latest: Latest ambulance request fetched.', [
//            'id' => $latest->id,
//            'status' => $latest->status,
//            'from' => $latest->from,
//            'destination' => $latest->destination,
//            'created_at' => $latest->created_at,
//        ]);

        return response()->json([
            'id' => $latest->id,
            'from' => $latest->from,
            'destination' => $latest->destination,
            'ambulance_type' => ucfirst($latest->ambulance_type),
            'date' => Carbon::parse($latest->date)->format('d M Y'),
            'round_trip' => $latest->round_trip ? 'Yes' : 'No',
            'name' => $latest->name,
            'phone' => $latest->phone,
            'status' => $latest->status,
            'created_at' => $latest->created_at->diffForHumans()
        ]);
    }

}
