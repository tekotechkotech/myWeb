<!-- Button trigger modal -->
<button type="button" wire:click="showModal('',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#skillModal">
    Tambah Skill
</button>

<!-- Modal -->
<div class="modal fade" id="skillModal" tabindex="-1" aria-labelledby="skillModalLabel" wire:ignore.self aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="skillModalLabel">@if($this->delete==true) Hapus  @elseif($this->skill['id']!='') Edit @else Tambah @endif Skill</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="skill_name" class="form-label">Skill Name</label>
                        <input type="text" class="form-control" id="skill_name" @if($this->delete==true) disabled @endif wire:model="skill.skill_name">
                        @error('skill.skill_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" @if($this->delete==true) disabled @endif wire:model="skill.category">
                        @error('skill.category') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="proficiency" class="form-label">Proficiency</label>
                        <input type="text" class="form-control" id="proficiency" @if($this->delete==true) disabled @endif wire:model="skill.proficiency">
                        @error('skill.proficiency') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    @if($this->delete==true) Yakin Hapus Data ini? @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn @if($this->delete==true) btn-danger @elseif($this->skill['id']!='') btn-success @else btn-primary @endif">
                        @if($this->delete==true) Delete  @elseif($this->skill['id']!='') Update @else Save @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('closeModal', event => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('skillModal'));
            modal?.hide();
        });
    </script>
@endpush
