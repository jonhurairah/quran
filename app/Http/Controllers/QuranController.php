<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sura;
use App\Aya;

class QuranController extends Controller
{
    public function index(Sura $sura, $aya_start, $aya_end = false) {
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
        return view('quran.index', [
            'ayas' => $ayas,
        ]);
    }
}