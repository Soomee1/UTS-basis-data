<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
{
    $transaksi = DB::table('t_transaksi')
        ->join('t_pelanggan', 't_transaksi.id_pelanggan', '=', 't_pelanggan.id_pelanggan')
        ->select('t_transaksi.*', 't_pelanggan.nama_pelanggan')
        ->orderBy('t_transaksi.id_transaksi', 'asc')
        ->get();

    $pelanggan = DB::table('t_pelanggan')->get();
return view('dashboard', compact('transaksi', 'pelanggan'));

}


    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required',
            'tanggal_transaksi' => 'required|date',
            'total_transaksi' => 'required|numeric|min:1',
        ]);

        DB::table('t_transaksi')->insert([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'total_transaksi' => $request->total_transaksi,
        ]);

        return redirect('/')
            ->with('success', 'Data transaksi berhasil ditambahkan.');
    }
}
