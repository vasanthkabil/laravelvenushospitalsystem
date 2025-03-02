<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venus Hospital Ward System</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <h1 class="mb-4">Venus Hospital Ward System</h1>

        <div class="row justify-content-center">
            <div class="col-md-2 mb-3">
                <a href="{{ url('patients') }}" class="btn btn-primary w-100">Patients</a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="{{ url('doctors') }}" class="btn btn-primary w-100">Doctors</a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="{{ url('wardadmissions') }}" class="btn btn-primary w-100">Ward Admissions</a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="{{ url('wards') }}" class="btn btn-primary w-100">Wards</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

