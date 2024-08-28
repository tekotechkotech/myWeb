<!-- Button trigger modal -->
<button type="button" wire:click="showModal('',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#blogModal">
    Tambah Blog
</button>

<!-- Modal -->
<div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" wire:ignore.self aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="blogModalLabel">
                    @if($this->delete==true) Hapus @elseif($this->blog['id']!='') Edit @else Tambah @endif Blog
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="blog_title" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="blog_title" @if($this->delete==true) disabled @endif wire:model="blog.blog_title">
                        @error('blog.blog_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" @if($this->delete==true) disabled @endif wire:model="blog.slug">
                        @error('blog.slug') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" @if($this->delete==true) disabled @endif wire:model="blog.content"></textarea>
                        @error('blog.content') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    @if($this->delete==true) Yakin Hapus Data ini? @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn @if($this->delete==true) btn-danger @elseif($this->blog['id']!='') btn-success @else btn-primary @endif">
                        @if($this->delete==true) Delete @elseif($this->blog['id']!='') Update @else Save @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('closeModal', event => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('blogModal'));
            modal?.hide();
        });
    </script>
@endpush
