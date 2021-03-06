<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function forgot(){
        return view('forgot');
    }

    public function list_user(){
        return view('list_user');
    }

    public function list_sekolah_terdaftar(){
        return view('list_sekolah_terdaftar');
    }

    public function list_sekolah_gsm(){
        return view('list_sekolah_gsm');
    }

    public function list_sekolah_indonesia(){
        return view('list_sekolah_indonesia');
    }

    public function list_assesor(){
        return view('list_assesor');
    }

    public function list_permintaan_assesor(){
        return view('list_permintaan_assesor');
    }

    public function input_modul(){
        return view('input_modul');
    }

    public function detail_modul(){
      return view('detail_modul');
    }

    public function list_materi_basic(){
        return view('list_materi_basic');
    }

    public function list_materi_advanced(){
        return view('list_materi_advanced');
    }

    public function detail_sekolah(){
        return view('detail_sekolah');
    }

    public function detail_user(){
        return view('detail_user');
    }

    public function penilaian_user(){
        return view('penilaian_user');
    }

    public function edit_materi_basic(){
        return view('edit_materi_basic');
    }

    public function edit_materi_advance(){
        return view('edit_materi_advance');
    }

}
