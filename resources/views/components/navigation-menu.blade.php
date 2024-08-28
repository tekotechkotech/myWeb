<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">Navbar w/ text</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse m-auto" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <x-nav-link wire:navigate :active="request()->routeIs('home')" href="/">Home</x-nav-link>

            <x-nav-link wire:navigate :active="request()->routeIs('a.profile')" :href="route('a.profile')">Profile</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.blog')" :href="route('a.blog')">Blog</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.project')" :href="route('a.project')">Project</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.certification')" :href="route('a.certification')">Certification</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.social')" :href="route('a.social')">Social</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.education')" :href="route('a.education')">Education</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.experience')" :href="route('a.experience')">Experience</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.skill')" :href="route('a.skill')">Skill</x-nav-link>
            <x-nav-link wire:navigate :active="request()->routeIs('a.expertise')" :href="route('a.expertise')">Expertise</x-nav-link>
        </ul>
        <span class="navbar-text">
          {{ Auth::user()->name }}
        </span>
      </div>

    </div>
  </nav>