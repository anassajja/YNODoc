<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psychotherapy;
use App\Models\Therapist;

class PsychotherapyController extends Controller
{
    public function showTherapists()
    {
        // Fetch therapists from the database
        $therapists = Therapist::all();
        return view('psychotherapies.therapists', compact('therapists'));
    }

    public function subscribe(Request $request)
    {
        // Validation logic here

        // Create a new psychotherapy registration
        Psychotherapy::create([
            'patient_id' => auth()->id(),
            'therapist_id' => $request->input('therapist_id'),
            'pack' => $request->input('pack'),
            // Add other fields as needed
        ]);

        // Send confirmation email
        // You can use Laravel's Mail functionality here

        // Additional logic, e.g., redirect to payment page

        return redirect()->route('psychotherapies.payment')->with('success', 'Psychotherapy registration successful!');
    }

    public function showPaymentPage()
    {
        return view('psychotherapies.payment');
    }
}