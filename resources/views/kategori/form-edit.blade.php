@extends("blank")

@section("konten")

    <form action="{{ route("update_kategori", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <input type="text" name="nama"> <br>
        Keterangan: <textarea name="keterangan" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection
