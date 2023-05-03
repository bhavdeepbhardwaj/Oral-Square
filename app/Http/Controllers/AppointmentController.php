<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fname'                 => 'required',
            'email'                 => 'required|email',
            'phone'                 => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'note'                  => 'required',
            'app_date'              => 'required',
            'treatment_needed'      => 'required',
        ]);

        $contact = new Appointment;
        $contact->fname = $request->fname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->note = $request->note;
        $contact->app_date = $request->app_date;
        $contact->treatment_needed = $request->treatment_needed;
        $contact->save();

        return response()->json(['success' => 'Successfully']);
    }
}
