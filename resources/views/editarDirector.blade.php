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
        <form action="{{ route('actualizar', $datos->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input value="{{$datos->nombre}}" class="form-control" type="text" name="nombre" id="nombre" readonly>  
            </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Adjuntar Nuevo PDF</label>
                <input value="{{$datos->imagen}}" name="imagen" id="imagen" type="file" class="form-control">
              </div>
            </div>
        </form>
        <form enctype="multipart/form-data" class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Tesis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title-edit" name="title">
                            <input type="hidden" id="thesis_id" name="thesis_id">
                            <input type="hidden" id="thesis_code" name="thesis_code">
                        </div>
                        <div class="form-group">
                            <label for="file-edit">Archivo</label>
                            <input type="file" class="form-control-file" id="file-edit" name="file">
                          </div>
                        <div class="form-group form-check">
                            <input type="checkbox" value="1" checked class="form-check-input" id="state-edit" name="state">
                            <label class="form-check-label" for="state-edit">Activo</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-update">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
