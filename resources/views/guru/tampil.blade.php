@extends("blank")

@section("konten")

    <h1>Nama Guru : {{ $guru->nama }}</h1>

    No NUPTK : {{ $guru->no_nuptk }} <br>
    Alamat : {{ $guru->alamat }} <br>
    Jenis Kelamin : {{ $guru->jenis_kelamin }}
@endsection