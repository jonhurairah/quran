<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aya extends Model
{
    public function words() {
        return $this->hasMany(Word::class);
    }

    public function sura() {
        return $this->belongsTo(Sura::class);
    }

    public function prev() {
        $id = $this->id;
        $prev_id = $id - 1 == 0 ? Aya::count() : $id - 1;
        $prev = Aya::findOrFail($prev_id);
        return view('template.nav', [
            'url'       => $prev->sura_id . '/' . $prev->aya_id,
            'symbol'    => '&lt;',
            'label'     => 'Previous',
        ])->render();
    }

    public function next() {
        $id = $this->id;
        $next_id = $id + 1 >= Aya::count() ? 1 : $id + 1;
        $next = Aya::findOrFail($next_id);
        return view('template.nav', [
            'url'       => $next->sura_id . '/' . $next->aya_id,
            'symbol'    => '&gt;',
            'label'     => 'Next',
        ])->render();
    }
}
