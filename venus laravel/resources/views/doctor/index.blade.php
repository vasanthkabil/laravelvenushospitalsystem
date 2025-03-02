<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Details</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Doctor Details</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Doctor Name</th>
                <th>Address</th>
                <th>Doctor Category</th>
                <th>Hospital Fees</th>
                <th>Doctor Fee</th>
                <th>Ward Fee</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
            <tr>
                <td><a href="{{ url("doctors/$doctor->id") }}" class="text-decoration-none">{{ $doctor->doctor_name }}</a></td>
                <td>{{ $doctor->address }}</td>
                <td>{{ $doctor->doctor_category_id }}</td>
                <td>{{ $doctor->hospital_fee }}</td>
                <td>{{ $doctor->doctor_fee }}</td>
                <td>{{ $doctor->ward_fee }}</td>
                <td>{{ $doctor->user_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $doctors->links() }}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
