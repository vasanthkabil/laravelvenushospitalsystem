<?php

namespace App\Http\Controllers;

use App\Models\WardAdmission;
use App\Models\CashierPaymentReceived;
use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WardAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $wardadmissions=WardAdmission::paginate(15);
        return view('wardadmission.index',compact('wardadmissions'));
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
        //  $payment = WardAdmission::find($id)->payment;

         $wardadmission = WardAdmission::find($id);
        //    $payment = WardAdmission::find($id)->payment;

        //  $payment = CashierPaymentReceived::with('payments')->find($id);
        //   $payment = CashierPaymentReceived::find($id);
        //   $payment = WardAdmission::with('payment')->find($id);
        $ids = [$wardadmission->id]; // Example list of ward_admissions IDs to fetch

        $payment = DB::table('ward_admissions')
            ->join('cashier_payment_received', function($join) {
                $join->on('ward_admissions.id', '=', 'cashier_payment_received.table_id')
                     ->where('cashier_payment_received.table_name', '=', DB::raw("'ward_admissions'"));
            })
            ->select('ward_admissions.*', 'cashier_payment_received.*')
            ->whereIn('ward_admissions.id', $ids)
            ->first(); 



        return view('wardadmission.show', compact('wardadmission', 'payment'));

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
