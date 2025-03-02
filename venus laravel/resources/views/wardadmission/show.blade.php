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


    <h2 class="text-center mb-4"> {{$wardadmission->patient->patient_name}} - Patient Details</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Mobile</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$wardadmission->patient->id}}</td>
                <td>{{$wardadmission->patient->patient_name}}</td>
                <td>{{$wardadmission->patient->mobile}}</td>
                <td>{{$wardadmission->patient->age}}</td>
                <td>{{$wardadmission->patient->address}}</td>
            </tr>
        </tbody>
    </table>


    <h2 class="text-center mt-5 mb-4"> {{$wardadmission->patient->patient_name}} - Doctor Details</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Doctor Name</th>
                <th>Doctor Address</th>
                <th>Doctor Category</th>
                <th>Doctor Fee</th>
                <th>Hospital Fee</th>
                <th>Ward Fee</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wardadmission->doctors as $doctor)
            <tr>
                <td>{{$doctor->doctor_name}}</td>
                <td>{{$doctor->address}}</td>
                <td>{{$doctor->doctor_category_id}}</td>
                <td>{{$doctor->doctor_fee}}</td>
                <td>{{$doctor->hospital_fee}}</td>
                <td>{{$doctor->ward_fee}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <h2 class="text-center mt-5 mb-4"> {{$wardadmission->patient->patient_name}} - Ward Details</h2>
    @if (is_null($wardadmission->ward))
    <p class="text-center">No doctor has ward patients assigned.</p>
    @else
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Ward ID</th>
                <th>Room Name</th>
                <th>Type</th>
                <th>Room No</th>
                <th>Amount</th>
                <th>User ID</th>
                <th>User Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$wardadmission->ward->id}}</td>
                <td>{{$wardadmission->ward->room_name}}</td>
                <td>{{$wardadmission->ward->type}}</td>
                <td>{{$wardadmission->ward->room_no}}</td>
                <td>{{$wardadmission->ward->amount}}</td>
                <td>{{$wardadmission->ward->user_id}}</td>
                <td>{{$wardadmission->ward->user_name}}</td>
            </tr>
        </tbody>
    </table>
    @endif


    <h2 class="text-center mt-5 mb-4"> {{$wardadmission->patient->patient_name}} - Cashier Payment Details</h2>
    @if (is_null($payment))
    <h2 class="text-danger text-center">No payments received from the ward patient.</h2>
    @else
    <table class="table table-bordered">
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
                <th>Payment Received By</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$payment->id}}</td>
                <td>{{$payment->date}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->payment_status}}</td>
                <td>{{$payment->reference_no}}</td>
                <td>{{$payment->income_ledger}}</td>
                <td>{{$payment->paid_amount}}</td>
                <td>{{$payment->balance}}</td>
                <td>{{$payment->patient_name}}</td>
                <td>{{$payment->doctor_name}}</td>
                <td>{{$payment->payment_received_by}}</td>
            </tr>
        </tbody>
    </table>
    @endif

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
