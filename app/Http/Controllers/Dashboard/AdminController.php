<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Traits\ChangePassword;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    use ChangePassword;

    /**
     * This method will redirect users back to the login page if not properly authenticated
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Dashboard statistics
        return view('dashboard.index', [
            'services'  => \App\Models\Booking::latest('created_at')->limit(10)->get(),
            'name'      => auth()->user()->name ?? "Unavailable",
            'userCount' => \App\Models\User::count(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookings()
    {
        //Return all services booked
        return view('dashboard.bookings', [
            'services'  => \App\Models\Booking::latest('created_at')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        //Return authenticated user profile details
        return view('dashboard.settings', [
            'profile'  => auth()->user(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        //Return user list
        return view('dashboard.users', [
            'users'  => \App\Models\User::latest('created_at')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        //Validate user input fields
        $valid = $request->validate([
            'name'  =>   'bail|required|string'
        ]);

        return (\App\Models\User::where('id', auth()->user()->id)->update(['name' => $valid['name']]))
        ? redirect()->back()->with('success', 'Profile was successfully updated.')
        : redirect()->back()->with('error', 'An error occurred while trying to update your profile.')->withInput();
    }

    /**
     * Update password of the current request user
     *
     * PLEASE INCLUDE IN FORM REQUEST THE NAME:
     *
     * 1: current_password
     *
     * 2: new_password
     *
     * 3: new_confirm_password
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function changePassword(Request $request)
    {
        //Change authenticated user password with ChangePassword trait
        return $this->changeUserPassword($request);
    }
}
