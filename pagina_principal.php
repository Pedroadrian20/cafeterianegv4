<?php 
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

$user = DB::table('usuarios_cafeteria')
    ->leftJoin('perfiles', 'usuarios_cafeteria.idperfil', '=', 'perfiles.idperfil')
    ->where('usuarios_cafeteria.idusuarios_cafeteria', $_GET['idusuario'])->first();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
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

    <h1 class="subtitulos">NEGOCIO DE CAFETERIA</h1>
    <br>
    <br>
<br>
   <div class="columns">
     <div class="column">
       <figure class="image is-200x200">
         <img src="Imagenes/cafetipo.png">
       </figure>
       <h5 class="subtitulo" >Tipos de cafe</h5>
     </div>
     <div class="column">
       <figure class="image is-200x200">
         <img src="Imagenes/frappe.png">
       </figure>
       <h5 class="subtitulo" >Frappes</h5>
     </div>
     <div class="column">
       <figure class="image is-200x200">
         <img src="Imagenes/cappuchino.png">
       </figure>
       <h5 class="subtitulo" >Cappuchino</h5>
     </div>
     <div class="column">
       <figure class="image is-200x200">
         <img src="Imagenes/cafecaliente.png">
       </figure>
       <h5 class="subtitulo" >Cafe caliente</h5>
     </div>
   </div>
   <br>

   <br>
   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Informacióon sobre las Bebidas Frias
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En nuestra cafeteria de: Coffes Martinez, vendemos de todo tipo de bebidas, les voy a hablar sobre las bebidas frias que vendemos.</p>
         <p class="cardstext">Aqui en la cafeteria, vendemos Frappes ya sea de chocolate, fresa, vainilla, etc. Tambien vendemos malteadas, frappuchinos, frappes con hielo, cappuchinos, entre otras bebidas frias.</p>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre las Bebidas Calientes
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En nuestra cafeteria aparte de vender bebidas frias, tambien vendemos bebidas calientes, aqui les voy a dar un poco de informacion.</p>
         <p class="cardstext">En nuestra cafeteria vendemos bebidas como por ejemplo, te, cafes, cappuchino, cafe americano, latte y cafe moca, entre algunas otras bebidas.</p>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre los postres
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En la cafeteria no solo vendemos bebidas, sino que tambien vendemos postres, para que nuestros clientes puedan acompañar su bebida con algun rico postre.</p>
         <p class="cardstext">De postres vendemos pasteles ya sea de chocolate, de tres leches, pastel imposible, etc. Los pasteles los vendemos en rebanadas, aparte de los pasteles, tambien vendemos pays, donas y panes.</p>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre los panes
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En la cafeteria nuestros clientes no solo pueden acompañar sus cafes y otras bebidas con pasteles sino que tambien las pueden acompañar con panes</p>
         <p class="cardstext">Estos son algunos de los panes que vendemos:</p>
         <ol class="cardstext">
           <li>Conchas: Chocolate, fresa y Vainilla.</li>
           <li>Hojaldras: con jamon y queso y sin nada.</li>
           <li>Panquesitos.</li>
           <li>Donas: Chocolate, Con azucar, etc.</li>
         </ol>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre los desayunos
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En la cafeteria aparte de vender pasteles y panes para acompañar las bebidas, tambien vendemos desayunos para que los clientas puedan disfrutar un rico deayuno</p>
         <p class="cardstext">Estos son algunos de los desayunos que vendemos:</p>
         <ol class="cardstext">
            <li>Huevos con jamon</li>
            <li>Club Sandwich</li>
            <li>Coctel de frutas</li>
            <li>Hot Cakes acompañados con huevo y tocino</li>
         </ol>
       </div>
     </div>
   </div>

   <br>
   <div class="columns">
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/logoCafeteria.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">Este es el logo de mi negocio, mi negocio es sobre una cafeteria, la cual tiene como nombre: Coffes Martinez.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/frappe.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">En la cafeteria de Coffes Martinez, vendemos bebidas frias como los frappes.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/cafecaliente.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">En la cafeteria de Coffes Martinez, aparte de preparar bebidas frias, tambien preparamos bebidas calientes.</p>
         </div>
       </div>
     </div>
   </div>
   <br>
   <div class="columns">
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/cafetipo.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">Estos son algunos de los cafes que tenemos por el momento.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/pastel.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">En la cafeteria de Coffes Martinez, aparte de las bebidas, tambien vendemos postres.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/fondo4.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">Estos son algunos ejemplos de los postres que vendemos en nuestra cafeteria.</p>
         </div>
       </div>
     </div>
   </div>
   <br>
   <div class="columns">
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/panes.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">En nuestra cafeteria aparte de vender postres, tambien vendemos panes, como conchas, hojaldras, entre otros.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/huevosconjamon.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">En la cafeteria vendemos desayunos por si algun cliente quiere disfrutar de un rico desayuno.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="CardFormulario">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="Imagenes/cereal.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext2">En la cafeteria vendemos desayunos saludables por si algun cliente quiere ordenar algo nutritivo.</p>
         </div>
       </div>
     </div>
   </div>
   <br>

   <?php if ($user->nombreperfil == 'Administrador') { ?>
   <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         oficio: Administrador
       </p>
     </header>
     <div class="card-content">
       <div class="content">
           <p class="subtitulos">Toca el siguiente botón para acceder a los registros:</p>
           <button class="button is-dark" type="button"><a href="consultar_administrador.php">Consultar registros</a></button>
       </div>
     </div>
   </div>
    <br>
    <br>
    <?php } ?>
    <br>
    <?php if ($user->nombreperfil == 'Cliente') { ?>
    <div class="card" id="CardFormulario">
     <header class="card-header">
       <p class="card-header-title">
         oficio: Cliente
       </p>
     </header>
     <div class="card-content">
       <div class="content">
           <p class="subtitulos">Toca el siguiente botón para registrarte:</p>
           <button class="button is-dark" type="button"><a href="pagcliente.html">Registrarse</a></button>
       </div>
     </div>
    </div>
    <br>
    <br>
    <?php } ?>
    <br>
    <br>

</body>
</html>