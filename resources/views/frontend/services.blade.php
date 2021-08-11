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
                    <h2>CB & S Cleaning Service</h2>
                    <span class="b-border"></span>
                    <p>
                        We guarantee quality and you can expect us to be attentive to very small details and to be sensitive to your needs. We redefined cleaning service into something far better than traditional cleaning services. All our service personnel are bonded, with guarantors known by us. You can be sure that your place is both kept clean and safe.
                    </p>
                </div>

                <div class="mt-xs-30 mt-sm-30">
                    <div class="full-pic">
                        <figure>
                            <img src="assets/images/service-1.jpg" alt="">
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
                                            <h5 class="mb-0 panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Dressing <i class="fa fa-plus collape-plus"></i> </a></h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show bg-custom" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-block">
                                                <p>
                                                    All personnel permanently or temporarily appointed to sites are neatly dressed at all times in C. B & S Cleaning Services work wear, they are courteous and are fully aware of the fact that they are in a work environment.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingTwo">
                                            <h5 class="mb-0 panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Supervision <i class="fa fa-plus collape-plus"></i> </a></h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="card-block">
                                                <p>
                                                    Proper and efficient supervision will be provided on site.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingThree">
                                            <h5 class="mb-0 panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Scope of Work <i class="fa fa-plus collape-plus"></i> </a></h5>
                                        </div>
                                        <div id="collapseThree" class="collapse bg-custom" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="card-block">
                                                <p>
                                                    The scope of services and work includes the provision of labour, cleaning consumable, accessories and equipment required for the provision of cleaning services in all areas.
                                                </p>
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
                    <form class="quote-form" id="contact">
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
                                    <input id="email" type="email" class="input-sm form-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
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
                                    <textarea class="form-full @error('message') is-invalid @enderror" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="bnt btn-text sent-but white-btn" type="button" id="submit" name="button">Send</button>
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


