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
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <a type="button" href="{{ route('create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear</a>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th>Número de Imagen</th>
                        <th class="border px-4 py-1">Imagenes</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{$image->id}}</td>
                        <td class="border px-4 py-1">
                            <img src="/imagen/{{$image->imagen}}" width="60%">
                        </td>
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <!-- botton borrar -->
                                <form action="{{ route('destroy', $image->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div>
                {!! $images->links() !!}
            </div>
        </div>
    </div>
</div>
<script>
    (function() {
  'use strict'

  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {  
        form.addEventListener('submit', function (event) {
            event.preventDefault()
            event.stopPropagation()
            Swal.fire({
                title: '¿Confirma la eliminación de la imagen?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if(result.isConfirmed) {
                    this.submit();
                    Swal.fire('Eliminado!', 'La imagen ha sido eliminada exitosamente', 'success');
                }
            })
        }, false)
    })
})()
</script>
@endsection