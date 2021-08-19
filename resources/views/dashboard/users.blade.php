@extends('layouts.dashboard')
@section('title', 'Users')
@section('content')
<div class="container-xl ">

    <h1 class="app-page-title">Users</h1>
    <hr class="mb-4">

    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left" id="basicExample">
                    <thead>
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

        </div><!--//app-card-body-->
    </div><!--//app-card-->

</div><!--//container-fluid-->
@endsection
