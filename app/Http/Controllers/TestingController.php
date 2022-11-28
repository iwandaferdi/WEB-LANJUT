<?php

namespace App\Http\Controllers;

class TestingController extends Controller
{
    function hii($nama) {

        return view("hii")
            ->with("nama", $nama)
            ->with("mk", "Web Lanjut")
            ->with("waktu", date("H:m:s"))
            ->with("panggilan", "Mr")
            ;

    }

    function about(){
        return view("about-me");
    }

    function journey() {
        return view("my-journey");
    }

}
