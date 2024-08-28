<div class="container">
    <div class="row">
        <div class="col">
            <h1>Certification</h1>
            <p>ini adalah halaman Certification</p>

        </div>
        <div class="col d-flex mt-5">
            <x-modal-project/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
            @if($projects->isEmpty())
            <div class="card-body alert alert-warning">
                No Certification available.
            </div>
        @else
        

            <table  class="card-body table table-striped " style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">URL</th>
                        <th scope="col">User</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $index => $project)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->description ?? 'N/A' }}</td>
                            <td><a href="{{ $project->url }}" target="_blank">{{ $project->url ?? 'N/A' }}</a></td>
                            <td>{{ $project->user->name }}</td>
                            <td>
                                <button class="btn btn-success btn-sm" wire:click="showModal('{{  $project->id }}',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#projectModal">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="showModal('{{  $project->id }}',true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#projectModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        

        @endif
    </div>
</div>
