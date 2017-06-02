<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/api/v1/pm', function($request, $response) {
  return $response->getBody()->write(\Goowi\Models\Connection\Pmconnection::all()->toJson());
});

//$app->get('/dev/{id}/', function($request, $response, $args) {
//  $id = $args['id'];
//  $dev = Dev::find($id);
//  $response->getBody()->write($dev);
//  return $response;
//});
//
//$app->post('/dev/', function($request, $response, $args) {
//  $data = $request->getParsedBody();
//  $dev = new Dev();
//  $dev->name = $data['name'];
//  $dev->focus = $data['focus'];
//  $dev->hireDate = $data['hireDate'];
//
//  $dev->save();
//
//  return $response->withStatus(201)->getBody()->write($dev->toJson());
//});
//
//$app->delete('/dev/{id}/', function($request, $response, $args) {
//  $id = $args['id'];
//  $dev = Dev::find($id);
//  $dev->delete();
//
//  return $response->withStatus(200);
//});
//
//$app->put('/dev/{id}/', function($request, $response, $args) {
//  $id = $args['id'];
//  $data = $request->getParsedBody();
//  $dev = Dev::find($id);
//  $dev->name = $data['name'] ?: $dev->name;
//  $dev->focus = $data['focus'] ?: $dev->focus;
//  $dev->hireDate = $data['hireDate'] ?: $dev->hireDate;
//
//  $dev->save();
//
//  return $response->getBody()->write($dev->toJson());
//});
