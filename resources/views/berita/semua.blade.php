@extends("blank")

@section("konten")

    <h1>Semua Berita Terbaru Atau Pengumuman Terbaru</h1>
    <a href="{{ route('buat_berita') }}">Buat Berita</a> <br>

    @foreach($berita as $berita)
        Pengumuman : {{ $berita->nama }} <br>
        Tanggal Rilis : {{ $berita->tanggal_rilis }} <br>
        Isi Pengumuman : {{ $berita->isi_berita }} <br>
        <a href="{{ route('ubah_berita', ['id' => $berita->id]) }}">Ubah</a>
        <a href="{{ route('tampil_berita', ['id' => $berita->id]) }}">Tampil</a>

        <form action="{{ route('hapus_guru', ['id' => $berita->id]) }}" method="post">
            @csrf
            @method('delete')
        <hr>
    @endforeach
@endsection