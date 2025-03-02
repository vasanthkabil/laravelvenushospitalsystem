<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients=Patient::paginate(15);
        return view('patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::find($id);
        $wardadmit = Patient::find($id)->wardadmission;
        $ids = [$patient->id]; // Example list of ward_admissions IDs to fetch

        $pay = DB::table('ward_admissions')
            ->join('cashier_payment_received', function($join) {
                $join->on('ward_admissions.id', '=', 'cashier_payment_received.table_id')
                     ->where('cashier_payment_received.table_name', '=', DB::raw("'ward_admissions'"));
            })
            ->select('ward_admissions.*', 'cashier_payment_received.*')
            ->whereIn('ward_admissions.patient_id', $ids)
            ->first();

        return view('patient.show',compact('patient','wardadmit','pay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
