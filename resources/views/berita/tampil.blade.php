@extends("blank")

@section("konten")

    <h1>Judul Berita : {{ $berita->nama }}</h1>

    Tanggal Rilis : {{ $berita->tanggal_rilis }} <br>
    ISI BERITA : <br> {{ $berita->isi_berita }} <br>

@endsection