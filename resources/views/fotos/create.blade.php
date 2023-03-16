@extends('template')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" /> --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection

@section('content') 
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Subir Fotos</h2>
                {{-- <div class="card">
                    <div class="card-body">
                        <form action="{{route('fotos.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" id="" accept="image/*">
                                <br>
                                @error('file')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Subir imagen</button>
                        </form>
                    </div>
                </div> --}}

                <form action="{{route('fotos.store')}}"
                    method="POST"
                    class="dropzone"
                    id="my-awesome-dropzone">
                </form>
            </div>
        </div>
    </div>
 @endsection

@section('js')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script> --}}
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <script>
        Dropzone.options.myAwesomeDropzone = {
            headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },

            dictDefaultMessage: "Arrastre una imagen al recuadro para subirlo",
            acceptedFiles: "image/*",
            maxFilesize: 2,
            maxFiles: 12,
        };
    </script>
@endsection