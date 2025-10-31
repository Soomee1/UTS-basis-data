<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Tambah Transaksi</h1>
        <a href="{{ url('/') }}" class="btn">Kembali</a>
    </header>

    <main>
        <form action="{{ url('/tambah') }}" method="POST">
    @csrf
    
    <label for="id_pelanggan">Pilih Pelanggan</label><br>
    <select name="id_pelanggan" required>
        {{-- ✅ Pastikan ini ada dan di luar loop --}}
        <option value="">-- Pilih Pelanggan --</option> 
        
        @foreach ($pelanggan as $p)
            <option value="{{ $p->id_pelanggan }}">{{ $p->nama_pelanggan }}</option>
        @endforeach
    </select><br><br>

    <label for="tanggal_transaksi">Tanggal Transaksi</label><br>
    <input type="date" name="tanggal_transaksi" required><br><br>

    {{-- ✅ PASTIKAN PERUBAHAN LABEL INI SUDAH TERSIMPAN --}}
    <label for="total_transaksi">Total Harga</label><br> 
    <input type="number" step="0.01" name="total_transaksi" required><br><br>

    <button type="submit" class="btn">Simpan</button>
    </form>
    </main>
</body>
</html>