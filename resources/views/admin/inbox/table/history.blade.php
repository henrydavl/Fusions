<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">History</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($history) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($history as $inbox)
                        <tr class="text-center">
                            <td>{{$inbox->id}}</td>
                            <td>{{ucwords($inbox->name)}}</td>
                            <td>{{$inbox->email}}</td>
                            <td>{{$inbox->body}}</td>
                            <td>@if($inbox->admin_id == null)<p class="text-danger">Rejected</p> @else <p class="text-success">Responded</p> @endif</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {{$history->links()}}
                </div>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>