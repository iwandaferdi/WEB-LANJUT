<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;


Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/hello/{nama}/{gender}", function ($nama, $gender) {
    echo "Hello " . $nama . " seorang " . $gender;
})->name("hello");


Route::get("/hii/panggilan/{nama}", [TestingController::class, "hii"])->name("panggilan");

Route::get("/tentang-saya", [TestingController::class, "about"])->name("about");

Route::get("/my-journey", [TestingController::class, "journey"])->name("journey");

Route::get("/my-work", function () {
    return view("my-work");
})->name("work");

Route::get("/my-publication", function () {
    return view("my-publication");
})->name("publication");

Route::get("/my-courses", function () {
    return view("my-courses");
})->name("courses");

Route::get("/tampil-semua-user", [UserController::class, "tampil"])->name("user_all"); // URL Tampil Semua User
Route::get("/input-user", [UserController::class, "formInput"])->name("user_input");   // URL Form Input
Route::post("/simpan-user", [UserController::class, "simpan"])->name("user_simpan");   // URL Simpan User

Route::get("/edit-user/{id}", [UserController::class, "formEdit"])->name("user_edit"); // URL Form Edit
Route::put("/update-user/{id}", [UserController::class, "update"])->name("user_update"); // URL Form Edit


Route::delete("/hapus-user/{id}", [UserController::class, "hapus"])->name("user_hapus"); // URL Form hapus
Route::get("/tampil-user/{id}", [UserController::class, "show"])->name("user_show"); // URL Form hapus

Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function () {
    Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("guru/buat", [GuruController::class, 'buat'])->name("buat_guru");
    Route::post("guru/simpan", [GuruController::class, 'simpan'])->name("simpan_guru");
    Route::get("guru/tampil/{id}", [GuruController::class, 'tampil'])->name("tampil_guru");
    Route::get("guru/semua", [GuruController::class, 'semua'])->name("semua_guru");
    Route::get("guru/ubah/{id}", [GuruController::class, 'ubah'])->name("ubah_guru");
    Route::put("guru/update/{id}", [GuruController::class, 'update'])->name("update_guru");
    Route::delete("guru/hapus/{id}", [GuruController::class, 'hapus'])->name("hapus_guru");

    Route::get("siswa/buat", [SiswaController::class, 'buat'])->name("buat_siswa");
    Route::post("siswa/simpan", [SiswaController::class, 'simpan'])->name("simpan_siswa");
    Route::get("siswa/tampil/{id}", [SiswaController::class, 'tampil'])->name("tampil_siswa");
    Route::get("siswa/semua", [SiswaController::class, 'semua'])->name("semua_siswa");
    Route::get("siswa/ubah/{id}", [SiswaController::class, 'ubah'])->name("ubah_siswa");
    Route::put("siswa/update/{id}", [SiswaController::class, 'update'])->name("update_siswa");
    Route::delete("siswa/hapus/{id}", [SiswaController::class, 'hapus'])->name("hapus_siswa");

    Route::get("berita/buat", [BeritaController::class, 'buat'])->name("buat_berita");
    Route::post("berita/simpan", [BeritaController::class, 'simpan'])->name("simpan_berita");
    Route::get("berita/tampil/{id}", [BeritaController::class, 'tampil'])->name("tampil_berita");
    Route::get("berita/semua", [BeritaController::class, 'semua'])->name("semua_berita");
    Route::get("berita/ubah/{id}", [BeritaController::class, 'ubah'])->name("ubah_berita");
    Route::put("berita/update/{id}", [BeritaController::class, 'update'])->name("update_berita");
    Route::delete("berita/hapus/{id}", [BeritaController::class, 'hapus'])->name("hapus_berita");

    Route::get("nilai/buat", [NilaiController::class, 'buat'])->name("buat_nilai");
    Route::post("nilai/simpan", [NilaiController::class, 'simpan'])->name("simpan_nilai");
    Route::get("nilai/tampil/{id}", [NilaiController::class, 'tampil'])->name("tampil_nilai");
    Route::get("nilai/semua", [NilaiController::class, 'semua'])->name("semua_nilai");
    Route::get("nilai/ubah/{id}", [NilaiController::class, 'ubah'])->name("ubah_nilai");
    Route::put("nilai/update/{id}", [NilaiController::class, 'update'])->name("update_nilai");
    Route::delete("nilai/hapus/{id}", [NilaiController::class, 'hapus'])->name("hapus_nilai");
});
