<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\mysql\Misi;
use Illuminate\Http\Request;

class DummyApi extends Controller
{
    function list()
    {
        $list = DB::table('misi')->get();
        return $list;
    }
}
