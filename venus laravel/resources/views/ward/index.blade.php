<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ward Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Ward Details</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Room Name</th>
                <th>Type</th>
                <th>Room No</th>
                <th>Amount</th>
                <th>User ID</th>
                <th>User Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wards as $ward)
            <tr>
                <td><a href="{{ url("wards/$ward->id") }}" class="text-decoration-none">{{ $ward->id }}</a></td>
                <td><a href="{{ url("wards/$ward->id") }}" class="text-decoration-none">{{ $ward->room_name }}</a></td>
                <td>{{ $ward->type }}</td>
                <td>{{ $ward->room_no }}</td>
                <td>{{ $ward->amount }}</td>
                <td>{{ $ward->user_id }}</td>
                <td>{{ $ward->user_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
