@extends('layout.quran')

@section('ayas')
    @foreach ($ayas as $aya)
        <div class="aya">
            @include('quran.aya')
        </div>
    @endforeach
@endsection
