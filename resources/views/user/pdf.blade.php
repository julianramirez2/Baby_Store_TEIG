<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos en carrito</title>
    <style>
    h1 {
        text-align: center;
        text-transform: uppercase;
    }

    .contenido {
        font-size: 20px;
    }

    #primero {
        background-color: #ccc;
    }

    #segundo {
        color: #44a359;
    }

    #tercero {
        text-decoration: line-through;
    }

    #color-name {
        color: blue;
    }

    table,
    td,
    th {
        border: 1px solid black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <h1>PRODUCTOS EN EL CARRITO DE COMPRA DE</h1>
    <h1 id="color-name">{{auth()->user()->getName()}}</h1>
    <hr>

    <table>
        <tr>
            <th>ID producto</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>

        @foreach($data["productsInCart"] as $key)
        <tr>
            <td>{{ $key -> getId() }}</td>
            <td>{{ $key -> getName() }}</td>
            <td>{{ $key -> getPrice() }}$ COP</td>

        </tr>
        @endforeach

        <hr>
    </table>
</body>

</html>