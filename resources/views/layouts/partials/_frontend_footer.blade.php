<footer class="footer pt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 footer_logo">
                <a href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}" class="top-nav-logo" alt="Logo"> </a></a>
                <p>
                    C. B & S Cleaning Services Limited main business focus is in janitorial, façade cleaning, fumigation, post-construction cleaning, floor treatment (marble, granite, terrazzo, vitrified tiles and wooden floors) and facilities management.
                </p>
                <p>Our operations are tested and we leverage on our extensive years of experience.</p>
            </div>

            <div class="col-md-6 col-lg-4 mt-xs-30 link_footer">
                <h4>Quick Links</h4>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('page', 'about') }}">About us</a>
                    </li>
                    <li>
                        <a href="{{ route('page', 'services') }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('page', 'contact') }}">Contact us</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 col-lg-4 mt-xs-30 link_footer">
                <h4>Our Services</h4>
                <ul>
                    <li>
                        <a href="{{ route('page', 'facility-management') }}">Facility Management</a>
                    </li>
                    <li>
                        <a href="{{ route('page', 'services') }}">Cleaning/Janitorial</a>
                    </li>
                    <li>
                        <a href="{{ route('page', 'fumigation') }}">Fumigation</a>
                    </li>
                    <li>
                        <a href="{{ route('page', 'services') }}">Post Construction Cleaning</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="bottom-footer text-center">
        <div class="container">
            <div class="bor_top clearfix">
                <p>
                    <a href="{{ route('index') }}">© {{ date('Y') }} CB & S Cleaning Services. All rights reserved.</a>
                </p>

            </div>
        </div>
    </div>
</footer>
