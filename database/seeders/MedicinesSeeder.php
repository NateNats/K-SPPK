<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicines')->insert([
            [
                'items' => 'Ginifar, Omedrinat, Vesperum'
            ],
            [
                'items' => 'Hufanoxil, Omedrinat, Ginifar, Caviplex, Trichodazol'
            ],
            [
                'items' => 'Lokev, Biomega, Ifarsyl'
            ],
            [
                'items' => 'Histigo, Pronto, Heptasan, Synalten'
            ],
            [
                'items' => 'Winatin, Omedrinat, Potaflam, Omeprazole, Lostacef'
            ],
            [
                'items' => 'Genoint, Alofar, Glimepiride, Lomatuell'
            ],
            [
                'items' => 'Mionalgin, Flunadin, Kaditic, Lokev'
            ],
            [
                'items' => 'Metamidon, Recodryl, Neurosanbe'
            ],
            [
                'items' => 'Citicolin, Rhemafar, Triocid'
            ],
            [
                'items' => 'Winatin, Danasone, Rhemafar'
            ],
            [
                'items' => 'Neurosanbe, Histigo, Inamid'
            ],
            [
                'items' => 'Ranitidin, Lerzin, Metamidon'
            ],
            [
                'items' => 'Rhemafar, Vesperum, Ifarsyl'
            ],
            [
                'items' => 'Cefadroxil, Dionicol, Flutamol'
            ],
            [
                'items' => 'Grantusif, Rhemafar, Farsifen'
            ],
            [
                'items' => 'Ifarsyl, Lerzin, Pronto, Farsifen'
            ],
            [
                'items' => 'Metamidon, Omedrinat, Neurosanbe'
            ],
            [
                'items' => 'Furosemid, Graperide, Ifarsyl'
            ],
            [
                'items' => 'Genoint, Acyclovir, Nisagon'
            ],
            [
                'items' => 'Genalten, Omedrinat, Triocid'
            ],
            [
                'items' => 'Lokev, Triocid, Alvita'
            ],
            [
                'items' => 'Ranitidin, Recodryl, Zevask'
            ],
            [
                'items' => 'Alvita, Lokev, Spuit, Needle'
            ],
            [
                'items' => 'Ginifar, Pronto, Winatin'
            ],
            [
                'items' => 'Vesperum, Histigo, Genoint, Recodryl'
            ],
            [
                'items' => 'Ranitidin, Lerzin, Farsifen'
            ],
            [
                'items' => 'Lokev, Ifarsyl, Rhemafar'
            ],
            [
                'items' => 'Alvita, Lostacef, Biomega, Kaditic'
            ],
            [
                'items' => 'Kaditic, Grantusif, Heptasan'
            ],
            [
                'items' => 'Biomega, Grantusif, Inamid'
            ],
            [
                'items' => 'Lostacef, Inamid, Heptasan'
            ]
        ]);
        
    }
}
