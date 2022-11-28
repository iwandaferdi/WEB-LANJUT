<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function buat()
    {
        return view("siswa.form-input");
    }

    public function simpan(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nama = $request->get("nama");
        $siswa->no_nis = $request->get("no_nis");
        $siswa->tanggal_lahir = $request->get("tanggal_lahir");
        $siswa->jenis_kelamin = $request->get("jenis_kelamin");
        $siswa->alamat = $request->get("alamat");
        $siswa->save();

        return redirect(route("tampil_siswa", ['id' => $siswa->id]));
    }

    public function tampil($id)
    {
        $siswa = Siswa::find($id);

        return view("siswa.tampil")->with("siswa", $siswa);
    }

    public function semua()
    {
        $siswa = Siswa::all();
        return view("siswa.semua")->with("siswa", $siswa);
    }

    public function ubah($id)
    {
        return view("siswa.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $request->get("nama");
        $siswa->no_nis = $request->get("no_nis");
        $siswa->tanggal_lahir = $request->get("tanggal_lahir");
        $siswa->jenis_kelamin = $request->get("jenis_kelamin");
        $siswa->alamat = $request->get("alamat");
        $siswa->save();

        return redirect(route("tampil_siswa", ['id' => $siswa->id]));
    }

    public function hapus($id)
    {
        Siswa::destroy($id);
        return redirect(route('semua_siswa'));
    }
}
