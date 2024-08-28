<div class="container">
    <div class="row">
        <div class="col">
            <h1>Certification</h1>
            <p>ini adalah halaman Certification</p>

        </div>
        <div class="col d-flex mt-5">
            <x-modal-Skill/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
            @if($skills->isEmpty())
            <div class="card-body alert alert-warning">
                No Certification available.
            </div>
        @else
        

            <table  class="card-body table table-striped " style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Skill Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Proficiency</th>
                        <th scope="col">User</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skills as $index => $skill)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $skill->skill_name }}</td>
                            <td>{{ $skill->category ?? 'N/A' }}</td>
                            <td>{{ $skill->proficiency ?? 'N/A' }}</td>
                            <td>{{ $skill->user->name }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" wire:click="showModal('{{  $skill->id }}',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#skillModal">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="showModal('{{  $skill->id }}',true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#skillModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        

        @endif
    </div>
</div>
