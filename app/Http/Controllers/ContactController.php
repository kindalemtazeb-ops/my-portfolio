<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    // ሁሉንም መልዕክቶች ለማየት
    public function index()
    {
        $messages = Message::latest()->get(); // አዳዲስ መልዕክቶችን ከላይ ያመጣል
        return view('admin.messages', compact('messages'));
    }
public function destroy($id)
{
    $message = Message::findOrFail($id);
    $message->delete();

    return back()->with('success', 'Message deleted successfully!');
}
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create($validated);

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
