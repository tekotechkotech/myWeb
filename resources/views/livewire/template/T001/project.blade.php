<div>
    
    @include('livewire.template.T001.header-footer')

    <div class="container p-3">
<h1>My Portfolio</h1>
<p>project yg pernah saya buat</p>
@foreach ($ports as $port)
<div class="card m-2 w-100" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $port->project_name }}</h5>
      
      nama cuma judul
      Deskripsi panjang
      
      visit web
      repository


      Project Overview
      - tambah
      - subtitle
      - slogan
      - role
      - teknologi

    </div>
  </div>
@endforeach

    </div>

</div>