<!-- Button trigger modal -->
<button type="button" wire:click="showModal('',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Certificate
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" wire:ignore.self aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">@if($this->delete==true) Hapus  @elseif($this->certification['id']!='') Edit @else Tambah @endif Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="certification_name" class="form-label">Certification Name</label>
                        <input type="text" class="form-control" id="certification_name" @if($this->delete==true) disabled @endif wire:model="certification.certification_name">
                        @error('certification.certification_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="institution" class="form-label">Institution</label>
                        <input type="text" class="form-control" id="institution" @if($this->delete==true) disabled @endif wire:model="certification.institution">
                        @error('certification.institution') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="issue_date" class="form-label">Issue Date</label>
                        <input type="date" class="form-control" id="issue_date" @if($this->delete==true) disabled @endif wire:model="certification.issue_date">
                        @error('certification.issue_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="expiry_date" class="form-label">Expiry Date</label>
                        <input type="date" class="form-control" id="expiry_date" @if($this->delete==true) disabled @endif wire:model="certification.expiry_date">
                        @error('certification.expiry_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    @if($this->delete==true) Yakin Hapus Data ini? @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn @if($this->delete==true) btn-danger @elseif($this->certification['id']!='') btn-success @else btn-primary @endif">
                        {{-- @if (!empty($this->delete) && $this->delete==true)
                            Delete
                        @endif --}}
                        @if($this->delete==true) Delete  @elseif($this->certification['id']!='') Update @else Save @endif
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('closeModal', event => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
            modal?.hide();
        });
    </script>
@endpush