<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de comics</title>
</head>
<body>
    <div class="container">

    @if (session()->has('Registro'))

    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{session('Registro')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

        
    @endif

    @if($errors->any())
    @foreach ($errors->all() as $error)

{{--     <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}
  
    
    @endforeach
    @endif

    <form method="POST" action="/" >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" name="txtNombre" value="{{old('txtNombre')}}">
          <p class="text-danger">{{$errors->first('txtNombre')}}</p>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fecha de publicacion</label>
          <input type="date" name="txtFecha" value="{{old('txtFecha')}}">
          <p class="text-danger">{{$errors->first('txtFecha')}}</p>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No. Comics</label>
            <input type="number" name="txtNumero" value="{{old('txtNumero')}}">
            <p class="text-danger">{{$errors->first('txtNumero')}}</p>
          </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
</body>
</html>
