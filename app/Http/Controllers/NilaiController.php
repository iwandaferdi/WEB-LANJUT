<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function buat()
    {
        $kategori = Kategori::all();
        return view("nilai.form-input")->with("kategori", $kategori);
    }

    public function simpan(Request $request)
    {
        $nilai = new Nilai();
        $nilai->nama_pelajaran = $request->get("nama_pelajaran");
        $nilai->nilai_pengetahuan = $request->get("nilai_pengetahuan");
        $nilai->nilai_keterampilan = $request->get("nilai_keterampilan");
        $nilai->guru_id = auth()->user()->guru->id;
        $nilai->save();

        $nilai->kategori()->sync($request->get("kategori"));

        return redirect(route("tampil_nilai", ['id' => $nilai->id]));
    }

    public function tampil($id)
    {
        $nilai = Nilai::find($id);

        return view("nilai.tampil")->with("nilai", $nilai);
    }

    public function semua()
    {
        $nilai = Nilai::all();
        return view("nilai.semua")->with("nilai", $nilai);
    }

    public function ubah($id)
    {
        return view("nilai.form-edit")->with("id", $id);
    }
    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->nama_pelajaran = $request->get("nama_pelajaran");
        $nilai->nilai_pengetahuan = $request->get("nilai_pengetahuan");
        $nilai->nilai_keterampilan = $request->get("nilai_keterampilan");
        $nilai->guru_id = auth()->user()->Guru->id;
        $nilai->save();

        $nilai->kategori()->sync($request->get("kategori"));

        return redirect(route("tampil_nilai", ['id' => $nilai->id]));
    }

    public function hapus($id)
    {
        Nilai::destroy($id);
        return redirect(route('semua_nilai'));
    }
}
