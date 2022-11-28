@extends("blank")

@section("konten")

    <form action="{{ route("update_nilai", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama Pelajaran : <input type="text" name="nama_pelajaran"> <br>
        Nilai Pengetahuan : <input type="text" name="nilai_pengetahuan"> <br>
        Nilai Keterampilan : <input name="nilai_keterampilan"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection