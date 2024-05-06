<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return view('rentals.index', compact('rentals'));
    }

    public function create()
    {
        return view('rentals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_order' => 'required',
            'id_mobil' => 'required',
            'id_user' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'status_peminjaman' => 'required',
            'tanggal_pengembalian' => 'nullable',
            'biaya_sewa' => 'required',
        ]);

        Rental::create($request->all());

        return redirect()->route('rentals.index')
            ->with('success', 'Rental created successfully.');
    }

    public function edit(Rental $rental)
    {
        return view('rentals.edit', compact('rental'));
    }

    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'id_order' => 'required',
            'id_mobil' => 'required',
            'id_user' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'status_peminjaman' => 'required',
            'tanggal_pengembalian' => 'nullable',
            'biaya_sewa' => 'required',
        ]);

        $rental->update($request->all());

        return redirect()->route('rentals.index')
            ->with('success', 'Rental updated successfully');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();

        return redirect()->route('rentals.index')
            ->with('success', 'Rental deleted successfully');
    }
}
