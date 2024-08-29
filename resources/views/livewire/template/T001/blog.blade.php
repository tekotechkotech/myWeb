<div>

  @include('livewire.template.T001.header-footer')

  <div class="container p-3">
    <h1>My Blogs</h1>
    <p>Artikel ku</p>
    @foreach ($blogs as $blog)
    <div class="card m-2 w-100" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $blog->blog_title }}</h5>

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