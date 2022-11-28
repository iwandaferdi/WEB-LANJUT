@extends("blank")

@section("konten")

    <form action="{{ route("simpan_nilai") }}" method="post">
        @csrf

        Nama Pelajaran : <input type="text" name="nama_pelajaran"> <br>
        Nilai Pengetahuan : <input type="text" name="nilai_pengetahuan"> <br>
        Nilai Keterampilan : <input name="nilai_keterampilan"> <br>

        Pilih Kategori:

        @foreach($kategori as $kat)
            <input type="checkbox" name="kategori[]" value="{{ $kat->id }}"> {{ $kat->nama }}
        @endforeach
        <br>

        <button type="submit">Simpan</button>
    </form>


@endsection