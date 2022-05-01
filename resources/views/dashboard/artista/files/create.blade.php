@extends('layouts.app')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')

<div class="container" >
    <div class="row">
        <div class="col">
            <h1>Subir imagenes</h1>

 {{--            <div class="card">
                <div class="card-body">
                    <form action="{{route('artista.files.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" id="" accept="image/*">
                            <br>
                            @error('file')
                                <small class="text-danger"> {{$message}} </small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Subir imagen</button>
                    </form>
                </div>
            </div>
 --}}

    <form action="{{route('artista.files.store')}}"
        method="POST"
        class="dropzone"
        id="my-awesome-dropzone">
    </form>

        </div>
    </div>
    </div>


@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>

<script>
    Dropzone.options.myAwesomeDropzone = {
        headers:{
            'X-CSRF-TOKEN' : "{{csrf_token()}}"
        },
        dictDefaultMessage: "Arrastre una imagen al recuadro para subirlo",
        acceptedFiles: "image/*",
        maxFilesize: 20,
        maxFiles: 6,

    };
</script>

@endsection
