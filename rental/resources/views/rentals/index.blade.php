<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Rentals</title>
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
    <h1>List of Rentals</h1>
    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif
    <a href="{{ route('rentals.create') }}" class="btn">Tambah Rental</a>
    <a href="{{ route('admin.dashboard.index') }}" class="btn">Kembali ke Dashboard</a>

    <br><br>
    <table>
        <tr>
            <th>ID Order</th>
            <th>Mobil</th>
            <th>User</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Status Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Biaya Sewa</th>
            <th>Aksi</th>
        </tr>
        @foreach($rentals as $rental)
        <tr>
            <td>{{ $rental->id_order }}</td>
            <td>{{ $rental->car->merk }} - {{ $rental->car->model }} ({{ $rental->car->no_plat }})</td>
            <td>{{ $rental->user->name }}</td>
            <td>{{ $rental->tanggal_mulai }}</td>
            <td>{{ $rental->tanggal_selesai }}</td>
            <td>{{ $rental->status_peminjaman }}</td>
            <td>{{ $rental->tanggal_pengembalian }}</td>
            <td>{{ $rental->biaya_sewa }}</td>
            <td>
                <a href="{{ route('rentals.edit', ['rental' => $rental]) }}" class="btn">Edit</a>
                <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" style="display: inline;">
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