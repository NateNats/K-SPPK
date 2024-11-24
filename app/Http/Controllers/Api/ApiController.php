<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medicine;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function executeNotebook()
{
    try {
        $pythonEnv = '"C:\\Kuliah\\Semester 5\\Sistem Pendukung Pengambilan Keputusan\\Python\\env\\Scripts\\python.exe"';
        $pythonScript = '"C:\\Kuliah\\Semester 5\\Sistem Pendukung Pengambilan Keputusan\\Python\\test.ipynb"';

        $output = shell_exec("$pythonEnv nbconvert --execute $pythonScript --to notebook 2>&1");

        $filepath = storage_path('app/public/output.json');

        if (file_exists($filepath)) {
            $jsonContent = file_get_contents($filepath);
            $data = json_decode($jsonContent, true);
            return view('main.outputipynb', ['data' => $data]);
        } else {
            return view('main.error');
        }

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }
}


}
