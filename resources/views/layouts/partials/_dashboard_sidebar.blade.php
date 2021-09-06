<aside class="aside aside-fixed">
    <div class="aside-header">
        <a href="#" class="aside-logo"> <img src="{{ asset('assets/images/logo.png') }}" width="150" alt="C.B & S Cleaning Services Logo">
        </a>
      <a href="#" class="aside-logo"></a>
      <a href="" class="aside-menu-link">
        <i data-feather="menu"></i>
        <i data-feather="x"></i>
      </a>
    </div>
    <div class="aside-body">
        <div class="aside-loggedin">
            <div class="d-flex align-items-center justify-content-start">
              <a href="" class="avatar"><img src="{{ asset('assets/images/default-female-avatar.png') }}" class="rounded-circle" alt="Profile Avatar"></a>
              <div class="aside-alert-link">
                    {{-- <a href="#" class="new" data-toggle="tooltip" title="You have 0 unread messages"><i data-feather="message-square"></i></a> --}}
                        <a onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" href="{{ route('logout') }}" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
               </div>
            </div>
            <div class="aside-loggedin-user">
              <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
                <h6 class="tx-semibold mg-b-0"> {{ !empty($profile->name) ? Str::title($profile->name) : 'UNAVAILABLE' }}</h6>
                  <i data-feather="chevron-down"></i>
                </a>
                <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
            </div>
            <div class="collapse" id="loggedinMenu">
              <ul class="nav nav-aside mg-b-0">
                <li class="nav-item"><a href="{{ route('cbs-settings') }}" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
              </ul>
            </div>
        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
            <li class="nav-item {{ Route::currentRouteNamed('cbs-dashboard') ? 'active' : '' }}"><a href="{{ route('cbs-dashboard') }}" class="nav-link"><i data-feather="airplay"></i> <span>Home</span></a></li>

            <li class="nav-item {{ Route::currentRouteNamed('cbs-bookings') ? 'active' : '' }}"><a href="{{ route('cbs-bookings') }}" class="nav-link"><i data-feather="file-text"></i> <span>Bookings</span></a></li>

            <li class="nav-item {{ Route::currentRouteNamed('cbs-contacts') ? 'active' : '' }}"><a href="{{ route('cbs-contacts') }}" class="nav-link"><i data-feather="git-pull-request"></i> <span>Contact</span></a></li>

            <li class="nav-item {{ Route::currentRouteNamed('cbs-users') ? 'active' : '' }}"><a href="{{ route('cbs-users') }}" class="nav-link"><i data-feather="users"></i> <span>Users</span></a></li>

            <li class="nav-label mg-t-"><hr></li>
            <li class="nav-item {{ Route::currentRouteNamed('cbs-settings') ? 'active' : '' }}"><a href="{{ route('cbs-settings') }}" class="nav-link"><i data-feather="settings"></i> <span>Settings</span></a></li>
        </ul>
    </div>
</aside>
