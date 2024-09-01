<div>

    @include('livewire.template.T001.header-footer')

    <div class="container px-3">
        <div class="card">
            <div class="card-body">

                <h1>{{ $usernya->name }}</h1>
                <table class="table">
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            {{ $usernya->email }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phone
                        </td>
                        <td>
                            {{ $usernya->phone }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address
                        </td>
                        <td>
                            {{ $usernya->address }}
                        </td>
                    </tr>
                </table>

                <br>
                <p>{{ $usernya->profile_summary }}</p>


                <h5>
                    SKILLS
                </h5>
                <table style=" margin-bottom:10px">
                    @foreach($usernya->skills->groupBy('category') as $category => $skillsGroup)
                    <tr>
                        <td class="text-bold text-left" style="width:210px">{{ $category }}</td>
                        <td>:</td>
                        <td class="text-left">
                            @foreach($skillsGroup as $skillnya)
                            {{ $skillnya->skill_name }},
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>