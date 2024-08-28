<div class="container">
    <div class="row">
        <div class="col">
            <h1>Expertises</h1>
            <p>Ini adalah halaman Expertises</p>
        </div>
        <div class="col d-flex mt-5">
            <x-modal-expertise/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
        @if($expertises->isEmpty())
            <div class="card-body alert alert-warning">
                No expertises available.
            </div>
        @else
            <table class="card-body table table-striped" style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Expertise Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Visibility</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expertises as $index => $expertise)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $expertise->expertise_name }}</td>
                            <td>{{ $expertise->start_date ? $expertise->start_date: '-' }}</td>
                            <td>{{ ucfirst($expertise->show) }}</td>
                            <td>{{ $expertise->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <button class="btn btn-success btn-sm" wire:click="showModal('{{ $expertise->id }}', false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#expertiseModal">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="showModal('{{ $expertise->id }}', true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#expertiseModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
