@extends("blank")

@section("konten")

    <h1>Semua Data Nilai Pelajaran</h1>
    <a href="{{ route('buat_nilai') }}">Masukan Nilai</a> <br>


    @foreach($nilai as $nilai)
        Nama Pelajaran : {{ $nilai->nama_pelajaran }} <br>
        Nilai Pengetahuan : {{ $nilai->nilai_pengetahuan }} <br>
        Nilai Keterampilan : {{ $nilai->nilai_keterampilan }} <br>
        <a href="{{ route('ubah_nilai', ['id' => $nilai->id]) }}">Ubah</a>
        <a href="{{ route('tampil_nilai', ['id' => $nilai->id]) }}">Tampil</a>

        <form action="{{ route('hapus_nilai', ['id' => $nilai->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection