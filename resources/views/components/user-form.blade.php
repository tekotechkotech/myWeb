<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit.prevent="profileSubmit" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" wire:model.defer="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email">
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" wire:model.defer="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter your phone number">
            @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="web" class="form-label">Website</label>
            <input type="url" wire:model.defer="web" class="form-control @error('web') is-invalid @enderror" id="web" placeholder="Enter your website URL">
            @error('web') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea wire:model.defer="address" class="form-control @error('address') is-invalid @enderror" id="address" rows="3" placeholder="Enter your address"></textarea>
            @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="profile_summary" class="form-label">Profile Summary</label>
            <textarea wire:model.defer="profile_summary" class="form-control @error('profile_summary') is-invalid @enderror" id="profile_summary" rows="5" placeholder="Write a brief summary about yourself"></textarea>
            @error('profile_summary') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
            Submit
            <span wire:loading wire:target="submit" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </button>
    </form>
</div>
