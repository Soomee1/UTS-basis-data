<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <h1>Edit Pelanggan</h1>
    <a href="{{ url('pelanggan') }}" class="btn">Kembali</a>
</header>

<main>
    <form action="{{ url('pelanggan/update/'.$pelanggan->id_pelanggan) }}"
     method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nama Pelanggan</label><br>
            <input type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" required>
        </div><br>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ $pelanggan->email }}">
        </div><br>

        <div>
            <label>No HP</label><br>
            <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}">
        </div><br>

        <button type="submit" class="btn">Perbarui</button>
    </form>
</main>
</body>
</html>
