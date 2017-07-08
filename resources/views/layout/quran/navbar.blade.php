<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false"
            >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{
                url('/')
            }}">{{ config('app.name') }}</a>
        </div>
        <div
            class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1"
        >
            {{ Form::open([
                'id' => 'navigator',
                'class' => 'navbar-form navbar-right',
            ]) }}
            <form id="navigator" class="navbar-form navbar-right">
                <div class="form-group">
                    {{ Form::select(
                        'sura', $suras->pluck('title', 'id')
                        , $ayas->first()->sura_id
                        , [
                            'class' => 'form-control',
                        ]
                    ) }}
                    {{ Form::select('aya_start', [], null, [
                        'class' => 'form-control',
                    ]) }}
                    {{ Form::select('aya_end', [], null, [
                        'class' => 'form-control',
                    ]) }}
                </div>
                <a
                    href="javascript:"
                    id="form-navigator"
                    class="btn btn-default"
                >
                    <i class="fa fa-refresh"></i>
                </a>
            {{ Form::close() }}
        </div>
    </div>
</nav>
