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
        <form action="EnvioDatosPlaF" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input  type="text" name="nombre" id="nombre" class="form-control">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Adjuntar PDF</label>
                <input class="form-control" name="imagen" id="imagen" type="file">
              </div>
            </div>
          </div>
            <div class="flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5">
                <a href="{{ route('home') }}" class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Cancelar</a>
                <button type="submit" class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Guardar</button>
            </div>
        </div>
      </form>
        </div>
    </div>
</div>
@endsection