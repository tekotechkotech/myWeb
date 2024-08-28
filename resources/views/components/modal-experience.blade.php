<!-- Button trigger modal -->
<button type="button" wire:click="showModal('',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#experienceModal">
    Tambah Experience
</button>

<!-- Modal -->
<div class="modal fade" id="experienceModal" tabindex="-1" aria-labelledby="experienceModalLabel" wire:ignore.self aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="experienceModalLabel">@if($this->delete==true) Hapus  @elseif($this->experience['id']!='') Edit @else Tambah @endif Experience</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="job_title" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="job_title" @if($this->delete==true) disabled @endif wire:model="experience.job_title">
                        @error('experience.job_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="company_name" @if($this->delete==true) disabled @endif wire:model="experience.company_name">
                        @error('experience.company_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" @if($this->delete==true) disabled @endif wire:model="experience.category">
                        @error('experience.category') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" @if($this->delete==true) disabled @endif wire:model="experience.start_date">
                        @error('experience.start_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" @if($this->delete==true) disabled @endif wire:model="experience.end_date">
                        @error('experience.end_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" @if($this->delete==true) disabled @endif wire:model="experience.description"></textarea>
                        @error('experience.description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    @if($this->delete==true) Yakin Hapus Data ini? @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn @if($this->delete==true) btn-danger @elseif($this->experience['id']!='') btn-success @else btn-primary @endif">
                        @if($this->delete==true) Delete  @elseif($this->experience['id']!='') Update @else Save @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('closeModal', event => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('experienceModal'));
            modal?.hide();
        });
    </script>
@endpush
