@extends('template.bootstrap')

@section('style')
    @parent
    <style>
        .aya {
            border: 1px solid #ddd;
            margin: 32px;
            padding: 32px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @foreach ($ayas as $aya)
                    <div class="aya">
                        @include('quran.aya')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
