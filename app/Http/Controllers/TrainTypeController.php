<?php

namespace App\Http\Controllers;
use App\Models\Train_Type;
use Illuminate\Http\Support\Facades\DB;
use Illuminate\Http\Request;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trainstype = Train_Type::all(); 

        return view('trainstype.index', [
            'trainstype' => $trainstype
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('trainstype.create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $trainType = new Train_Type();
        $trainType->type = $request->input("type");
        $trainType->save();

        return redirect('/trainstype');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $traintype = Train_Type::find($id);
        return view('trainstype.show', [
            'traintype'=>$traintype
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $traintype = Train_Type::find($id);
        return view('trainstype.edit', [
            'traintype'=>$traintype
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $traintype = Train_Type::find($id);
        $traintype->type = $request->input("type");
        $traintype->save();

        return redirect('/trainstype');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
