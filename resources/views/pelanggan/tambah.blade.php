<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Tambah Pelanggan</h1>
        <a href="{{ url('pelanggan') }}" class="btn">Kembali</a>
    </header>

    <main>
        <form action="{{ url('pelanggan/tambah') }}" method="POST">
            @csrf
            <label for="nama_pelanggan">Nama Pelanggan</label><br>
            <input type="text" name="nama_pelanggan" required><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="email"><br><br>

            <label for="no_hp">Nomor HP</label><br>
            <input type="text" name="no_hp"><br><br>

            <button type="submit" class="btn">Simpan</button>
        </form>
    </main>
</body>
</html>
