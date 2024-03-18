<?php

namespace App\Http\Controllers;

use App\Models\Progetto;
use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;
use App\Models\Ambiente;
use App\Models\Language;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $projects = Progetto::orderBy('id')->with('languages', 'ambientes', 'users')->get();
    return view('project', ['projects' => $projects]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = Language::all();
        $environment = Ambiente::all();
    return view('newprogetto', ['languages' => $languages, 'ambientes'=> $environment, 'users'=> User::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgettoRequest $request)
    {
        $data = $request->only(['title', 'description', 'language_id', 'environment_id', 'budget']);
        $data['status'] = 'In Progress';
        $data['team_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        Progetto::create($data);
        return redirect()->action([ProgettoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Progetto $project)
    {
        $attivita = $project->attivitas()->get();

        return view('project_detail', ['project' => $project, 'attivitas' => $attivita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetto)
    {
        $progetto->delete();
        return redirect('/projects');
    }
}
