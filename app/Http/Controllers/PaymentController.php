<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Invoice;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $invoices = Invoice::all();
        $payments = Payment::all();
        return view('payments.index', compact('invoices', 'payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $invoices = Invoice::all();
        return view('payments.create', compact('invoices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'payments_date' => 'required',
            'method' => 'required',
            'invoice_id' => 'required'
        ]);

        $payment = new Payment();
        $payment->amount = $request->amount;
        $payment->payments_date = $request->payments_date;
        $payment->method = $request->method;
        $payment->invoice_id = $request->invoice_id;
        $payment->save();

        return redirect()->route('payments.index')->with('success','Pago creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        $invoices = Invoice::all();
        return view('payments.edit', compact('invoices', 'payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'amount' => 'required',
            'payments_date' => 'required',
            'method' => 'required',
            'invoice_id' => 'required'
        ]);

        
        $payment->amount = $request->amount;
        $payment->payments_date = $request->payments_date;
        $payment->method = $request->method;
        $payment->invoice_id = $request->invoice_id;
        $payment->save();

        return redirect()->route('payments.index')->with('success','Pago actualizado exitosamente');
    }


}
