@extends("blank")

@section("konten")

    <form action="{{ route("simpan_berita") }}" method="post">
        @csrf
        <h1>Buat Berita</h1>
        Judul Berita : <input type="text" name="nama"> <br>
        Tanggal Rilis : <input type="text" name="tanggal_rilis"> <br>
        Masukan Iis Berita : <textarea name="isi_berita" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection