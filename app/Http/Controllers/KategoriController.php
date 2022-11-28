<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function buat()
    {
        return view("kategori.form-input");
    }

    public function simpan(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama = $request->get("nama");
        $kategori->keterangan = $request->get("keterangan");
        $kategori->save();

        return redirect(route("tampil_kategori", ['id' => $kategori->id]));
    }

    public function tampil($id)
    {
        $kategori = Kategori::find($id);

        return view("kategori.tampil")->with("kategori", $kategori);
    }

    public function semua()
    {
        $data = Kategori::all();
        return view("kategori.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("kategori.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama = $request->get("nama");
        $kategori->keterangan = $request->get("keterangan");
        $kategori->save();

        return redirect(route("tampil_kategori", ['id' => $kategori->id]));
    }

    public function hapus($id)
    {
        Kategori::destroy($id);
        return redirect(route('semua_kategori'));
    }
}
