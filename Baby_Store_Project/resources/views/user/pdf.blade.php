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
        <h1>FACTURA DE COMPRA</h1>
        <hr>
        <div class="contenido">
            @foreach($data["productsInCart"] as $key)
            <li>
                Nombre: {{ $key -> name }} ----------------
                Precio: {{ $key -> price }} 
            </li>
            @endforeach
        </div>
    </body>
</html>
