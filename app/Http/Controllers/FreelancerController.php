<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\FreelancerRequest;
use App\Mail\FreelancerRequestMail;

class FreelancerController extends Controller
{
    public function showForm()
    {
        return view('freelancer/form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate(
            [
                'first_name' => 'required|string|max:255',
                'last_name'  => 'required|string|max:255',
                'email'      => 'required|email|max:255',
                // 'email' => 'required|unique:freelance_request|max:255', // this is if we want email to be unique
                'phone'      => 'nullable|string|max:20',
                'comments'   => 'nullable|string|max:1000',
                'services'   => 'nullable|array',
            ],
            [
                'first_name.required' => 'First name is required.',
                'last_name.required'  => 'Last name is required.',
                'email.required'      => 'Email is required.',
                'email.email'         => 'Please enter a valid email address.',
                'phone.max'           => 'The phone number must not exceed 20 characters.',
                'comments.max'        => 'Comments cannot be longer than 1000 characters.',
            ]
        );

        // Save to database
        FreelancerRequest::create([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'],
            'email'      => $validated['email'],
            'phone'      => $validated['phone'],
            'comments'   => $validated['comments'],
            'services'   => json_encode($validated['services']),
        ]);

        // Use $validated array to store only valid fields into DB
        // FreelancerRequest::create($validated);

        // Store in database or send email (optional)
        // Example: Mail::to('admin@example.com')->send(new FreelancerRequestMail($validated));

        return redirect()->route('freelancer.form')->with('success', 'Your request has been submitted!');
    }
}
