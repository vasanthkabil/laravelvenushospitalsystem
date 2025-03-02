<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Patient Details ({{ $patients->total() }})</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Age</th>
                <th>Gender</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td><a href="{{ url("patients/$patient->id") }}" class="text-decoration-none">{{ $patient->patient_name }}</a></td>
                <td>{{ $patient->mobile }}</td>

                <td>{{ $patient->address ?? '!No Data' }}</td>
                <td>{{ $patient->age }}</td>
                <td>{{ $patient->gender ?? '!No Data' }}</td>
                <td>{{ $patient->user_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $patients->links() }}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
