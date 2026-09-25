<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showmessage()
    {
        $messages=contact::all();
        return view('adminenquiries',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
        'name'    => ['required', 'string', 'max:100'],
        'email'   => ['required', 'email', 'max:150'],
        'subject' => ['required', 'string', 'max:150'],
        'message' => ['required', 'string', 'max:2000'],
    ]);
    Contact::create($validated);
  return back()->with('status', 'Your message has been sent — thank you!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    Contact::destroy($id);
    return redirect()->back();
}
}
