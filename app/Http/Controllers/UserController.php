<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hobby;
use Illuminate\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource ame',
        'email',
        'password',in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'firstName' => 'required|max:25|min:3|string',
            'lastName' => 'required|max:25|min:3|string',
            'gender' => 'required',
            'hobbies' => 'required|min:1',
            'country' => 'required',
            'about' => 'required|max:55|min:5|string',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'gender' => $request->gender,
            'country' => $request->country,
            'about' => $request->about,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
