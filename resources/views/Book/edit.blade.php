<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('package.update', $paq) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="codigo" value="{{ old('codigo', $paq->codigo) }}">
        </label>
        <br>
        <label>
            descripcion:
            <br>
            <input type="text" name="descripcion" value="{{ old('descripcion', $paq->descripcion) }}">
        </label>
        <br>_
        <label>
            ddestinatario:
            <br>
            <input type="text" name="destinatario" value="{{ old('destinatario', $paq->destinatario) }}">
        </label>
        
        <br>
        <label>
            descripcion:
            <br>
            <input type="text" name="direccion" value="{{ old('direccion', $paq->direccion) }}">
        </label>
        <br>
        <br>
        
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>