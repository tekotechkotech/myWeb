<div>
    
    @include('livewire.template.T001.header-footer')

    <div class="container p-3">

        <a href="#" class="btn btn-outline-light" style="border-radius: 20px">faizzzzz571@gmail.com</a>
        <a href="{{ route('my-cv') }}" class="btn btn-outline-light" style="border-radius: 20px">see My Resume</a>
        <br>
        <br>
        <br>
        <span>
            Hello World,
        </span><br>
        <h1>
            I'm Faiz
        </h1>
        <p>
            I have over 3 years of experience in Software Engineering, and I am eager to collaborate with you on your next project.
            </p>
            <p>

                
                ✓
                Developing robust software solutions
            </p><p>

                ✓
                Intuitive and visually appealing frontend design
            </p><p>

                ✓
                Creating seamless and user-centric UI/UX experiences
            </p>
        </p>
        <br>
        <br>
        <div class="row">
            <div class="col">
<a :href="route('project')" class="btn btn-light d-block w-100" style="border-radius: 20px">see My Portfolio</a>
            </div>
            <div class="col">

                <a :href="route('project')" class="btn btn-outline-light d-block w-100" style="border-radius: 20px">Who am i?</a>
            </div>
        </div>


        
    </div>

</div>