<div
    dir="rtl"
    lang="ar"
>
    <span
        style="
            font-family: qalammajeed;
            font-size: 36px;
        "
    >{!! clean($aya->text) !!}</span>
    <div
        class="aya-number"
    >
        {{ Html::image('/img/aya-number-frame.png') }}
        <div class="number text-center">{{ ar($aya->aya_id) }}</div>
    </div>
</div>
<hr>
<div>{{ $aya->terjemahan }}</div>
