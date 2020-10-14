<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index()
    {
        return [
            [
                "nama" => "ibnu hajar",
                "usia" => 22,
                "kelahiran" => "perbaungan",
                "Tanggal" => 10031998
            ],
            [
                "nama" => "Jikti Khairina",
                "usia" => 21,
                "kelahiran" => "lhokseumawe",
                "Tanggal" => 10031998
            ],
            [
                "nama" => "Jikti Khairina",
                "usia" => 21,
                "kelahiran" => "lhokseumawe",
                "Tanggal" => 10031998
            ]
        ];
    }
}
