<div class="container">
    <div class="row">
        <div class="col">
            <h1>Certification</h1>
            <p>ini adalah halaman Certification</p>

        </div>
        <div class="col d-flex my-5">
<x-modal-certification/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
            @if($certifications->isEmpty())
            <div class="card-body alert alert-warning">
                No Certification available.
            </div>
        @else
        

            <table  class="card-body table table-striped " style="border-radius: 10px">
                <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Certification Name</th>
                            <th scope="col">Institution</th>
                            <th scope="col">Issue Date</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">User</th>
                            <th scope="col">Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach(($certifications) as $index => $certification)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $certification->certification_name }}</td>
                        <td>{{ $certification->institution }}</td>
                        <td>{{ $certification->issue_date ? $certification->issue_date : '-' }}</td>
                        <td>{{ $certification->expiry_date ? $certification->expiry_date : '-' }}</td>
                        <td>{{ $certification->user->name }}</td>
                        <td>
                            
                            <button class="btn btn-primary btn-sm" wire:click="showModal('{{  $certification->id }}',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                            <button class="btn btn-danger btn-sm" wire:click="showModal('{{  $certification->id }}',true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        

        @endif
    </div>
</div>
