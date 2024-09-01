<div>
    
    @include('livewire.template.T001.header-footer')

    <style>
    
    

    </style>
    <div class="container px-3">

        <a href="#" class="btn btn-outline-light" style="border-radius: 20px">faizzzzz571@gmail.com</a>
        <a href="{{ route('my-cv') }}" target="blank" class="btn btn-outline-light" style="border-radius: 20px">see My Resume</a>
        <br>
        <br>
        <br>
        <span>
            Hello World,
        </span><br>
        <h1>
            {{-- @dd($usernya) --}}
            I'm {{ $usernya->name }}
        </h1>
        
        {{-- @dd($usernya->expertises) --}}
        <h4>
            <span class="typewrite" data-period="2000" data-type='@json($usernya->expertises->pluck("expertise_name")->toArray())'>
              <span class="wrap"></span>
            </span>
        </h4>

        <p>
            @if($usernya->expertises->where('show','show')->isNotEmpty())
            <p>I have over {{ \Carbon\Carbon::parse($usernya->expertises->where('show','show')->first()->start_date)->diffInYears(\Carbon\Carbon::now()) }} years of experience in {{ $usernya->expertises->where('show','show')->first()->expertise_name }}, and I am eager to collaborate with you on your next project.</p>
            @endif
            </p>
            <p>✓ Full-stack mastery: Develop and deliver comprehensive applications from front-end to back-end, providing end-to-end solutions.</p>
            <p>✓ Innovative problem-solver: Drive innovation and deliver exceptional solutions to complex challenges, exceeding client expectations.</p>
            <p>✓ Tech-savvy versatility: Possess a broad skill set across programming languages, frameworks, and databases to adapt to evolving client needs.</p>
            
        </p>
        <br>
        <br>
        <div class="row">
            <div class="col">
<a href="{{ route('project',['id'=>'null']) }}" class="btn btn-light d-block w-100" style="border-radius: 20px">see My Portfolio</a>
            </div>
            <div class="col">

                <a href="{{ route('about') }}" class="btn btn-outline-light d-block w-100" style="border-radius: 20px">Who am i?</a>
            </div>
        </div>


        
    </div>

    @push('script')
        <script>
            var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
        </script>
    @endpush
</div>