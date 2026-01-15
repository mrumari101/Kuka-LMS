<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    public function index()
    {
        $disciplines = Discipline::latest()->paginate(10);
        return view('admin.disciplines.index', compact('disciplines'));
    }

    public function create()
    {
        return view('admin.disciplines.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'description'=>'nullable',
            'image'=>'nullable|image',
            'status'=>'required'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Discipline::create($data);

        return redirect()->route('admin.disciplines.index')
            ->with('success','Discipline created');
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
