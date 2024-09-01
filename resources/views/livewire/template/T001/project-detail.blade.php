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
      <img src="{{ $ports->img ? asset('img/portfolio/'.$ports->img):asset('img/nia.jpg') }}" class="card-img-top"
        alt="{{ $ports->img }}">
      <div class="card-body">
        <h1 class="card-title">{{ $ports->project_name }}

          <a href="{{ $ports->repository }}" class="btn btn-sm btn-light "
            style="border-radius: 20px">Repository</a>
          <a href="{{ $ports->url }}" class="btn btn-sm btn-outline-light " style="border-radius: 20px">Visit
            Website</a>
        </h1>
        @if ($ports->tech)
        <p> <b>Technology Stack:</b> {{ $ports->tech }}</p>
        @endif
        <p class="card-title">{!! $ports->description !!}</p>
      </div>
    </div>
  </div>
</div>