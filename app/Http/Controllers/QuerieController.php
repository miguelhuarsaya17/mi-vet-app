<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Querie;
use App\Models\Pet;
use App\Models\Quote;
use App\Models\User;

class QuerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        
        // $queries = ($user->role === 'empleado') ? Querie::all() : $user->queries;
        $queries = Querie::all();
        return view('queries.index', compact('queries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quotes = Quote::all();
        $pets = Pet::all();
        $users = User::all();
        return view('queries.create', compact('users','quotes', 'pets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'querie_date' => 'required',
            'description' => 'required',
            'quote_id' => 'required',
            'pet_id' => 'required'
        ]);

        $querie = new Querie();
        $querie->querie_date = $request->querie_date;
        $querie->description = $request->description;
        $querie->quote_id = $request->quote_id;
        $querie->pet_id = $request->pet_id;
        $querie->save();

        return redirect()->route('queries.index')->with('success', 'Consulta creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Querie $querie)
    {
        return view('queries.show', compact('querie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Querie $querie)
    {
        $quotes = Quote::all();
        $pets = Pet::all();

        return view('queries.edit', compact('querie', 'quotes', 'pets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Querie $querie)
    {
        $request->validate([
            'querie_date' => 'required',
            'description' => 'required',
            'quote_id' => 'required',
            'pet_id' => 'required'
        ]);

        $querie->querie_date = $request->querie_date;
        $querie->description = $request->description;
        $querie->quote_id = $request->quote_id;
        $querie->pet_id = $request->pet_id;
        $querie->save();

        return redirect()->route('queries.index')->with('success', 'Consulta actualizada exitosamente');
    }

}
