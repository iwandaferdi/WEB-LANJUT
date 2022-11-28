@extends("blank")

@section("konten")

    <form action="{{ route("update_berita", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Judul Berita : <input type="text" name="nama"> <br>
        Tanggal Rilis : <input type="text" name="tanggal_rilis"> <br>
        Isi Pengumuman : <br> <textarea name="isi_berita" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection