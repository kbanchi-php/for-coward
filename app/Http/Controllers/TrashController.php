<?php

namespace App\Http\Controllers;

use App\Models\Trash;
use Illuminate\Http\Request;
use App\Models\User;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $trashes = $user->trashes;
        return view('users.trashes.index', compact('trashes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('users.trashes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function show(Trash $trash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function edit(Trash $trash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trash $trash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trash $trash)
    {
        //
    }
    public function others(User $user)
    {
        $query = Trash::query();
        $trashes = $query->where('user_id', '<>', $user->id)->get();
        return view('users.trashes.others', compact('trashes'));
    }
}
