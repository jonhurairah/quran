<div
    class="aya-ar"
    dir="rtl"
    lang="ar"
>
    {!! clean($aya->text) !!}
</div>
<div
    class="aya-number"
>
    {{ Html::image('/img/aya-number-frame.png') }}
    <div class="number text-center">{{ ar($aya->aya_id) }}</div>
</div>
<hr>
<div>{{ $aya->terjemahan }}</div>
