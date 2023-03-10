<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        

        <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    </head>

    <body>        
        <h1 class="text-center p-3">Crud con Laravel</h1>
        
        @if (session("correcto"))
        <div class="alert alert-success">{{session("correcto")}}</div>
        @endif

        @if (session("incorrecto"))
        <div class="alert alert-danger">{{session("incorrecto")}}</div>
        @endif
        
        <div class="modal fade" id="modalregistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Proceso</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route("ProProcesoController.create")}}">
                        {{-- <form action="{{route("crud.create")}}" method="post"> --}}
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Id</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="crearproid">  
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Prefijo de Proceso</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="crearproprefijo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre del Proceso</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="crearpronombre">  
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Crear Registro</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="p-5 table-responsive">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalregistrar">Crear Registro</button>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Prefijo</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    @foreach ($datos as $item)
                    <tr>
                        <th>{{$item->PRO_ID}}</th>
                        <td>{{$item->PRO_PREFIJO}}</td>
                        <td>{{$item->PRO_NOMBRE}}</td>
                        <td>
                            {{-- <a href="" data-bs-toggle="modal" data-bs-target="#modaleditar{{$item->PRO_ID}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                            <a href="" data-bs-toggle="modal" data-bs-target="#modaleditar" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>

                        <!-- Modal -->
                <div class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Proceso</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- <form action="{{route("crud.update")}}" method="post"> --}}
                                <form>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="editarproid" value={{$item->PRO_ID}} readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Prefijo de Proceso</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="editarproprefijo" value={{$item->PRO_PREFIJO}}>  
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del Proceso</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="editarpronombre" value={{$item->PRO_NOMBRE}}>  
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Modificar Proceso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>