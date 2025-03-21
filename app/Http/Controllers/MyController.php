<?php
namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
// use App\Models;

class MyController extends Controller
{
    public function index()
    {
        return "This is a controller response.";
    }

    public function showWelcome()
    {
        return view('mywelcome', ['name' => 'Shehzad Nizamani']);
    }

    public function allNotes() {
        $notes = Notes::all();
        return view('notes/allnotes', ['notes' => $notes]);
    }

    public function showForm() {
        return view('form/form', ['name' => 'Shehzad Nizamani']);
    }

    public function submitForm(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);

        return "Form submitted successfully!";
    }
}
