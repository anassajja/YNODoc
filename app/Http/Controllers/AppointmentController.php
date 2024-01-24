<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    public function showAppointmentForm()
    {
        $doctors = Doctor::all();
        return view('appointments.create', compact('doctors'));
    }

    public function scheduleAppointment(Request $request)
    {
        // Validation logic here

        // Create a new appointment
        Appointment::create([
            'patient_id' => auth()->id(),
            'doctor_id' => $request->input('doctor_id'),
            'appointment_date' => $request->input('appointment_date'),
            // Add other fields as needed
        ]);

        // Additional logic, e.g., sending confirmation email

        return redirect()->route('home')->with('success', 'Appointment scheduled successfully!');
    }

    public function showDoctors()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function showDoctorProfile($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.profile', compact('doctor'));
    }
}