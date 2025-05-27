<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{   
    //muestra todos los registros de la tabla   
    public function index()
    {   
        $user = Auth::user();
        $pets = ($user->role === 'empleado') ? Pet::all() : $user->pets;
        return view('pets.index', compact('pets'));
    }

    //muestra el formulario para ingresar los datos de la nueva msacota
    public function create()
    {
        $users = User::all();
        $users2 = [];
        foreach ($users as $user) {
            if ($user->role === 'usuario') {
                $users2[] = $user;
            }
        }
        return view('pets.create', compact('users2'));
    }
    
    //recibe los datos del formulario y los valida. Una vez validados crea a la nueva mascota
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'user_id' => 'required'
        ]);

        $pet = new Pet();
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->weight = $request->weight;
        $pet->user_id = $request->user_id;
        $pet->save();

        return redirect()->route('pets.index')->with('success', 'Mascota creada exitosamente');
    }

    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    public function edit(Pet $pet)
    {
        $users = User::all();
        $users2 = [];
        foreach ($users as $user) {
            if ($user->role === 'usuario') {
                $users2[] = $user;
            }
        }
        return view('pets.edit', compact('pet','users2'));
    }

    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'user_id' => 'required'
        ]);

        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->weight = $request->weight;
        $pet->user_id = $request->user_id;
        $pet->save();    

        return redirect()->route('pets.index')->with('success', 'Mascota actualizada exitosamente');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Mascota eliminada exitosamente');
    }
}
