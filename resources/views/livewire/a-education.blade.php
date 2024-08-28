<div class="container">
    <div class="row">
        <div class="col">
            <h1>Certification</h1>
            <p>ini adalah halaman Certification</p>

        </div>
        <div class="col d-flex mt-5">
            <x-modal-education/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
            @if($educations->isEmpty())
            <div class="card-body alert alert-warning">
                No Certification available.
            </div>
        @else
        

            <table  class="card-body table table-striped " style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Institution</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">User</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educations as $index => $education)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $education->degree }}</td>
                            <td>{{ $education->institution }}</td>
                            <td>{{ $education->start_date ? $education->start_date : '-' }}</td>
                            <td>{{ $education->end_date ? $education->end_date : '-' }}</td>
                            <td>{{ $education->description }}</td>
                            <td>{{ $education->user->name }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" wire:click="showModal('{{  $education->id }}',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="showModal('{{  $education->id }}',true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        

        @endif
    </div>
</div>
