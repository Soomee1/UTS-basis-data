<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Sistem Penjualan - Data Transaksi</h1>
        <a href="/tambah" class="btn">+ Tambah Transaksi</a>
    </header>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <main>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transaksi as $t)
                    <tr>
                        <td>{{ $t->id_transaksi }}</td>
                        <td>{{ $t->nama_pelanggan }}</td>
                        <td>{{ $t->tanggal_transaksi }}</td>
                        <td>Rp {{ number_format($t->total_harga, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Belum ada transaksi</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>
