<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Data Pelanggan</h1>
        <a href="{{ url('pelanggan/tambah') }}" class="btn">Tambah Pelanggan</a>
    </header>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pelanggan as $p)
                    <tr>
                        <td>{{ $p->id_pelanggan }}</td>
                        <td>{{ $p->nama_pelanggan }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->no_hp }}</td>
                        <td>
                            <a href="{{ url('pelanggan/edit/'.$p->id_pelanggan) }}" class="btn">Edit</a>
                            <form action="{{ url('pelanggan/hapus/'.$p->id_pelanggan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background:red;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center;">Belum ada data pelanggan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>
