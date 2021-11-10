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
            @foreach($data["productsInCart"] as $key)
            <li>
                Nombre: {{ $key -> getName() }} ----------------
                Precio: {{ $key -> getPrice() }} 
            </li>
            @endforeach
        </div>
    </body>
</html>
