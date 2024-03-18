<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Http\Requests\StoreAttivitaRequest;
use App\Http\Requests\UpdateAttivitaRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreAttivitaRequest $request)
    {
        return view('newactivities', ['project_id' => $request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttivitaRequest $request)
    {
        $data = $request->only(['title', 'description', 'progetto_id', 'start_date', 'end_date']);
        $data['status'] = 'In Progress';
        $data['assigned_to'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        Attivita::create($data);
        return redirect('/projects/'. $request->progetto_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attivita $attivita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attivita $attivita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttivitaRequest $request, Attivita $attivita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attivita $attivita)
    {
        $attivita->delete();
        return redirect('/projects/'.$attivita->project_id);
    }
}
