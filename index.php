<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/database.php';

$app = AppFactory::create();
$app->setBasePath("/cafeterianegv4/api/index.php");
$app->addErrorMiddleware(true, false, false);

// Add route callbacks
$app->get('/', function (Request $request, Response $response, array $args) {
    $response->getBody()->write('Hello world!');
    return $response;
});

$app->post('/login/{usuario}', function (Request $request, Response $response, array $args) {

    $data = json_decode($request->getBody()->getContents(), false);

    $user = DB::table('usuarios_cafeteria')
    ->leftJoin('perfiles', 'usuarios_cafeteria.idperfil', '=', 'perfiles.idperfil')
    ->where('usuarios_cafeteria.nombre_usuario', $args['usuario'])
    ->first();

    $msg = new stdClass();

    if ($user->password_proporcionado == $data->password){
        $msg->aceptado = true;
        $msg->nombreperfil = $user->nombreperfil;
        $msg->nombre_usuario = $user->nombre_usuario;
        $msg->idusuario = $user->idusuarios_cafeteria;
    } else {
        $msg->aceptado = false;
    }

    $response->getBody()->write(json_encode($msg));
    return $response;
});

$app->post('/cliente', function (Request $request, Response $response, array $args) {

    $data = json_decode($request->getBody()->getContents(), false);

    $id = DB::table('clientes_cafeteria')->insertGetId([
        'nombre_cliente' => $data->nombre_cliente,
        'nombre_de_usuario' => $data->nombre_de_usuario,
        'correo_electronico' => $data->correo_electronico,
        'password_cliente' => $data->password_cliente,
        'idusuarios_cafeteria' => $data->id_usuario,
    ]);
    $msg = new stdClass();
    $msg->aceptado = !empty($id);
    $response->getBody()->write(json_encode($msg));
    return $response;

    $response->getBody()->write(json_encode($msg));
    return $response;
});

$app->post('/pedido', function (Request $request, Response $response, array $args) {

    $data = json_decode($request->getBody()->getContents(), false);

    $id = DB::table('ticket_compra')->insertGetId([
        'idcategorias' => $data->idcategorias_cafeteria,
        'nombre_producto' => $data->producto,
        'idtamaños' => $data->idtamaños_cafeteria,
        'direccion_cliente' => $data->direccion,
        'codigo_postal' => $data->codigo_postal,
        'idclientes_cafeteria' => $data->id_cliente,
    ]);
    $msg = new stdClass();
    $msg->aceptado = !empty($id);
    $response->getBody()->write(json_encode($msg));
    return $response;
});

$app->post('/delete_registros/{idclientescafeteria}', function (Request $request, Response $response, array $args) {

    $data = json_decode($request->getBody()->getContents(), false);
    DB::table('clientes_cafeteria')->where('idclientes_cafeteria', $args['idclientescafeteria'])->delete();
    $msg = 'Se elimino exitosamente';

    $response->getBody()->write(json_encode($msg));
    return $response;
});

$app->post('/delete/{id_ticketcompra}', function (Request $request, Response $response, array $args) {

    $data = json_decode($request->getBody()->getContents(), false);
    DB::table('ticket_compra')->where('idticket_compra', $args['id_ticketcompra'])->delete();
    $msg = 'Se elimino exitosamente';

    $response->getBody()->write(json_encode($msg));
    return $response;
});

$app->run();