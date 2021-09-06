@component('mail::message')
Dear Team,

We write to inform you that {{ $mailData['name'] }} contacted C.B & S Cleaning Services. Please see more details of the request below.

## Contact Details
## Email:  {{ $mailData['email'] }}<br>
## Subject:  {{ $mailData['subject'] }}<br>
## Message:  {{ $mailData['message'] }}<br><br>


Thanks,<br>
{{ config('app.name') }}
<br><br>
14, Toyin Street, Ikeja, Lagos.
+234 817 341 1535, +234 809 641 5395| info@cbs-services.com.ng
<br>
<img src="http://www.cbs-services.com.ng/assets/images/logo.png" width="110" alt="CB & S Cleaning Service">
<br><hr>
@endcomponent
