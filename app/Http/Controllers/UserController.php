<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;// import model user
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function tampil() {
        $data_user = User::all(); // User::take(1)->get();
        return view("user.tampil-user")->with("data_user", $data_user);
    }

    public function formInput() // Hanya Tampilan form
    {
        return view("user.form");
    }

    public function simpan(UserRequest $request)
    {
        $user = new User();
        $user->nama = $request->get("nama");
        $user->username = $request->get("username");
        $user->password= $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user_all")); // redirect: mengarahkan kealamat URL tertentu.
    }

    public function formEdit($id) // Hanya Tampilan form
    {
        return view("user.form-update")->with("id", $id);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->nama = $request->get("nama");
        $user->username = $request->get("username");
        $user->password= $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user_all")); // redirect: mengarahkan kealamat URL tertentu.
    }

    public function hapus($id)
    {
        User::destroy($id); // Kode untuk menghapus data user berdasarkan id-nya
        return redirect(route("user_all")); // redirect: mengarahkan kealamat URL tertentu.
    }

    public function show($id) {
        $data_user = User::find($id); // Ambil data pada tabel user berdasarkan id
        return view("user.show")->with("data_user", $data_user); // tampilkan menggunakan view
    }
}
