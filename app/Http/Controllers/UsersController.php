<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // public function addNote(Request $request, $userId)
    public function addNote($userId)
    {
        // $request->validate([
        //     'content' => 'required|string|max:1000',
        // ]);

        $user = User::findOrFail($userId);

        $note = $user->notes()->create([
            'title' => 'Example title', // $request->input('title'),
            'content' => 'Example note', // $request->input('content'),
        ]);

        return response()->json([
            'message' => 'Note added successfully.',
            'note' => $note
        ]);
    }
}
