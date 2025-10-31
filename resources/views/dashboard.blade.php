@extends('adminlte::page')

@section('title', 'Dashboard Transaksi')

@section('content_header')
    <h1>Dashboard Transaksi</h1>
@stop

@section('content')
    {{-- Pesan sukses --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tombol Tambah --}}
    <button class="btn btn-primary mb-3" onclick="document.getElementById('formTambah').style.display='block'">
        Tambah Transaksi
    </button>

    {{-- Form tambah transaksi --}}
    <div id="formTambah" style="display:none; margin-bottom:20px;">
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_pelanggan">Pilih Pelanggan</label>
                <select name="id_pelanggan" id="id_pelanggan" class="form-control" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    @foreach ($pelanggan as $p)
                        <option value="{{ $p->id_pelanggan }}">{{ $p->nama_pelanggan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_transaksi">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="total_transaksi">Total Transaksi</label>
                <input type="number" name="total_transaksi" id="total_transaksi" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    {{-- Tabel transaksi --}}
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>ID Transaksi</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Transaksi</th>
                <th>Total Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transaksi as $item)
                <tr>
                    <td>{{ $item->id_transaksi }}</td>
                    <td>{{ $item->nama_pelanggan }}</td>
                    <td>{{ $item->tanggal_transaksi }}</td>
                    <td>Rp {{ number_format($item->total_transaksi, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada transaksi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@stop
