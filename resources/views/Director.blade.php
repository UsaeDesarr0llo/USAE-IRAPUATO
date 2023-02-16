@extends('layouts.app')


@section('titulo','USAE Irapuato')
@section('css')
<style type="text/css">
    a:link, a:visited, a:active {
        text-decoration:none;
    }
</style>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <center><h3>Directores</h3></center>
        <!--<a type="button" href="{{ route('createDirector') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear</a>-->
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border px-4 py-1">Titulo</th>
                        <th class="border px-4 py-1">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($datos as $d)
                    <tr>
                        <td class="border px-4 py-1">{{$d->nombre}}</td>
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <a href="Archivos/{{$d->imagen}}" target="_blank" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-2">Ver Documento</a>
                                <a href="{{ route('editar', $d->id) }}" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-2">Editar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        </div>
    </div>
</div>
@endsection