@extends("blank")

@section("konten")
    <form action="{{ route("proses_login") }}" method="post">
        @csrf
        Username <input type="text" name="username" > <br>
        Password <input type="password" name="password" > <br>
        <button type="submit">Login</button>
    </form>
@endsection
