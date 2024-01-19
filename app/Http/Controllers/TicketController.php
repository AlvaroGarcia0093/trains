<?php

namespace App\Http\Controllers;
use App\Models\Train;
use App\Models\Ticket;
use App\Models\Ticket_Type;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tickets = Ticket::all(); 

        return view('tickets.index', [
            'tickets' => $tickets
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $ticketstype = Ticket_Type::all();
        $trains = Train::all();

        return view('tickets.create', [
            'ticketstype' => $ticketstype,
            'trains' => $trains
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket->date = $request->input("date");
        $ticket->price = $request->input("price");
        $ticket->train_id = $request->input("train");
        $ticket->ticket_types_id = $request->input("tickettype");
        $ticket->save();

        return redirect('/tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $ticket = Ticket::find($id);
        return view('tickets.show', [
            'ticket'=>$ticket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $ticket = Ticket::find($id);
        return view('tickets.edit', [
            'ticket'=>$ticket
        ]);
    }

    /**
     * Update the specifieds resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ticket = Ticket::find($id);
        $ticket->date = $request->input("date");
        $ticket->price = $request->input("price");
        $ticket->save();


        return redirect('/tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect('/tickets');
    }
}
