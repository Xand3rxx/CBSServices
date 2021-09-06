@extends('layouts.dashboard')
@section('title', 'Users')
@section('content')

<div class="content-body">
    <div class="container pd-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="{{ route('cbs-dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row row-xs">
        <div class="col-lg-12 col-xl-12 mg-t-10">
            <div class="card mg-b-10">
                <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
                    <div>
                        <h6 class="mg-b-5">Users</h6>
                        <p class="tx-13 tx-color-03 mg-b-0">This table displays a list of all C.B & S <strong> Users</strong> as of {{ date('M, d Y') }}</p>
                    </div>
                </div><!-- card-header -->
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left" id="basicExample">
                        <thead class="thead-primary">
                            <tr>
                                <th class="cell">#</th>
                                <th class="cell">Name</th>
                                <th class="cell">Email</th>
                                <th class="cell">Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="cell">{{ $loop->iteration }}</td>
                                <td class="cell">{{ !empty($user->name) ? Str::title($user->name) : '-' }}</td>
                                <td class="cell">{{ !empty($user->email) ? $user->email : '-' }}</td>
                                <td class="cell">{{ Carbon\Carbon::parse($user->created_at)->isoFormat('MMMM Do YYYY, hh:mm:ssa') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--//table-responsive-->
            </div>
        </div>
     </div>
    </div>
</div>
@endsection
