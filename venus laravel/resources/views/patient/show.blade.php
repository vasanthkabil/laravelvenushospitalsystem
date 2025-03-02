<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ward Admission Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">{{ $patient->patient_name }} Ward Admission Details</h1>

    @if (is_null($wardadmit))
        <h2 class="text-danger text-center">Patient has not been admitted</h2>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>BHT NO</th>
                    <th>Patient First Name</th>
                    <th>Patient Last Name</th>
                    <th>Doctor Name</th>
                    <th>Ward ID</th>
                    <th>Ward No</th>
                    <th>Admitted Date</th>
                    <th>Admitted Time</th>
                    <th>Status</th>
                    <th>Admission Fees Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $wardadmit->bht_no }}</td>
                    <td>{{ $wardadmit->patient_first_name }}</td>
                    <td>{{ $wardadmit->patient_last_name }}</td>
                    <td>{{ $wardadmit->doctor_name }}</td>
                    <td>{{ $wardadmit->ward_id }}</td>
                    <td>{{ $wardadmit->ward_no }}</td>
                    <td>{{ $wardadmit->admitted_date }}</td>
                    <td>{{ $wardadmit->admitted_time }}</td>
                    <td>{{ $wardadmit->status }}</td>
                    <td>{{ $wardadmit->admission_fee_status }}</td>
                </tr>
            </tbody>
        </table>
    @endif

    <h1 class="text-center mt-5 mb-4">{{ $patient->patient_name }} Ward Doctor Details</h1>
    @if ($patient->doctors->isEmpty())
        <h2 class="text-danger text-center">Patient has not seen any doctor in wards</h2>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Doctor Name</th>
                    <th>Address</th>
                    <th>Doctor Fee</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patient->doctors as $doctor)
                <tr>
                    <td>{{ $doctor->doctor_name }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->doctor_fee }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h1 class="text-center mt-5 mb-4">{{ $patient->patient_name }} Cashier Payment Received</h1>
    @if (is_null($pay))
        <h2 class="text-danger text-center">Patient has not made any payments to the cashier</h2>
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
                <tr>
                    <td>{{ $pay->id }}</td>
                    <td>{{ $pay->date }}</td>
                    <td>{{ $pay->amount }}</td>
                    <td>{{ $pay->payment_status }}</td>
                    <td>{{ $pay->reference_no }}</td>
                    <td>{{ $pay->income_ledger }}</td>
                    <td>{{ $pay->paid_amount }}</td>
                    <td>{{ $pay->balance }}</td>
                    <td>{{ $pay->patient_name }}</td>
                    <td>{{ $pay->doctor_name }}</td>
                    <td>{{ $pay->payment_received_by }}</td>
                </tr>
            </tbody>
        </table>
    @endif
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
