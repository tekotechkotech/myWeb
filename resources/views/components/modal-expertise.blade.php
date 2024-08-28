<!-- Button trigger modal -->
<button type="button" wire:click="showModal('',false)" class="btn btn-primary ms-auto p-2" data-bs-toggle="modal" data-bs-target="#expertiseModal">
    Tambah Expertise
</button>

<!-- Modal -->
<div class="modal fade" id="expertiseModal" tabindex="-1" aria-labelledby="expertiseModalLabel" wire:ignore.self aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="expertiseModalLabel">@if($this->delete==true) Hapus @elseif($this->expertise['id']!='') Edit @else Tambah @endif Expertise</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="expertise_name" class="form-label">Expertise Name</label>
                        <input type="text" class="form-control" id="expertise_name" @if($this->delete==true) disabled @endif wire:model="expertise.expertise_name">
                        @error('expertise.expertise_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" @if($this->delete==true) disabled @endif wire:model="expertise.start_date">
                        @error('expertise.start_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="show" class="form-label">Visibility</label>
                        <select class="form-control" id="show" @if($this->delete==true) disabled @endif wire:model="expertise.show">
                            <option value="hidden">Hidden</option>
                            <option value="show">Show</option>
                        </select>
                        @error('expertise.show') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    @if($this->delete==true) Yakin Hapus Data ini? @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn @if($this->delete==true) btn-danger @elseif($this->expertise['id']!='') btn-success @else btn-primary @endif">
                        @if($this->delete==true) Delete  @elseif($this->expertise['id']!='') Update @else Save @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('closeModal', event => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('expertiseModal'));
            modal?.hide();
        });
    </script>
@endpush
