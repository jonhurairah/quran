@extends('template.bootstrap')

@section('style')
    @parent
    <style>
        .aya {
            border: 1px solid #ddd;
            margin: 32px;
            padding: 32px;
        }
        .aya-number {
            position: relative;
            top: -25px;
            display: inline-block;
            width: 48px;
            height: 48px;
            font-size: 16px;
            margin-right: 24px;
        }
        .aya-number img {
            width: 48px;
            position: absolute;
            top: 0px;
        }
        .aya-number .number {
            position: relative;
            top: 16px;
            width: 100%;
            font-size: 12px;
            font-weight: bold;
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
