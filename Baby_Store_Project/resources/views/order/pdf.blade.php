<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
    </style>
    </head>
    <body>
        <h1>FACTURA</h1>
        <hr>
        <div class="contenido">
            @foreach($showOrder as $ord)
            <li>
                <p>ID de Orden: {{ $ord -> getId() }}</p>
                <p>Total: {{ $ord -> getTotal() }}$ COP </p>
                <p>Fecha: {{ $ord -> getDate() }}</p>
            </li>
            @endforeach
        </div>
    </body>
</html>
