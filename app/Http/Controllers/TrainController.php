<?php

namespace App\Http\Controllers;
use App\Models\Train;
use App\Models\Train_Type;
use Illuminate\Http\Support\Facades\DB;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trains = Train::all(); 

        return view('trains.index', [
            'trains' => $trains
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $traintypes = Train_Type::all();

        return view('trains.create', [
            'traintypes' => $traintypes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $train = new Train();
        $train->nombre = $request->input("nombre");
        $train->pasajeros = $request->input("pasajeros");
        $train->anyo = $request->input("anyo");
        $train->train_types_id = $request->input("traintypes");
        $train->save();

        return redirect('/trains');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
