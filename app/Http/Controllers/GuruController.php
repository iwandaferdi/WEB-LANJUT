<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function buat()
    {
        return view("guru.form-input");
    }

    public function simpan(Request $request)
    {
        $guru = new Guru();
        $guru->nama = $request->get("nama");
        $guru->no_nuptk = $request->get("no_nuptk");
        $guru->alamat = $request->get("alamat");
        $guru->jenis_kelamin = $request->get("jenis_kelamin");
        $guru->save();

        return redirect(route("tampil_guru", ['id' => $guru->id]));
    }

    public function tampil($id)
    {
        $guru = Guru::find($id);

        return view("guru.tampil")->with("guru", $guru);
    }

    public function semua()
    {
        $guru = Guru::all();
        return view("guru.semua")->with("guru", $guru);
    }

    public function ubah($id)
    {
        return view("guru.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);
        $guru->nama = $request->get("nama");
        $guru->no_nuptk = $request->get("no_nuptk");
        $guru->alamat = $request->get("alamat");
        $guru->jenis_kelamin = $request->get("jenis_kelamin");
        $guru->save();

        return redirect(route("tampil_guru", ['id' => $guru->id]));
    }

    public function hapus($id)
    {
        Guru::destroy($id);
        return redirect(route("semua_guru"));
    }
}
