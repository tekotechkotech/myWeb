<!-- Button trigger modal -->
<button type="button" wire:click="showModal('',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Education
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" wire:ignore.self aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="educationModalLabel">@if($this->delete==true) Hapus  @elseif($this->education['id']!='') Edit @else Tambah @endif Education</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="degree" class="form-label">Degree</label>
                        <input type="text" class="form-control" id="degree" @if($this->delete==true) disabled @endif wire:model="education.degree">
                        @error('education.degree') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="institution" class="form-label">Institution</label>
                        <input type="text" class="form-control" id="institution" @if($this->delete==true) disabled @endif wire:model="education.institution">
                        @error('education.institution') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" @if($this->delete==true) disabled @endif wire:model="education.start_date">
                        @error('education.start_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" @if($this->delete==true) disabled @endif wire:model="education.end_date">
                        @error('education.end_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" @if($this->delete==true) disabled @endif wire:model="education.description"></textarea>
                        @error('education.description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    @if($this->delete==true) Yakin Hapus Data ini? @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn @if($this->delete==true) btn-danger @elseif($this->education['id']!='') btn-success @else btn-primary @endif">
                        @if($this->delete==true) Delete  @elseif($this->education['id']!='') Update @else Save @endif
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
