<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'info@cbs-services.com.ng';
        $user->name = 'C.B & S Administrator';
        $user->password = bcrypt('admin12345');
        $user->email_verified_at = now();
        $user->save();

        $serviceBooking = new \App\Models\Booking();
        $serviceBooking->name = "Fakunle Tunde";
        $serviceBooking->email = "fakunle.tunde@outlook.co.uk";
        $serviceBooking->phone_number = "08111667809";
        $serviceBooking->service = "Domestic Cleaning";
        $serviceBooking->message = "The scope of services and work includes the provision of labour, cleaning consumable, accessories and equipment required for the provision of cleaning services in all areas.";
        $serviceBooking->save();

        $serviceBooking = new \App\Models\Booking();
        $serviceBooking->name = "Cynthia Okoye";
        $serviceBooking->email = "cynthia.okoye@yahoo.com";
        $serviceBooking->phone_number = "08132667845";
        $serviceBooking->service = "Window Cleaning";
        $serviceBooking->message = "C.B & S Services will comply with all rules and regulation relating to the site, directions and instructions given for the convenience and piece of occupiers.";
        $serviceBooking->save();

        $serviceBooking = new \App\Models\Booking();
        $serviceBooking->name = "Morenike Akinpelumi";
        $serviceBooking->email = "morenike.akinpelumi@gmail.com";
        $serviceBooking->phone_number = "09077456342";
        $serviceBooking->service = "Apartment Cleaning";
        $serviceBooking->message = "Manages the use and administration of all consumables, accessories and equipment on site.";
        $serviceBooking->save();

    }
}
