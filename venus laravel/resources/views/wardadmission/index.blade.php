<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ward Admissions Details</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Ward Admissions Details ({{$wardadmissions->total()}})</h1>

    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>BHT No</th>
                <th>Patient First Name</th>
                <th>Patient Last Name</th>
                <th>Address</th>
                <th>Person Mobile</th>
                <th>Doctor Name</th>
                <th>Ward ID</th>
                <th>Ward No</th>
                <th>Admitted Date</th>
                <th>Admission Fee</th>
                <th>Admission Fee Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wardadmissions as $wardadmission)
            <tr>
                <td>{{ $wardadmission->id }}</td>
                <td>{{ $wardadmission->bht_no }}</td>
                <td><a href="{{ url('wardadmissions/'.$wardadmission->id) }}" class="text-decoration-none">{{ $wardadmission->patient_first_name }}</a></td>
                <td>{{ $wardadmission->patient_last_name }}</td>
                <td>{{ $wardadmission->address }}</td>
                <td>{{ $wardadmission->patient_mobile }}</td>
                <td><a href="{{ url('doctors/'.$wardadmission->doctor_id) }}" class="text-decoration-none">{{ $wardadmission->doctor_name }}</a></td>
                <td><a href="{{ url('wards/'.$wardadmission->ward_id) }}" class="text-decoration-none">{{ $wardadmission->ward_id }}</a></td>
                <td>{{ $wardadmission->ward_no }}</td>
                <td>{{ $wardadmission->admitted_date }}</td>
                <td>{{ $wardadmission->admission_fee }}</td>
                <td>{{ $wardadmission->admission_fee_status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <div class="d-flex justify-content-center">
        {{$wardadmissions->links()}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
