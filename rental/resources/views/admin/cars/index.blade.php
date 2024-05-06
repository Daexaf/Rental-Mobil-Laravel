<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Cars</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #212529;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .btn {
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>List of Cars</h1>
    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif
    <a href="{{ route('cars.create') }}" class="btn">Tambah Mobil</a>
    <a href="{{ route('admin.dashboard.index') }}" class="btn">Kembali ke Dashboard</a> <!-- Button to go back to the dashboard -->

    <br><br>
    <table>
        <tr>
            <th>Merek</th>
            <th>Model</th>
            <th>Nomor Plat</th>
            <th>Tarif Sewa per Hari</th>
            <th>Aksi</th>
        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->merk }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->no_plat }}</td>
            <td>{{ $car->tarif_sewa }}</td>
            <td>
                <a href="#edit" class="btn">Edit</a>
                <form action="#delete" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>