<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cliente</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="diseños/pagprincipal_cafeteria.css">
    <script src="node_modules/axios/dist/axios.min.js"></script>
    <style>
        body{
            background-image: url("Imagenes/paisaje8.png");
            background-size: cover;
        }

        .encabezado{
            background-image: url("Imagenes/paisaje8.png");
            background-size: cover;
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
    <h1 id="titulo">BIENVENIDO A LA PÁGINA DE MI NEGOCIO DE CAFETERIA</h1>
    <br>

    <h1 class="subtitulos">NEGOCIO DE CAFETERIA</h1>
    <br>

    <p class="subtitulos">Vamos a realizar tu pedido:</p>
    <br>

<?php
$clientes = DB::table('clientes_cafeteria')->get();

echo <<<_TABLA
<p class="subtitulos">Registros:</p>
<br>
    <table class='table is-bordered'id='CardFormulario'>
      <thead>
        <tr>
          <th>Número de registro de cliente</th>
          <th>Nombres de clientes</th>
        </tr>
       </thead>
_TABLA;

foreach ($clientes as $colum) {
    echo <<<_CONSULTA
    <tr>
         <td>$colum->idclientes_cafeteria</td>
         <td>$colum->nombre_cliente</td>
       </tr>
_CONSULTA;
}
echo <<<_TABLA
    </table>
    <br>
_TABLA;
?>

<?php
$categorias = DB::table('categorias_cafeteria')->get();

echo <<<_TABLA
<p class="subtitulos">Estas son las categorias que tenemos:</p>
<br>
    <table class='table is-bordered'id='CardFormulario'>
      <thead>
        <tr>
          <th>Número de categoria</th>
          <th>Categorias de productos</th>
        </tr>
       </thead>
_TABLA;

foreach ($categorias as $colum) {
    echo <<<_CONSULTA
    <tr>
         <td>$colum->idcategorias</td>
         <td>$colum->categoria_producto</td>
       </tr>
_CONSULTA;
}
echo <<<_TABLA
    </table>
    <br>
_TABLA;
?>

<?php
$tamaño = DB::table('tamaños_cafeteria')->get();
?>

    <p class="subtitulos">Te dejamos una lista con los productos de cada categoria</p>
    <br>

    <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Para las Bebidas Calientes tenemos:
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <ol class="cardstext">
           <li>Té</li>
           <li>Cappuchino</li>
           <li>Café Americano</li>
           <li>Latte</li>
           <li>Café Moca</li>
         </ol>
       </div>
     </div>
   </div>
   <br>
   <br>

   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Para las Bebidas Frias tenemos:
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <ol class="cardstext">
           <li>Frappes (Chocolate, Vainilla y Fresa)</li>
           <li>Malteadas (Chocolate, Vainilla y Fresa)</li>
           <li>Frappuchinos</li>
           <li>Frappes con hielo</li>
           <li>Cappuchino</li>
         </ol>
       </div>
     </div>
   </div>
   <br>
   <br>

   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Para los Desayunos tenemos:
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <ol class="cardstext">
           <li>Huevos con Jamon</li>
           <li>Hot-Cakes acompañados con huevo y tocino</li>
           <li>Club Sandwich</li>
           <li>Coctel de frutas</li>
         </ol>
       </div>
     </div>
   </div>
   <br>
   <br>

   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Para los panes tenemos:
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <ol class="cardstext">
           <li>Conchas (Chocolate, Fresa y Vainilla)</li>
           <li>Hojaldras (Con jamon y queso o sin nada)</li>
           <li>Panquesitos</li>
           <li>Donas (Chocolate, con azucar, etc)</li>
         </ol>
       </div>
     </div>
   </div>
   <br>
   <br>

   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Para los pasteles tenemos:
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <ol class="cardstext">
           <li>Pastel de tres leches</li>
           <li>Pastel de Chocolate</li>
           <li>Pastel Imposible</li>
           <li>Pays</li>
         </ol>
       </div>
     </div>
   </div>
   <br>
   <br>

   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Para los Jugos tenemos:
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <ol class="cardstext">
           <li>Jugo de Naranja</li>
           <li>Jugo de Jamaica</li>
           <li>Jugo de Melón</li>
           <li>Jugo de Sandía</li>
           <li>Jugo de Papaya</li>
           <li>Jugo de Limon</li>
         </ol>
       </div>
     </div>
   </div>
   <br>
   <br>


    <p class="subtitulos">LLena el siguiente formulario con los datos que se te piden, para realizar tu peido:</p>
    <br>

    <div class="card card-width='100'" id="CardFormulario">
        <header class="card-header">
          <p class="card-header-title">
            Formulario de pedido:
          </p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action='api/index.php/direcciones' method='POST'>
                    <label for=idcategorias_cafeteria>Escoje la categoria de tu producto:</label>
                    <div class="control">
                    <div class="select is-info">
                        <select id="idcategorias_cafeteria" name="idcategorias_cafeteria" >
                            <?php
                              foreach ($categorias as $colum){
                                  echo "<option value='$colum->idcategorias'>{$colum->idcategorias}- {$colum->categoria_producto}</option>";
                              }
                            ?>
                        </select>
                    </div>
                    </div>
                    <label for=producto>Ingresa el nombre de tu producto:</label>
                    <input id="producto" class="input" type="text" name="producto" placeholder="nombre de producto">
                    <label for=idtamaños_cafeteria>Escoje el tamaño de tu producto:</label>
                    <div class="control">
                    <div class="select is-info">
                        <select id="idtamaños_cafeteria" name="idtamaños_cafeteria" >
                            <?php
                              foreach ($tamaño as $colum){
                                  echo "<option value='$colum->idtamaños'>{$colum->idtamaños}- {$colum->size_producto}</option>";
                              }
                            ?>
                        </select>
                    </div>
                    </div>
                    <label for=direccion>Ingresa tu dirección:</label>
                    <input id="direccion" class="input" type="text" name="direccion" placeholder="dirección de envio">
                    <label for=codigo_postal>Ingresa tu código postal:</label>
                    <input id="codigo_postal" class="input" type="text" name="codigo_postal" placeholder="código postal">
                    <label for=id_cliente>Ingresa tu número de registro:</label>
                    <div class="control">
                    <div class="select is-info">
                        <select id="id_cliente" name="id_cliente" >
                            <?php
                              foreach ($clientes as $colum){
                                  echo "<option value='$colum->idclientes_cafeteria'>{$colum->idclientes_cafeteria}- {$colum->nombre_cliente}</option>";
                              }
                            ?>
                        </select>
                    </div>
                    </div>
                    <div>
                       <button class="button is-dark" type="button" onclick="pedido()">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script>
        function pedido (){
            var CategoriaSelect = document.getElementById("idcategorias_cafeteria")
            var selectcategoria = CategoriaSelect.options[CategoriaSelect.selectedIndex].value
            var TamañoSelect = document.getElementById("idtamaños_cafeteria")
            var selecttamaño = TamañoSelect.options[TamañoSelect.selectedIndex].value
            var ClienteSelect = document.getElementById("id_cliente")
            var selectcliente = ClienteSelect.options[ClienteSelect.selectedIndex].value
            axios.post('api/index.php/pedido', {
                idcategorias_cafeteria: selectcategoria,
                producto: document.forms[0].producto.value,
                idtamaños_cafeteria: selecttamaño,
                direccion: document.forms[0].direccion.value,
                codigo_postal: document.forms[0].codigo_postal.value,
                id_cliente: selectcliente
            }).then(resp => {
                alert(`Se guardaron los datos del pedido\nGracias por realizar tu pedido :3\nEsperamos te hayan gustado nuestros productos uwu`)
                setTimeout(`location. href='pregunta.html'`, 500)
                console.log(resp)
            }).catch(error => {
                alert(`Los datos no se han ingresado correctamente, vuelva a intentarlo`)
            });
        }
    </script>
      
</body>
</html>