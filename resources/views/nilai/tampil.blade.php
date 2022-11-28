@extends("blank")

@section("konten")

    <h1>Nama Pelajaran : {{ $nilai->nama_pelajaran }}</h1>

    Nilai Pengetahuan : {{ $nilai->nilai_pengetahuan }} <br>
    Nilai Keterampilan : {{ $nilai->nilai_keterampilan }} <br>
@endsection