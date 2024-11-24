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

    public function letsApriori(Request $request) {
        $data = medicine::all();
        $minSup -> $request['minSup'];
        $minNcof -> $reques['minConf'];
        return response()->json($data);
    }

    public function runApache() {
        try {
            $source = '"C:\Apache24\bin"';
            $output = shell_exec("$source\httpd.exe");
        
        } catch(Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ]);
        }
    }
}
