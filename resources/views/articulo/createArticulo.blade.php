<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Agregar Articulo </h1>
    <form action="crearArticulo" method="post">
    
    <label for="nombre">nombre: </label> <br>

    <select name="tipo" id="">
            <option value="Cama">Cama</option>
            <option value="Almohada">Almohada</option>    
    </select> 

    <select name="material" id="">
            <option value="Memory Foam">Memory Foam</option>
            <option value="Espuma_regular">Espuma_regular</option>    
    </select> 

    </form>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>