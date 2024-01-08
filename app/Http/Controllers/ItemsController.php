<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Items::orderBy('created_at', 'DESC')->get();
        
        return view('items.index', compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Items::create($request->all());
 
        return redirect()->route('items')->with('success', 'Item added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = Items::findOrFail($id);
  
        return view('items.show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = Items::findOrFail($id);
  
        return view('items.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $items = Items::findOrFail($id);
  
        $items->update($request->all());
  
        return redirect()->route('items')->with('success', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $items = Items::findOrFail($id);
  
        $items->delete();
  
        return redirect()->route('items')->with('success', 'item deleted successfully');
    }
}
