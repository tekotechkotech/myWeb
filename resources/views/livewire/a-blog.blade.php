<div class="container">
    <div class="row">
        <div class="col">
            <h1>Blog</h1>
            <p>ini adalah halaman Blog</p>

        </div>
        <div class="col d-flex mt-5">
            <x-modal-blog/>
        </div>
    </div>
    <div class="card shadow border-0 table-responsive">
            @if($blogs->isEmpty())
            <div class="card-body alert alert-warning">
                No blogs available.
            </div>
        @else
        

            <table  class="card-body table table-striped " style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $index => $blog)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td>{{ $blog->user->name }}</td>
                            <td>{{ $blog->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <button class="btn btn-success btn-sm" wire:click="showModal('{{  $blog->id }}',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#blogModal">Edit</button>
                                <button class="btn btn-danger btn-sm" wire:click="showModal('{{  $blog->id }}',true)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#blogModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        

        @endif
    </div>
</div>
