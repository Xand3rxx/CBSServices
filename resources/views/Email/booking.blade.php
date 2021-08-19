@component('mail::message')
Dear ## {{ $mailData['name'] }},

Thank you for reaching out to us. This is to confirm receipt of your request. A member of the team will be reaching out to you shortly.

Service Booking Details
## Phone Number:  {{ $mailData['phone_number'] }}<br>
## Your Message:  {{ $mailData['message'] }}<br>

We reiterate our commitment to offer you quality service and rely on your valued patronage.

Thanks,<br>
{{ config('app.name') }}
<br><br>
14, Toyin Street, Ikeja, Lagos.
+234 817 341 1535, +234 809 641 5395| info@cbs-services.com.ng
<br>
<img src="http://www.cbs-services.com.ng/assets/images/logo.png" width="90" alt="CB & S Cleaning Service">
<br><hr>
@endcomponent
