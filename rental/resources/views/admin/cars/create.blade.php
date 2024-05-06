<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
</head>

<body>
    <h1>Add New Car</h1>
    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif
    <form method="POST" action="{{ route('cars.store') }}">
        @csrf
        <label for="merk">Merek:</label>
        <input type="text" id="merk" name="merk" required><br><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br><br>

        <label for="no_plat">Nomor Plat:</label>
        <input type="text" id="no_plat" name="no_plat" required><br><br>

        <label for="tarif_sewa">Tarif Sewa per Hari:</label>
        <input type="number" id="tarif_sewa" name="tarif_sewa" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>