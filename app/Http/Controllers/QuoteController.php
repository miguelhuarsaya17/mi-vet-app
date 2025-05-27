<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = Auth::user();
        $quotes = ($user->role === 'empleado') ? Quote::all() : $user->quotes;
        return view('quotes.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    
        $users = User::all();
        $quotes = Quote::all();
        return view('quotes.create', compact('quotes'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'quote_date' => 'required',
            'shift' => 'required',
            'reason' => 'required',
            'user_id' => 'required'
        ]);

        $quote = new Quote();
        $quote->quote_date = $request->quote_date;
        $quote->shift = $request->shift;
        $quote->reason = $request->reason;
        $quote->user_id = $request->user_id;
        $quote->save();

        return redirect()->route('quotes.index')->with('success', 'Cita creada exitosamente');
    }   


    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        return view('quotes.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        $users = User::all();
        $users2 = [];
        foreach ($users as $user) {
            if ($user->role === 'usuario') {
                $users2[] = $user;
            }
        }
        return view('quotes.edit', compact('quote', 'users2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        $validatedData = $request->validate([
            'quote_date' => 'required',
            'shift' => 'required',
            'reason' => 'required',
            'user_id' => 'required'
        ]);

        $quote->update($validatedData);

        return redirect()->route('quotes.index')->with('success', 'Cita actualizada exitosamente');
    }

}
