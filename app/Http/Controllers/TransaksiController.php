<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiItems;

class TransaksiController extends Controller
{
    public function index ()
    {
        $transaksi = TransaksiItems::orderBy('created_at', 'DESC')->get();
        
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        TransaksiItems::create($request->all());
 
        return redirect()->route('transaksi')->with('success', 'Transaksi added successfully');
    }

    public function edit(string $id)
    {
        $transaksi = TransaksiItems::findOrFail($id);
  
        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi = TransaksiItems::findOrFail($id);
  
        $transaksi->update($request->all());
  
        return redirect()->route('transaksi')->with('success', 'transaksi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = TransaksiItems::findOrFail($id);
  
        $transaksi->delete();
  
        return redirect()->route('transaksi')->with('success', 'transaksi deleted successfully');
    }
}
