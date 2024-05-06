<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Rental</title>
</head>

<body>
    <h1>Formulir Pendaftaran Rental</h1>
    <form method="POST" action="{{ route('rentals.store') }}">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" name="telepon" required><br><br>

        <label for="tanggal_mulai">Tanggal Mulai:</label>
        <input type="date" id="tanggal_mulai" name="tanggal_mulai" required><br><br>

        <label for="tanggal_selesai">Tanggal Selesai:</label>
        <input type="date" id="tanggal_selesai" name="tanggal_selesai" required><br><br>

        <label for="mobil_id">Pilih Mobil:</label>
        <select id="mobil_id" name="mobil_id" required>
            @foreach($rentals as $rental)
            <option value="{{ $car->id }}">{{ $rental->merk }} - {{ $rental->model }} ({{ $rental->no_plat }})</option>
            @endforeach
        </select><br><br>

        <button type="submit">Daftar Rental</button>
    </form>
</body>

</html>