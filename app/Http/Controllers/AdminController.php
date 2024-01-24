<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Survey;
use App\Models\Doctor;
use App\Models\Therapist;

class AdminController extends Controller
{
    public function showUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function makeUserAdmin($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->update(['is_admin' => true]);
            // Optionally, you may want to handle the success scenario
            return redirect()->back()->with('success', 'User is now an admin.');
        } else {
            // Handle the case where the user is not found
            return redirect()->back()->with('error', 'User not found.');
        }
    }

    public function confirmAccount($id)
    {
        $user = User::findOrFail($id);
        $user->update(['confirmed' => true]);

        return redirect()->route('admin.users')->with('success', 'Account confirmed successfully!');
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin.users')->with('success', 'User information updated successfully!');
    }

    public function activateAccount($id)
    {
        $user = User::findOrFail($id);
        $user->update(['confirmed' => true]);

        return redirect()->route('admin.users')->with('success', 'Account activated successfully!');
    }

    // Add other admin actions as needed

    public function showSurveys()
    {
        $surveys = Survey::all();
        return view('admin.surveys', compact('surveys'));
    }

    // Add methods for recovering and archiving survey responses

    public function showInsertForm()
    {
        return view('admin.insert-form');
    }

    public function insertDoctors(Request $request)
    {
        // Validation logic here

        Doctor::create($request->all());

        return redirect()->route('admin.insert-form')->with('success', 'Doctor inserted successfully!');
    }

    public function insertTherapists(Request $request)
    {
        // Validation logic here

        Therapist::create($request->all());

        return redirect()->route('admin.insert-form')->with('success', 'Therapist inserted successfully!');
    }
}