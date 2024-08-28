<div class="container">
    <div class="row">
        <div class="col">
            <h1>Certification</h1>
            <p>ini adalah halaman Certification</p>

        </div>
        <div class="col d-flex mt-5">
            <x-modal-experience/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
            @if($experiences->isEmpty())
            <div class="card-body alert alert-warning">
                No Certification available.
            </div>
        @else
        

            <table  class="card-body table table-striped " style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">User</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($experiences as $index => $experience)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $experience->job_title }}</td>
                            <td>{{ $experience->company_name }}</td>
                            <td>{{ $experience->category ?? 'N/A' }}</td>
                            <td>{{ $experience->start_date ? $experience->start_date : '-' }}</td>
                            <td>{{ $experience->end_date ? $experience->end_date : '-' }}</td>
                            <td>{{ $experience->description }}</td>
                            <td>{{ $experience->user->name }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" wire:click="showModal('{{  $experience->id }}',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#experienceModal">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="showModal('{{  $experience->id }}',true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#experienceModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        

        @endif
    </div>
</div>
