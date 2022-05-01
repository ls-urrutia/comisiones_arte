@extends('layouts.app')

@section('content')
<div class="container" >
<div class="row">
    @foreach ( $files as $file )
    <div class="col-4">
        <div class="card">
            <img src="{{asset($file->url)}}" alt="" class="img-fluid">
            <div class="card-footer">
                <a href="{{route('artista.files.edit',$file)}}" class="btn btn-primary">Editar</a>
                <form action="{{route('artista.files.destroy',$file)}}" class="d-inline formulario-eliminar" method="POST">

                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <div class="col-12">
        {{$files->links()}}
    </div>
</div>
</div>
@endsection

@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('eliminar') == 'ok')
<script>
 Swal.fire(
      '¡Eliminado!',
      'La imagen se ha eliminado.',
      'success')
</script>

@endif


<script>


$('.formulario-eliminar').submit(function(e){
    e.preventDefault();

Swal.fire({
title: 'Estas seguro?',
text: "¡No podras revertir esta acción!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: '¡ Sí, eliminar!',
cancelButtonText: 'Cancelar',
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();

  }
})
    });


</script>

@endsection
