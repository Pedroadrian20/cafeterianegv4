<?php

use Illuminate\Database\Capsule\Manager as DB;

echo <<<_TICKET
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets de compra</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="diseños/pagprincipal_cafeteria.css">
    <style>
        body{
            background-image: url("Imagenes/paisaje8.png");
            background-size: cover;
        }

        .encabezado{
            background-image: url("Imagenes/paisaje8.png");
            background-size: cover;
        }

        .subtitulo{
            background-image: url("Imagenes/paisajeuwu.png");
            background-size: cover;
            font-size: 20px;
            font-family: cursive;
            text-align: center;
            color: black;
            border: white;
        }

        #CardFormulario{
            background-image: url("Imagenes/paisajeuwu.png");
            background-size: cover;
        }
    </style>
</head>
<body>
    <header class="encabezado">
        <div class="columns">
            <div class="column">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="Imagenes/logocafeteria.png">
                </figure>
            </div>
            <div class="column" id="titulohead">
              NEGOCIO DE CAFETERIA
            </div>
            <div class="column">
              </div>
        </div>
    </header>
    
    <br>
    <h1 id="titulo">BIENVENIDO A LA PÁGINA PRINCIPAL DE MI NEGOCIO DE CAFETERIA</h1>
    <br>
    
_TICKET;

require 'vendor/autoload.php';
require 'config/database.php';

$ticket = DB::table('ticket_compra')
->leftJoin('clientes_cafeteria', 'ticket_compra.idclientes_cafeteria', '=', 'clientes_cafeteria.idclientes_cafeteria')
->leftJoin('categorias_cafeteria', 'ticket_compra.idcategorias', '=', 'categorias_cafeteria.idcategorias')
->leftJoin('tamaños_cafeteria', 'ticket_compra.idtamaños', '=', 'tamaños_cafeteria.idtamaños')
->get();

echo <<<_TABLA
    <table class='table is-bordered'id='tablaticket'>
      <thead>
        <tr>
          <th>ID de compra</th>
          <th>Nombre del cliente</th>
          <th>Categoria del producto</th>
          <th>Nombre del producto</th>
          <th>Tamaño</th>
          <th>Dirección del cliente</th>
          <th>Codigo postal</th>
        </tr>
       </thead>
_TABLA;

foreach ($ticket as $colum) {
    echo <<<_CONSULTA
       <tr>
         <td>$colum->idticket_compra</td>
         <td>$colum->nombre_cliente</td>
         <td>$colum->categoria_producto</td>
         <td>$colum->nombre_producto</td>
         <td>$colum->size_producto</td>
         <td>$colum->direccion_cliente</td>
         <td>$colum->codigo_postal</td>
       </tr>
_CONSULTA;
}
echo <<<_TABLA
    </table>
    <br>
    <br>
_TABLA;

echo <<<_END
<br>
<br>
</body>
</html>
_END;
?>