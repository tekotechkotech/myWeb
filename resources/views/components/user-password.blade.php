<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit.prevent="passwordSubmit" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="password" class="form-label">Password Lama<span class="text-danger">*</span></label>
            <input type="password" wire:model.defer="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
            <input type="password" wire:model.defer="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password<span class="text-danger">*</span></label>
            <input type="password" wire:model.defer="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm your password">
            @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
            Submit
            <span wire:loading wire:target="submit" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </button>
    </form>
</div>
