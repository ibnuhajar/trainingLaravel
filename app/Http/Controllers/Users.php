<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user)
    {
       return [
        "nama" => "ibnu hajar",
        "usia" => 22,
        "kelahiran" => "perbaungan",
        "Tanggal" => 10031998
       ];
    }
}
