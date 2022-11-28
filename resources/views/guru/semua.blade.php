@extends("blank")

@section("konten")

    <h1>Semua Data Guru</h1>
    <a href="{{ route('buat_guru') }}">Daftar Guru</a> <br>


    @foreach($guru as $guru)
        Nama : {{ $guru->nama }} <br>
        No NUPTK : {{ $guru->no_nuptk }} <br>
        Alamat : {{ $guru->alamat }} <br>
        Jenis Kelamin : {{ $guru->jenis_kelamin }} <br>
        <a href="{{ route('ubah_guru', ['id' => $guru->id]) }}">Ubah</a>
        <a href="{{ route('tampil_guru', ['id' => $guru->id]) }}">Tampil</a>

        <form action="{{ route('hapus_guru', ['id' => $guru->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection