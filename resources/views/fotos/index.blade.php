@extends('template')

{{-- @section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Estas en la vista index de files</h1>
            </div>
        </div>
    </div>
@endsection --}}
@section('content')
 <h1>Fotos de .....</h1>

 <table class="table table-ls table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">FOTO</th>
            <th scope="col">Descripcion</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fotos as $foto)
            <tr>
                <th scope="row">{{ $foto->id }}</th>
                {{-- <td>{{ $foto->url }}</td> --}}
                <td> <a class=""  href="{{$foto->url }}" target="_blank"><img src="{{$foto->url }}" alt="" height="100" ></a></td>
                <td>{{ $foto->descripcion }}</td>
                <td>
                   

                    <form action="{{ url('/fotos/' . $foto->id) }}" class='form' method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        {{-- <a href="{{ url('/formador/' . $usuario->id . '/edit') }}"class="btn btn-info">
                            Editar
                        </a> --}}
                        {{-- <button class="btn btn-info"><i class="bi bi-gear-fill"></i></button> --}}
                        <a href="/fotos/{{$foto->id}}/edit" class="btn btn-info"><i class="bi bi-gear-fill"></i></a>  
                        
                        {{-- <input value="Borrar" type="submit" onclick="return confirm('Borrar el usuario ????') "
                            class="btn btn-danger" /> --}}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Borrar la foto ????') "  data-bs-toggle="modal" data-bs-target="#modal-content"><i class="bi bi-x-lg"></i></button>
                        
                    </form>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>
{{$fotos->links('vendor.pagination.bootstrap-5')}}

@endsection