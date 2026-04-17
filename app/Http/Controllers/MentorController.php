<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Booking;
use Illuminate\Http\Request;
use Mail;
use App\Mail\MentorBookingMail;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('mentors.index', compact('mentors'));
    }

    public function book($id)
    {
        $mentor = Mentor::findOrFail($id);
        return view('mentors.book', compact('mentor'));
    }

    public function store(Request $request)
    {
        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'slot' => $request->slot,
            'date' => $request->date,
            'mentor_id' => $request->mentor_id
        ]);

        Mail::to($request->mentor_email)
            ->send(new MentorBookingMail($booking));

        return redirect()->back()
            ->with('success', 'Session Booked Successfully');
    }
}
