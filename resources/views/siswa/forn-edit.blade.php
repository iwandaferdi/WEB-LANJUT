@extends("blank")

@section("konten")

    <form action="{{ route("update_siswa", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <input type="text" name="nama"> <br>
        No NIS : <input type="text" name="no_nis"> <br>
        Tanggal lahir : <input type="text" name="tanggal_lahir"> <br>
        <p>Jenis Kelamin</p>
            <p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
            <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
        Alamat : <textarea name="alamat" id="" cols="10" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection