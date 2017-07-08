<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sura;
use App\Aya;

class QuranController extends Controller
{
    public function index(Sura $sura, $aya_start = false, $aya_end = false) {
        if (!$aya_end and !$aya_start) {
            $aya_start = 1;
            $aya_end = $sura->ayas->count();
        }
        if ($aya_end) {
            $ayas = $sura->ayas()->where([
                ['aya_id', '>=', $aya_start],
                ['aya_id', '<=', $aya_end],
            ])->get();
        } else {
            $ayas = $sura->ayas()->where([
                ['aya_id', '=', $aya_start],
            ])->get();
        }
        $suras = Sura::all();
        return view('quran.index', [
            'suras' => $suras,
            'ayas' => $ayas,
        ]);
    }
}
