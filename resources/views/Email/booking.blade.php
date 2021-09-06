@component('mail::message')
Dear {{ $mailData['name'] }},

Thank you for reaching out to us. This is to confirm the receipt of your request. A member of our team will be reaching out to you shortly.

## Service Booking Details
## Service:  {{ $mailData['service'] }}<br>
## Phone Number:  {{ $mailData['phone_number'] }}<br>
## Your Message:  {{ $mailData['message'] }}<br>

We reiterate our commitment to offer you a quality service and rely on your valued patronage.<br>

Thanks,<br>
{{ config('app.name') }}
<br><br>
14, Toyin Street, Ikeja, Lagos.
+234 817 341 1535, +234 809 641 5395| info@cbs-services.com.ng
<br>
<img src="http://www.cbs-services.com.ng/assets/images/logo.png" width="110" alt="CB & S Cleaning Service">
<br><hr>
@endcomponent
