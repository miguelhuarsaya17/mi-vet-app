<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use Illuminate\Http\Request;
use App\Models\Querie;
class DiagnoseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $queries = Querie::all();
        $diagnoses = Diagnose::all();
        return view('diagnoses.index', compact('queries', 'diagnoses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $queries = Querie::all();
        return view('diagnoses.create', compact('queries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'treatment' => 'required',
            'querie_id' => 'required'
        ]);

        $diagnose = new Diagnose();
        $diagnose->description = $request->description;
        $diagnose->treatment = $request->treatment;
        $diagnose->querie_id = $request->querie_id;
        $diagnose->save();

        return redirect()->route('diagnoses.index')->with('success','Diagnostico creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnose $diagnose)
    {
        return view('diagnoses.show', compact('diagnose'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnose $diagnose)
    {
        $queries = Querie::all();
        return view('diagnoses.edit', compact('queries','diagnose'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diagnose $diagnose)
    {
        $request->validate([
            'description' => 'required',
            'treatment' => 'required',
            'querie_id' => 'required'
        ]);

        $diagnose->description = $request->description;
        $diagnose->treatment = $request->treatment;
        $diagnose->querie_id = $request->querie_id;
        $diagnose->save();

        return redirect()->route('diagnoses.index')->with('success','Diagnostico actualizado exitosamente');
    }

   
}
