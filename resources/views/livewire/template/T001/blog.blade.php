<div>

  @include('livewire.template.T001.header-footer')
<style>
  .mobile-view {
    display: none;
}

@media only screen and (max-width: 768px) {
    .pc-view {
        display: none;
    }
    .mobile-view {
        display: block;
    }
}
</style>
  <div class="container px-3">
    <h1>My Blogs</h1>
    <p>Here are my scribbles</p>

<div class="row w-100">
  @foreach ($blogs as $blog)
  <div class="col col-lg-3 col-md-3 col-sm-12">
    {{-- <a  class="text-left btn"> --}}
      <a href="/blog/{{ $blog->slug }}" class="btn p-0 card m-2 w-100" >
        <img src="{{ $blog->img ? asset('img/blog/'.$blog->img):asset('img/nia.jpg') }}" class="card-img-top" style="height: 150px" >
        <div class="card-body">
          <h5 class="card-title">{{ $blog->blog_title }}</h5>
        </div>
      </a>
    {{-- </a> --}}
  </div>
  @endforeach
</div>


  </div>

</div>