<?php

namespace App\Http\Controllers;

use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        // Mengambil semua data mobil dari database
        $cars = Car::all();

        // Mengirim data mobil ke view cars.blade.php di folder admin
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        // Tampilkan formulir untuk menambahkan mobil baru
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'no_plat' => 'required|unique:cars',
            'tarif_sewa' => 'required|numeric',
        ]);

        // Simpan data mobil baru ke database
        Car::create([
            'merk' => $request->merk,
            'model' => $request->model,
            'no_plat' => $request->no_plat,
            'tarif_sewa' => $request->tarif_sewa,
        ]);

        // Redirect atau melakukan tindakan lain sesuai kebutuhan
        return redirect()->route('cars.index')->with('success', 'Mobil baru berhasil ditambahkan!');
    }

    public function edit(Car $car)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, Car $car)
    {
        // Validate the request
        $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'no_plat' => 'required',
            'tarif_sewa' => 'required|numeric',
        ]);

        // Update the car details
        $car->update($request->all());

        // Redirect back with success message
        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }


    public function destroy($id)
    {
        // Temukan mobil berdasarkan ID
        $car = Car::findOrFail($id);

        // Hapus mobil dari database
        $car->delete();

        // Redirect atau melakukan tindakan lain sesuai kebutuhan
        return redirect()->route('cars.index')->with('success', 'Data mobil berhasil dihapus!');
    }
}
