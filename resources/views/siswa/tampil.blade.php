@extends("blank")

@section("konten")

    <h1>Nama Siswa : {{ $siswa->nama }}</h1>

    No NIS : {{ $siswa->no_nis }} <br>
    Tanggal Lahir : {{ $siswa->tanggal_lahir }} <br>
    Jenis Kelamin : {{ $siswa->jenis_kelamin }} <br>
    Alamat : {{ $siswa->alamat }} 
@endsection