<div>
    
    @include('livewire.template.T001.header-footer')

    <div class="container p-3">
<h1>{{ $user->name }}</h1>
<p>{{ $user->email }}</p>
<p>{{ $user->phone }}</p>
<p>{{ $user->address }}</p>
{{-- <p>{{ $user->email }}</p>
<p>{{ $user->email }}</p> --}}
Skill
@foreach ($skills as $skill)
<div class="card">
    <div class="card-body">

        <span>{{ $skill->skill_name }}</span>
    </div>
</div>
@endforeach

        
    </div>

</div>