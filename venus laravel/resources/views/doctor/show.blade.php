<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">{{ $doctor->doctor_name }}'s Ward Patients</h1>

    @if ($doctor->wardadmissions->isEmpty())
        <h2 class="text-danger text-center">Doctor hasn't ward patients</h2>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Patient First Name</th>
                    <th>Patient Last Name</th>
                    <th>Patient Address</th>
                    <th>Patient BHT No</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctor->wardadmissions as $wardadmission)
                <tr>
                    <td>{{ $wardadmission->patient_first_name }}</td>
                    <td>{{ $wardadmission->patient_last_name }}</td>
                    <td>{{ $wardadmission->address }}</td>
                    <td>{{ $wardadmission->bht_no }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h1 class="text-center mt-5 mb-4">{{ $doctor->doctor_name }}'s Cashier Payment Received</h1>
    @if ($payment->isEmpty())
        <h2 class="text-danger text-center">Ward patients did not pay to cashier for this doctor</h2>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Payment Status</th>
                    <th>Reference No</th>
                    <th>Income Ledger</th>
                    <th>Paid Amount</th>
                    <th>Balance</th>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Payment Received Person</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payment as $paydoctor)
                <tr>
                    <td>{{ $paydoctor->id }}</td>
                    <td>{{ $paydoctor->date }}</td>
                    <td>{{ $paydoctor->amount }}</td>
                    <td>{{ $paydoctor->payment_status }}</td>
                    <td>{{ $paydoctor->reference_no }}</td>
                    <td>{{ $paydoctor->income_ledger }}</td>
                    <td>{{ $paydoctor->paid_amount }}</td>
                    <td>{{ $paydoctor->balance }}</td>
                    <td>{{ $paydoctor->patient_name }}</td>
                    <td>{{ $paydoctor->doctor_name }}</td>
                    <td>{{ $paydoctor->payment_received_by }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h1 class="text-center mt-5 mb-4">{{ $doctor->doctor_name }}'s Wards</h1>
    @if ($doctor->wards->isEmpty())
        <h2 class="text-danger text-center">Doctor hasn't seen any wards</h2>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Room Name</th>
                    <th>Type</th>
                    <th>Room No</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctor->wards as $ward)
                <tr>
                    <td>{{ $ward->id }}</td>
                    <td>{{ $ward->room_name }}</td>
                    <td>{{ $ward->type }}</td>
                    <td>{{ $ward->room_no }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
