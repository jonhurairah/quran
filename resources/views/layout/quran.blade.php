@extends('template.bootstrap')

@section('style')
    @parent
    <style>
        @include('layout.quran.style')
    </style>
@endsection

@section('content')
    @include('layout.quran.navbar')
    <div class="container">
        <div class="row">
            <div
                class="{{
                    'col-xs-12'
                    . ' col-sm-10 col-sm-offset-1'
                    . ' col-md-6 col-md-offset-3'
                }}"
            >
                @yield('ayas')
            </div>
        </div>
    </div>
@endsection
