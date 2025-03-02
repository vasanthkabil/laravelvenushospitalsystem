<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ward Patient Details</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Ward {{$ward->id}} Patient Details ({{$wards->total()}})</h1>
    @if ($wards->isEmpty())
    <h2 class="text-danger text-center">ward hasn't ward patients</h2>
@else
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>Patient First Name</th>
                <th>Patient Last Name</th>
                <th>BHT No</th>
                <th>Address</th>
                <th>Admitted Date</th>
                <th>Admitted Time</th>
                <th>Doctor Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wards as $ward)
            <tr>
                <td><a href="{{ url("wardadmissions/$ward->id") }}" class="text-decoration-none">{{ $ward->patient_first_name }}</a></td>
                <td>{{ $ward->patient_last_name }}</td>
                <td>{{ $ward->bht_no }}</td>
                <td>{{ $ward->address }}</td>
                <td>{{ $ward->admitted_date }}</td>
                <td>{{ $ward->admitted_time }}</td>
                <td>{{ $ward->doctor_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif


    <div class="d-flex justify-content-center">
        {{$wards->links()}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
