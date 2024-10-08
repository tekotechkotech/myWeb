@push('navbar-header')
<nav class="navbar navbar-expand-lg bg-body-tertiary">

    <style>
        .profile-pic {
            width: 30px; /* Ukuran lingkaran */
            height: 30px; /* Ukuran lingkaran */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover; /* Menjaga proporsi gambar */
            border: 2px solid #ccc; /* Border lingkaran */
        }
    </style>
    <div class="container">
        <a class="navbar-brand" href="#">faiz-ag.com</a>
        <div class="">
            <span>
                
    <img src="https://t4.ftcdn.net/jpg/05/89/93/27/360_F_589932782_vQAEAZhHnq1QCGu5ikwrYaQD0Mmurm0N.webp" alt="No Profile" class="profile-pic">
            </span>
        </div>
    </div>
</nav>
@endpush

@push('navbar-footer')

<br><br>
<div class="text-center">
    ©2024 by Faiz AG | made with

    <a href="https://livewire.laravel.com/" target="_blank">
        <svg width="40" height="30" viewBox="-10 0 60 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M34.8 27.706C34.12 28.734 33.605 30 32.223 30c-2.326 0-2.452-3.587-4.78-3.587-2.327 0-2.201 3.587-4.527 3.587s-2.452-3.587-4.78-3.587c-2.327 0-2.201 3.587-4.528 3.587-2.326 0-2.452-3.587-4.78-3.587C6.5 26.413 6.628 30 4.3 30c-.731 0-1.245-.354-1.678-.84A19.866 19.866 0 0 1 0 19.24C0 8.613 8.208 0 18.333 0 28.46 0 36.667 8.614 36.667 19.24c0 3.037-.671 5.91-1.866 8.466Z"
                fill="#FB70A9"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M34.8 27.706C34.12 28.734 33.605 30 32.223 30c-2.326 0-2.452-3.587-4.78-3.587-2.327 0-2.201 3.587-4.527 3.587s-2.452-3.587-4.78-3.587c-2.327 0-2.201 3.587-4.528 3.587-2.326 0-2.452-3.587-4.78-3.587C6.5 26.413 6.628 30 4.3 30c-.731 0-1.245-.354-1.678-.84A19.866 19.866 0 0 1 0 19.24C0 8.613 8.208 0 18.333 0 28.46 0 36.667 8.614 36.667 19.24c0 3.037-.671 5.91-1.866 8.466Z"
                fill="#FB70A9"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M30.834 29.617c4.804-7.147 4.929-15.075.372-23.784a19.19 19.19 0 0 1 5.461 13.447c0 3.026-.695 5.89-1.934 8.434C34.028 28.738 33.493 30 32.06 30c-.49 0-.886-.148-1.226-.383Z"
                fill="#E24CA6"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M17.35 24.038c6.376 0 9.06-3.698 9.06-8.95C26.41 9.834 22.355 5 17.35 5c-5.003 0-9.059 4.835-9.059 10.087 0 5.253 2.684 8.951 9.06 8.951Z"
                fill="#fff"></path>
            <path
                d="M14.915 15.385c1.876 0 3.397-1.68 3.397-3.75 0-2.071-1.52-3.75-3.397-3.75-1.876 0-3.397 1.679-3.397 3.75 0 2.07 1.52 3.75 3.397 3.75Z"
                fill="#030776"></path>
            <path
                d="M14.35 12.5c.937 0 1.698-.775 1.698-1.73 0-.957-.76-1.731-1.699-1.731-.938 0-1.699.774-1.699 1.73s.76 1.731 1.7 1.731Z"
                fill="#fff"></path>
        </svg></a>
</div>
<br><br><br><br>
<style>
    small{
        font-size: 8pt;
    }
</style>
<div class="fixed-bottom">
    <nav class="navbar  navbar-expand-lg bg-body-tertiary">
        <div class="container w-100 ">
            <div class="row w-100 m-auto">

                <div class="col-3">
                    <a href="{{ route('home') }}" class=" btn btn-{{ request()->routeIs('home')?"":" outline-" }}light
                        py-3 d-block w-100" style="border-radius: 10px">
                        <i class="fas fa-igloo p-1"></i><br>
                        <small>Home</small>
                    </a>
                </div>

                <div class="col-3">
                    <a href="{{ route('project',['id'=>'null']) }}"
                        class=" btn btn-{{ request()->routeIs('project')?"":" outline-" }}light py-3 d-block w-100"
                        style="border-radius: 10px">
                        <i class="fas fa-microchip p-1"></i><br>
                        <small>Portfolio</small>
                    </a>
                </div>

                <div class="col-3">
                    <a href="{{ route('blog',['id'=>'null']) }}" class=" btn btn-{{ request()->routeIs('blog')?"":"
                        outline-" }}light py-3 d-block w-100" style="border-radius: 10px">
                        <i class="fab fa-hive p-1"></i><br>
                        <small>Blog</small>
                    </a>
                </div>

                <div class="col-3">
                    <a href="{{ route('about') }}" class=" btn btn-{{ request()->routeIs('about')?"":" outline-" }}light
                        py-3 d-block w-100" style="border-radius: 10px">
                        <i class="fas fa-id-badge p-1"></i><br>
                        <small>About</small>
                    </a>
                </div>

            </div>
        </div>
    </nav>
</div>
@endpush