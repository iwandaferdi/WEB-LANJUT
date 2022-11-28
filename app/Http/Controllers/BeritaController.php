<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function buat()
    {
        return view("berita.form-input");
    }

    public function simpan(Request $request)
    {
        $berita = new Berita();
        $berita->nama = $request->get("nama");
        $berita->tanggal_rilis = $request->get("tanggal_rilis");
        $berita->isi_berita = $request->get("isi_berita");
        $berita->save();

        return redirect(route("tampil_berita", ['id' => $berita->id]));
    }

    public function tampil($id)
    {
        $berita = Berita::find($id);

        return view("berita.tampil")->with("berita", $berita);
    }

    public function semua()
    {
        $berita = Berita::all();
        return view("berita.semua")->with("berita", $berita);
    }

    public function ubah($id)
    {
        return view("berita.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->nama = $request->get("nama");
        $berita->tanggal_rilis = $request->get("tanggal_rilis");
        $berita->isi_berita = $request->get("ini_berita");
        $berita->save();

        return redirect(route("tampil_guru", ['id' => $berita->id]));
    }

    public function hapus($id)
    {
        Berita::destroy($id);
        return redirect(route('semua_berita'));
    }
}
