<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Groups::all();
        return view('groups.index', compact("groups"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Groups::create($request->all());
        return redirect()->route('groups.index');
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groups = Groups::findOrFail($id);
        return view('groups.show', compact('groups'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $groups = Groups::findOrFail($id);
        return view('groups.edit', compact('groups'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Groups $groups, string $id)
    {

        $groups = Groups::findOrFail($id);

        $groups->update($request->all());

        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Groups $group)
    {
        $group->delete();
        return redirect()->route('groups.index');
    }
}
