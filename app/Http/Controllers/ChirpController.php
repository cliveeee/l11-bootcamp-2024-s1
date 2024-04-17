<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
<<<<<<< HEAD
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
=======
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
>>>>>>> upstream/main

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
<<<<<<< HEAD
        //return response("Hello, world");
        $chirps = Chirp::with('user')->latest()->get();
        return view("chirps.index", compact('chirps'));
=======
        $user = auth()->user()->name;
        $greeting = "Hello, {$user}.";
        $chirps = Chirp::with('user')->latest()->get();
        return view('chirps.index', compact(['chirps', 'greeting'])); //
        // resources/views/chirps/index.blade.php
>>>>>>> upstream/main
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => [
                'required',
                'string',
                'min:5',
                'max:255',
            ],
        ]);

        $request->user()->chirps()->create($validated);
<<<<<<< HEAD

=======
>>>>>>> upstream/main
        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Chirp $chirp)
    {
        //
=======
    public function edit(Chirp $chirp): View
    {
        Gate::authorize('update', $chirp);

        return view('chirps.edit', ['chirp' => $chirp,]);
>>>>>>> upstream/main
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, Chirp $chirp)
    {
        //
=======
    public function update(Request $request, Chirp $chirp): RedirectResponse
    {
        Gate::authorize('update', $chirp);

        $validated = $request->validate([
            'message' => [
                'required',
                'string',
                'min:5',
                'max:255',
            ],
        ]);

        $chirp->update($validated);

        return redirect(route('chirps.index'));
>>>>>>> upstream/main
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(Chirp $chirp)
    {
        //
=======
    public function destroy(Chirp $chirp): RedirectResponse
    {
        Gate::authorize('delete', $chirp);
        $chirp->delete();
        return redirect(route('chirps.index'));
>>>>>>> upstream/main
    }
}
