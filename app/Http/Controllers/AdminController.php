<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminRegister');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
public function store(Request $request)
{
    $val = $request->validate([
        'name' => 'required|string|min:3|max:50',
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    Admin::create([
        'name' => $val['name'],
        'email' => $val['email'],
        'password' => hash::make($val['password']),
    ]);

    return redirect('adminlogin')
        
        ->with('success', 'Admin account created successfully. Please login.');
}



    /**
     * Display the specified resource.
     */














public function adminlogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password,
    ])) {

        $request->session()->regenerate();

        return redirect('/admin');
    }
    else{
        // return redirect("/admin");
    
    return back()->withErrors([
        'email' => 'Invalid email or password.',
   ]);
    }
}




public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}










    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        
    }
}
