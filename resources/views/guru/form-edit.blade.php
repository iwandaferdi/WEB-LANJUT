@extends("blank")

@section("konten")

    <form action="{{ route("update_guru", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <input type="text" name="nama"> <br>
        No NUPTK : <input type="text" name="no_nuptk"> <br>
        Alamat : <textarea name="alamat" id="" cols="10" rows="10"></textarea> <br>
        <p>Jenis Kelamin</p>
            <p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
            <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>

        <button type="submit">Simpan</button>
    </form>


@endsection