<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - {{ $user->name }}</title>
    <style>
        @page {
            margin: 20px;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
        }

        /* Style untuk CV */
        .summary {
            margin-bottom: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .section {
            page-break-inside: avoid;
            
            padding: 0px;
            margin: 0px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 0px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .table th,
        .table td {
            border: 1px solid #ffffff;
            padding: 0px;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .text-bold {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        h1 {
            margin: 0px;
        }

        /* p{margin: 0px;} */
        hr {
            margin-bottom: 0px;
            margin-top: 0px;
        }
        ul,li {
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>{{ strtoupper($usernya->name) }}</h1>
        <span>{{ $user->phone }} </span> | <span> {{ $user->email }} </span> | <span> {{ $user->web }}</span><br>
        <span>{{ $user->address }}</span>
    </div>
    <p class="summary">A dedicated Fullstack Developer with over 4 years of experience in creating robust and scalable web applications using Laravel.{!! $user->profile_summary !!}</p>





    <div class="section">
        <div class="section-title">EDUCATION</div>
        <hr>
        @if($user->educations->isEmpty())
        <p class="text-center">No EDUCATION available.</p>
        @else
        @foreach($user->educations as $education)
        <table style="width: 100%; margin-bottom:0px" class="table">
            <tr>
                <td class="text-bold text-left">{{ $education->institution }}</td>
                <td class="text-bold text-right">{{ $education->address }}</td>
            </tr>
            <tr>
                <td class=" text-left">{{ $education->degree }} in {{ $education->major }} | GPA: {{ $education->point }}</td>
                <td class=" text-right">{{ $education->start_date }} - {{ $education->end_date }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    {!! $education->description !!}
                </td>
            </tr>
        </table>

        @endforeach
        @endif
        
    </div>

    <div class="section">
        <div class="section-title">EXPERIENCE</div>
        <hr>
        @if($user->experiences->isEmpty())
        <p class="text-center">No experiences available.</p>
        @else
        @foreach($user->experiences->sortByDesc('end_date') as $experience)
        <table style="width: 100%; margin-bottom:10px" class="table">
            <tr>
                <td class="text-bold text-left">{{ $experience->company_name }}</td>
                <td class="text-bold text-right">{{ $experience->company_name }}</td>
            </tr>
            <tr>
                <td class=" text-left">{{ $experience->job_title }}, {{ $experience->category }}</td>
                <td class=" text-right">{{ \Carbon\Carbon::parse($experience->start_date)->format('F Y') }} - {{ $experience->end_date=="Present"?"$experience->end_date":\Carbon\Carbon::parse($experience->end_date)->format('F Y') }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    {!! $experience->description !!}
                </td>
            </tr>
        </table>

        @endforeach
        @endif
        </div>

    <div class="section">
        <div class="section-title">CERTIFICATE</div>
        <hr>
        @if($user->certificates->isEmpty())
        <p class="text-center">No CERTIFICATE available.</p>
        @else
            @foreach($user->certificates as $certificate)
            <table style="width: 100%; margin-bottom:10px" class="table">
                <tr>
                    <td class="text-bold text-left">{{ $certificate->institution }}</td> <td class="text-bold text-right">{{ $certificate->company_name }}</td>
                </tr>
                <tr>
                    <td class=" text-left">{{ $certificate->certification_name }}, {{ $certificate->category }}</td>
                    <td class=" text-right">Nomor: {{ $certificate->number }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        {!! $certificate->description !!}
                    </td>
                </tr>
            </table>

            @endforeach
        @endif
        
    </div>


    <div class="section">
        <div class="section-title">SKILL</div>
        <hr>
        @if($user->skills->isEmpty())
        <p class="text-center">No skills available.</p>
        @else
        <table style=" margin-bottom:10px">
            @foreach($user->skills->groupBy('category') as $category => $skillsGroup)
                <tr>
                    <td class="text-bold text-left" style="width:180px" >{{ $category }}</td>
                    <td>:</td>
                    <td class="text-left">
                        @foreach($skillsGroup as $skillnya)
                        {{ $skillnya->skill_name }},
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
        @endif
     </div>


</body>

</html>