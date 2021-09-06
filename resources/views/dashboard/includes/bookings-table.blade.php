<div class="table-responsive">
    <table class="table table-hover mb-0" id="basicExample">
        <thead class="thead-primary">
            <tr>
                <th class="cell">#</th>
                <th class="cell">Name</th>
                <th class="cell">Email</th>
                <th class="cell">Phone Number</th>
                <th class="cell">Service</th>
                <th class="cell">Message</th>
                <th class="cell">Date Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td class="cell">{{ $loop->iteration }}</td>
                <td class="cell">{{ !empty($service->name) ? Str::title($service->name) : '-' }}</td>
                <td class="cell">{{ !empty($service->email) ? $service->email : '-' }}</td>
                <td class="cell">{{ !empty($service->phone_number) ? $service->phone_number : '-' }}</td>
                <td class="cell">{{ !empty($service->service) ? $service->service : '-' }}</td>
                <td class="cell">{{ !empty($service->message) ? $service->message : '-' }}</td>
                <td class="cell">{{ Carbon\Carbon::parse($service->created_at)->isoFormat('MMMM Do YYYY, hh:mm:ssa') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><!--//table-responsive-->

