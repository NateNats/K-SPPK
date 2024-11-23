<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\SPPKController;
use App\Models\medicine;

class SPPKController extends Controller
{
    public function showTable() {
        $trans = medicine::all()->toArray();
        return view('main.main', ['trans' => $trans]);
    }

    public function letsApriori() {
        return view('main.main');
    }
}
