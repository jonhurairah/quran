@extends('template.base')

@section('style')
    {{ Html::style('font-awesome/4.7.0/css/font-awesome.css') }}
    {{ Html::style('bootstrap/3.3.7/dist/css/bootstrap.css') }}
@endsection

@section('script')
    {{ Html::script('/js/jquery-1.12.4.js') }}
    {{ Html::script('bootstrap/3.3.7/dist/js/bootstrap.js') }}
@endsection
