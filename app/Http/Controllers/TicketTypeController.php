<?php

namespace App\Http\Controllers;
use App\Models\Ticket_Type;
use Illuminate\Http\Support\Facades\DB;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ticketstype = Ticket_Type::all(); 

        return view('ticketstype.index', [
            'ticketstype' => $ticketstype
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('ticketstype.create', [

        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ticketType = new Ticket_Type();
        $ticketType->type = $request->input("type");
        $ticketType->save();

        return redirect('/ticketstype');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tickettype = Ticket_Type::find($id);
        return view('ticketstype.show', [
            'tickettype'=>$tickettype
        ]);
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
