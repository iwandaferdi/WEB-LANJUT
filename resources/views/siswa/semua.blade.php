@extends("blank")

@section("konten")

    <h1>Semua Data Guru</h1>

    @foreach($siswa as $siswa)
        Nama : {{ $siswa->nama }} <br>
        No NIS : {{ $siswa->no_nis }} <br>
        Tanggal Lahir : {{ $siswa->tanggal_lahir }} <br>
        Jenis Kelamin : {{ $siswa->jenis_kelamin }} <br>
        Alamat : {{ $siswa->alamat }} <br>
        
        <a href="{{ route('ubah_guru', ['id' => $siswa->id]) }}">Ubah</a>
        <a href="{{ route('tampil_guru', ['id' => $siswa->id]) }}">Tampil</a>
        
        <form action="{{ route('hapus_siswa', ['id' => $siswa->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection