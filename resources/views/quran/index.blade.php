@extends('template.bootstrap')

@section('style')
    @parent
    <style>
        .aya {
            position: relative;
            border: 1px solid #ddd;
            margin: 8px 0px;
            padding: 8px;
        }
        .aya-ar {
            padding-left: 56px;
            font-family: qalammajeed;
            font-size: 28px;
        }
        .aya-number {
            position: absolute;
            top: 10px;
            display: inline-block;
            width: 36px;
            height: 36px;
            font-size: 16px;
            margin-right: 24px;
        }
        .aya-number img {
            width: 36px;
            position: absolute;
            top: 0px;
        }
        .aya-number .number {
            position: relative;
            top: 12px;
            width: 100%;
            font-size: 12px;
            font-weight: bold;
        }
        hr {
            margin-bottom: 4px;
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
