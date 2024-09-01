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
    <h1>My Portfolio</h1>
    <p>lets see my portfolio</p>


    <div class="row w-100">
      @foreach ($ports as $blog)
      <div class="col col-lg-3 col-md-3 col-sm-12">
        {{-- <a  class="text-left btn"> --}}
          <a href="/project/{{ $blog->project_name }}" class="btn p-0 card m-2 w-100" >
            <img src="{{ $blog->img ? asset('img/portfolio/'.$blog->img):asset('img/nia.jpg') }}" class="card-img-top" style="height: 150px" >
            <div class="card-body">
              <h5 class="card-title">{{ $blog->project_name }}</h5>
            </div>
          </a>
        {{-- </a> --}}
      </div>
      @endforeach
    </div>




  </div>

</div>