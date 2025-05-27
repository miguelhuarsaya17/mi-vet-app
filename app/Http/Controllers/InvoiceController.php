<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\Querie;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = Auth::user();
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $queries = Querie::all();
        return view('invoices.create', compact('queries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'details' => 'required',
            'invoices_date' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'querie_id' => 'required'
        ]);

        $invoice = new Invoice();
        $invoice->details = $request->details;
        $invoice->invoices_date = $request->invoices_date;
        $invoice->amount = $request->amount;
        $invoice->status = $request->status;
        $invoice->querie_id = $request->querie_id;
        $invoice->save();

        return redirect()->route('invoices.index')->with('success','Factura creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        $queries = Querie::all();
        return view('invoices.edit', compact('queries','invoice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'details' => 'required',
            'invoices_date' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'querie_id' => 'required'
        ]);

        $invoice->details = $request->details;
        $invoice->invoices_date = $request->invoices_date;
        $invoice->amount = $request->amount;
        $invoice->status = $request->status;
        $invoice->querie_id = $request->querie_id;
        $invoice->save();

        return redirect()->route('invoices.index')->with('success','Factura actualizada exitosamente');
    }


}
