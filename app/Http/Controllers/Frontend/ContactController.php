<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
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
    public function create()
    {
        //
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
            'name'      => 'bail|required|string',
            'email'     => 'bail|required|email',
            'subject'   => 'bail|required|string',
            'message'   => 'bail|required|string',
        ]);

        //Set `contact` to false before Db transaction
        (bool) $contact  = false;

        DB::transaction(function () use ($verifiedData, &$contact) {
            //  Store data in database
            Contact::create($verifiedData);

            //Set variables as true to be validated outside the DB transaction
            $contact  = true;
        }, 3);

        if($contact){
            //Send confirmation booking mail to `feyikemi.odunuga@cbs-services.com.ng`
            // Mail::to('feyikemi.odunuga@cbs-services.com.ng')->send(new \App\Mail\Contact($verifiedData));
            Mail::to('anthonyjoboy2016@gmail.com')->send(new \App\Mail\Contact($verifiedData));

            //Return success message to user
            return back()->with('success', 'Congratulations! Your message was successful sent.');
        }else{
            return back()->with('error', 'Sorry! An error occured while trying to send your message.');
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
