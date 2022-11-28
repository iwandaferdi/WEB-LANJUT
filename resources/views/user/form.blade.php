@extends("blank")

@section("konten")
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route("user_simpan") }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        Level : <input type="text" name="level"> <br>

        <button type="submit">Simpan</button>

    </form>
@endsection
