@push('navbar-header')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">faiz-ag.com</a>
            <div class="">
                <span>
                    Siapa
                </span>
            </div>
        </div>
    </nav>
    @endpush

    @push('navbar-footer')

    <nav class="navbar fixed-bottom navbar-expand-lg bg-body-tertiary">
        <div class="container w-100 ">
            <div class="row w-100 m-auto">

                <div class="col col-sm-3 col-md-3 col-lg-3">
                    <a href="{{ route('home') }}" class=" btn btn-{{ request()->routeIs('home')?"":"outline-" }}light py-3 d-block w-100" style="border-radius: 10px">
                        Home
                    </a>
                </div>

                <div class="col col-sm-3 col-md-3 col-lg-3">
                    <a href="{{ route('project',['id'=>'null']) }}" class=" btn btn-{{ request()->routeIs('project')?"":"outline-" }}light py-3 d-block w-100" style="border-radius: 10px">
                        Project
                    </a>
                </div>

                <div class="col col-sm-3 col-md-3 col-lg-3">
                    <a href="{{ route('blog',['id'=>'null']) }}" class=" btn btn-{{ request()->routeIs('blog')?"":"outline-" }}light py-3 d-block w-100" style="border-radius: 10px">
                        Blog
                    </a>
                </div>

                <div class="col col-sm-3 col-md-3 col-lg-3">
                    <a href="{{ route('about') }}" class=" btn btn-{{ request()->routeIs('about')?"":"outline-" }}light py-3 d-block w-100" style="border-radius: 10px">
                        About
                    </a>
                </div>

            </div>
        </div>
    </nav>
    @endpush