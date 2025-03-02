<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors=Doctor::paginate(15);
        return view('doctor.index',compact('doctors'));
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
        $doctor = Doctor::find($id);


        $payment = DB::table('ward_admissions')
        ->join('cashier_payment_received', function($join) {
            $join->on('ward_admissions.id', '=', 'cashier_payment_received.table_id')
                 ->where('cashier_payment_received.table_name', '=', 'ward_admissions');
        })
        ->where('ward_admissions.doctor_id', '=', $id)
        ->select('ward_admissions.*', 'cashier_payment_received.*')
        ->get();






return view('doctor.show',compact('doctor','payment'));
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
