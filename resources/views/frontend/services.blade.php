@extends('layouts.app')
@section('title', 'Services')
@include('layouts.partials._messages')
@include('layouts.partials._css')
@section('content')

<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Services"><span>Services</span></h1>
      		<div class="page-breadcrumb">
                <a href="{{ route('index') }}">Home</a>/ <span>Services</span>
            </div>
      	</div>
      </div>
    </div>
  </section>
<!-- Intro Section -->

<!-- Popular_Service_Section -->
@include('layouts.partials._services')
<!-- Popular_Service_Section_End -->

<!-- About Section -->
<section class="padding ptb-xs-40">
    <div class="container">
        <div class="row pb-20 pb-xs-40">
            <div class="col-md-8 offset-md-2">
                <div class="sec_hedding text-center">
                    <h2>C.B & S Cleaning Service</h2>
                    <span class="b-border"></span>
                    <p>
                        We guarantee quality and you can expect us to be attentive to very small details and to be sensitive to your needs. We redefined cleaning service into something far better than traditional cleaning services. All our service personnel are bonded, with guarantors known by us. You can be sure that your place is both kept clean and safe.
                    </p>
                </div>

                <div class="mt-xs-30 mt-sm-30">
                    <div class="full-pic">
                        <figure>
                            <img src="{{ asset('assets/images/service-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="text-box mt-40">
                        <div class="box-title mb-20 text-center">
                            <h2>Work Execution Plan</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 service-box mt-30 mt-xs-0">

                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0 panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> General <i class="fa fa-plus collape-plus"></i> </a></h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show bg-custom" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-block">
                                                <ul>
                                                    <li>All personnel permanently or temporarily appointed to sites are neatly dressed at all times in C.B & S Cleaning Services work wear, they are courteous and are fully aware of the fact that they are in a work environment.</li>
                                                    <li>Proper and efficient supervision will be provided on site.</li>
                                                    <li>The scope of services and work includes the provision of labour, cleaning consumable, accessories and equipment required for the provision of cleaning services in all areas.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingTwo">
                                            <h5 class="mb-0 panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> On Site Plan
                                                <i class="fa fa-plus collape-plus"></i> </a></h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="card-block">
                                                <ul>
                                                    <li>C.B & S Services will provide comprehensive cleaning service that ensures a neat, clean and healthy environment at all times.</li>
                                                    <li>We will maintain the approach areas and external surrounds of the premises in a neat, clean and tidy condition.</li>
                                                    <li>We will maintain and clean all internal public and common areas, including lobbies, entrance halls, corridors, staircases, restroom facilities, and all common areas.</li>
                                                    <li>We will maintain stock control of restroom consumables.</li>
                                                    <li>We will ensure waste is regularly disposed of in the recommended area in an environmentally friendly manner.</li>
                                                    <li>We will take reasonable steps to avoid or minimise the possibility of harm to the health and safety of any person.</li>
                                                    <li>We will fully and fairly notify the Company where hazardous goods or materials will be on site to ensure that the appropriate security and safety measures are taken. </li>
                                                    <li>C.B & S Services will ensure compliance to the Company’s Health, Safety and Environment (HSE) policies, while preserving the client’s capital assets, corporate image and ensuring serviceability at all times, even outside of schedule times.</li>
                                                    <li>C.B & S Services will comply with all rules and regulation relating to the site, directions and instructions given for the convenience and piece of occupiers.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-box mt-40">
                        <div class="box-title mb-20 text-center">
                            <h2>Supervision and Quality Control</h2>
                            <p class="italic">Supervision of work for effective and detailed result will be ensured by the following workers:</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 service-box mt-30 mt-xs-0">

                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingThree">
                                            <h5 class="mb-0 panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> Site Supervisor  <i class="fa fa-plus collape-plus"></i> </a></h5>
                                        </div>

                                        <div id="collapseThree" class="collapse show bg-custom" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="card-block">
                                                <ul>
                                                    <li>Coordinates all cleaning activities.</li>
                                                    <li>Supervises and ensures detailed work is done.</li>
                                                    <li>Manages the use and administration of all consumables, accessories and equipment on site.</li>
                                                    <li>Ensures proper upkeep of all items used on sites.</li>
                                                    <li>Submits a weekly report on site to the Quality Control Officer.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingFour">
                                            <h5 class="mb-0 panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Quality Control Officer 
                                                <i class="fa fa-plus collape-plus"></i> </a></h5>
                                        </div>
                                        <div id="collapseFour" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="card-block">
                                                <ul>
                                                    <li>Makes weekly visitation to all sites under the unit.</li>
                                                    <li>Compiles weekly report of sites for management.</li>
                                                    <li>Ensures absolute cleaning standards at all sites.</li>
                                                    <li>Ensures that all workers adhere to the HSE policy of the company.</li>
                                                    <li>Ensures that workers adhere to the rules and regulations of the company.</li>
                                                    <li>Ensures good welfare of all workers.</li>
                                                    <li>Collates feedback and ensures prompt and positive response.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- About Section End-->

<!-- Date_form -->
<section class="margin_top">
    <div class="container reponsive_full">
        <div class="row pb-60 pb-xs-40">
            <div class="col-lg-8 offset-lg-2 bg_black d-flex align-items-center">
                <div class="form_home">
                    <div class="section_heading mb-30 text-center">
                        <h2>Service Booking</h2>
                        <p>Feel free to call us directly or simply complete our form below and we will follow up with you.</p>
                    </div>
                    <!-- Contact FORM -->
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong style="color: #333 !important">{{ Session::get('success') }}</strong>
                    </div>
                    @endif
                    <form class="quote-form" id="contact" method="post" action="{{ route('booking.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-field">
                                    <input class="input-sm form-full @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Your Full Name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-field">
                                    <input id="email" type="email" class="input-sm form-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-field">
                                <input class="input-sm form-full @error('phone_number') is-invalid @enderror" id="phone_number" type="tel" maxlength="11" name="phone_number" placeholder="Your phone No." required>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-field">
                                <select name="service" id="service" class="input-sm form-full @error('service') is-invalid @enderror" required>
                                    <option value="" selected disabled>Select a Service</option>
                                    <option value="Apartment Cleaning">Apartment Cleaning</option>
                                    <option value="Carpet Cleaning">Carpet Cleaning</option>
                                    <option value="Domestic Cleaning">Domestic Cleaning</option>
                                    <option value="House Cleaning">House Cleaning</option>
                                    <option value="Shop Cleaning Services‎">Shop Cleaning Services‎</option>
                                    <option value="Window Cleaning">Window Cleaning</option>
                                </select>
                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-field">
                                    <textarea class="form-full @error('message') is-invalid @enderror" id="message" rows="7" name="message" placeholder="Your Message"></textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="bnt btn-text sent-but white-btn" type="submit" name="button">Send</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Contact FORM -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Date_form_End -->

@include('layouts.partials._save_time')

@push('scripts')
<script>
    //Prevent characters or string asides number in phone number input field
    $("#phone_number").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
</script>
@endpush
@endsection


