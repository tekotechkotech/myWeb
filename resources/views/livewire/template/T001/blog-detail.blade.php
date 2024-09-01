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


    <div class="card m-2 w-100" style="width: 18rem;">
      <img src="{{ $blogs->img ? asset('img/blog/'.$blogs->img):asset('img/nia.jpg') }}" class="card-img-top" alt="{{ $blogs->img }}">
      <div class="card-body">
        <h5 class="card-title">{{ $blogs->blog_title }}</h5>
        <p class="card-title">{!! $blogs->content !!}</p>
      </div>
    </div>


  </div>

</div>