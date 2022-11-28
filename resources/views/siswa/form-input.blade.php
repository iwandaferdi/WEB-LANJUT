@extends("blank")

@section("konten")

    <form action="{{ route("simpan_siswa") }}" method="post">
        @csrf

        <h1>Masukan Data Siswa</h1>
        Nama Siswa : <input type="text" name="nama"> <br>
        No NIS : <input type="text" name="no_nis"> <br>
        Tanggal Lahir : <input type="text" name="tanggal_lahir"> <br>
        <p>Jenis Kelamin</p>
            <p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
            <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
        Alamat: <br> <textarea name="alamat" id="" cols="10" rows="10"></textarea>

        <button type="submit">Simpan</button>
    </form>


@endsection