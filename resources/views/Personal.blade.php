@extends('layouts.app')


@section('titulo','USAE Irapuato')
@section('css')

@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif