<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Post</h1>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="certification_name" class="form-label">Certification Name</label>
                        <input type="text" class="form-control" id="certification_name" wire:model="certification.certification_name">
                        @error('certification.certification_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="institution" class="form-label">Institution</label>
                        <input type="text" class="form-control" id="institution" wire:model="certification.institution">
                        @error('certification.institution') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="issue_date" class="form-label">Issue Date</label>
                        <input type="date" class="form-control" id="issue_date" wire:model="certification.issue_date">
                        @error('certification.issue_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="expiry_date" class="form-label">Expiry Date</label>
                        <input type="date" class="form-control" id="expiry_date" wire:model="certification.expiry_date">
                        @error('certification.expiry_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <span>Tersimpan</span>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        @if($certificationId) Update @else Save @endif
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
</div>