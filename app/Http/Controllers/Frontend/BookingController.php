<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        (array)$verifiedData = $request->validate([
            'name'          => 'bail|required|string',
            'email'         => 'bail|required|email',
            'message'       => 'bail|required|string',
            'service'       => 'bail|required',
            'phone_number'  => 'bail|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
        ]);

        //Set `serviceBooking` to false before Db transaction
        (bool) $serviceBooking  = false;

        DB::transaction(function () use ($verifiedData, &$serviceBooking) {
            //  Store data in database
            Booking::create($verifiedData);

            //Set variables as true to be validated outside the DB transaction
            $serviceBooking  = true;
        }, 3);

        if($serviceBooking){
            //Send confirmation booking mail to client
            Mail::to($verifiedData['email'])->send(new \App\Mail\Booking($verifiedData));

            //Send confirmation booking mail to `feyikemi.odunuga@cbs-services.com.ng`
            Mail::to('feyikemi.odunuga@cbs-services.com.ng')->send(new \App\Mail\AdminBooking($verifiedData));

            //Return success message to user
            return back()->with('success', 'Congratulations! Your service booking was successful.');
        }else{
            return back()->with('error', 'Sorry! An error occured while trying to book your service.');
        }

        return back()->withInput();

        // return response()->json([
        //     'message' => 'Email has been sent.'
        // ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
