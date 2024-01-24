<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function showSurveyPage()
    {
        return view('surveys.index');
    }

    public function submitSurvey(Request $request)
    {
        // Validation logic here

        // Create a new survey response
        Survey::create([
            'patient_id' => auth()->id(),
            'question1' => $request->input('question1'),
            'question2' => $request->input('question2'),
            // Add other questions as needed
        ]);

        return redirect()->route('home')->with('success', 'Survey submitted successfully!');
    }
}