<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
</head>

<body>
    <h1>Edit Car</h1>
    <form method="POST" action="{{ route('cars.update', ['car' => $car]) }}">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->
        <label for="merek">Merek:</label>
        <input type="text" id="merek" name="merek" value="{{ $car->merk }}" required><br><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="{{ $car->model }}" required><br><br>

        <label for="nomor_plat">Nomor Plat:</label>
        <input type="text" id="nomor_plat" name="nomor_plat" value="{{ $car->no_plat }}" required><br><br>

        <label for="tarif_sewa">Tarif Sewa per Hari:</label>
        <input type="number" id="tarif_sewa" name="tarif_sewa" value="{{ $car->tarif_sewa }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>

</html>