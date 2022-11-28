@extends("blank")

@section("konten")

    Nama : {{ $data_user->nama }} <br>
    Username : {{ $data_user->username }} <br>
    Level : {{ $data_user->level }} <br>
    Created : {{ $data_user->created_at }} <br>
    Updated : {{ $data_user->updated_at }} <br>
@endsection
