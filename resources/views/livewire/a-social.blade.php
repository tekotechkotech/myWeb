<div class="container">
    <div class="row">
        <div class="col">
            <h1>Certification</h1>
            <p>ini adalah halaman Certification</p>

        </div>
        <div class="col d-flex mt-5">
            <x-modal-social/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
            @if($socials->isEmpty())
            <div class="card-body alert alert-warning">
                No Certification available.
            </div>
        @else
        

            <table  class="card-body table table-striped " style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Platform Name</th>
                        <th scope="col">URL</th>
                        <th scope="col">User</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($socials as $index => $social)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $social->platform_name }}</td>
                            <td><a href="{{ $social->url }}" target="_blank">{{ $social->url }}</a></td>
                            <td>{{ $social->user->name }}</td>
                            <td>
                                <button class="btn btn-success btn-sm" wire:click="showModal('{{  $social->id }}',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#socialModal">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="showModal('{{  $social->id }}',true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#socialModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        

        @endif
    </div>
</div>
