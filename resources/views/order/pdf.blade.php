<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
    <h1>LISTADO DE ORDENES REALIZADAS POR </h1>
    <h1 id="color-name">{{auth()->user()->getName()}}</h1>
    <hr>

    <table>
        <tr>
            <th># Orden</th>
            <th>Total</th>
            <th>Fecha</th>
            <th>Productos</th>
            <th>Direccion de entrega</th>
        </tr>

        @foreach($showOrder as $ord)
        <tr>
            <td>{{ $ord -> getId() }}</td>
            <td>{{ $ord -> getTotal() }}$ COP</td>
            <td>{{ $ord -> getDate() }}</td>
            <td>
                @foreach($listProductsInCart as $prodCart)
                {{ $prodCart -> getName()}} --
                @endforeach
            </td>
            <td>{{auth()->user()->getAddress()}}</td>
        </tr>
        @endforeach

    </table>

    <hr>

    <div class="cond row">
        <div class="col-12 mt-3">
            <h4>Condiciones y formas de pago</h4>
            <p>El pago se debe realizar en un plazo de 15 dias.</p>
            <p>
                Banco Bancolombia
                <br />
                Nro. de cuenta: DO XX 0075 XXXX XX XX XXXX XXXX
                <br />
                Código (en caso de ser requerido): BPDODOSXXXX
            </p>
        </div>
    </div>

</body>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>

</html>