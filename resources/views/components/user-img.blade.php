<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit.prevent="imgSubmit" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" wire:model="photo" class="form-control @error('photo') is-invalid @enderror" id="photo" accept="image/*">
            @error('photo') <div class="invalid-feedback">{{ $message }}</div> @enderror

            @if (isset($photo))
                <div class="mt-3">
                    <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="img-thumbnail" width="200">
                </div>
            @endif
        </div>


        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
            Submit
            <span wire:loading wire:target="submit" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </button>
    </form>
</div>
