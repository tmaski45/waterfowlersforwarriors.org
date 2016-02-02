<?php

require_once 'Slim/Slim.php';
require_once 'php/Mail.php';
require_once 'php/JsonResponse.php';
require_once 'php/profile.php';
require_once 'php/contact.php';
require_once 'php/Events.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->config(array(
    'debug' => true
));
   
$app->get('/', function () use($app) {
    $events = Events::get();

    $app->render('template.php', array( 'events' => $events, 'view' => "index1.php" ));
});

$app->get('/run/', function () use($app) {
	$app->render('template.php', array( 'view' => "run.html" ));
});

$app->get('/profile/', function () use($app) {
	$app->render('template.php', array( 'view' => "profile.html" ));
});

$app->get('/dinner/', function () use($app) {
	$app->render('template.php', array( 'view' => "dinner.html" ));
});

$app->get('/hunt/', function () use($app) {
	$app->render('template.php', array( 'view' => "hunt.html" ));
});

$app->get('/contact/', function () use($app) {
	$app->render('template.php', array( 'view' => "contact.html" ));
});

$app->get('/media/', function() use($app) {
	$app->render('template.php', array('view'=>"media.php"));
});

$app->get('/events/', function() use($app) {
	$events = Events::get();

    $app->render('template.php', array( 'events' => $events, 'view' => "events.php" ));
});

$app->get('/directors/', function() use($app) {
	$app->render('template.php', array( 'view' => "directors.html" ));
});

$app->get('/sponsor/', function() use($app) {
    $app->render("template.php", array("view" => "donate.html"));
});

$app->get("/store/", function() use($app) {
    $app->render("template.php", array("view" => "store.html"));
});

$app->get("/thankyou/", function() use($app) {
    $app->render("template.php", array("view" => "thankyou.html"));
});

$app->get("/thankyou2/", function() use($app) {
    $app->render("template.php", array("view" => "thankyou2.html"));
});

$app->get("/events/pokerrun/", function() use($app) {
    $app->render("template.php", array("view" => "pokerrun.html"));
});

$app->post("/pokerrun/", function() use($app) {
    $data = $_POST["data"];
	$response = new JsonResponse();
    
    $response->successful("Successfully created a new request for poker run.", $data); 
});

$app->post("/contact/", function() use($app) {
	$response = new JsonResponse();
	$contact = new Contact();
	
	$result = $contact->sendContactEmail($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']);
	
	if(result) {
		$response->successful("Message successfully sent. Thank you for contacting Waterfowlers for Warriors.", $result); 
	}  
	else {
		$response->unsuccessful("Failed to send message. Please try again later.", $result);
	}
});

$app->post('/profile/', function () use($app) {
	$profile = new Profile();
	
	$profile->saveProfile($_POST);

	$app->render("template.php", array("view" => "thankyou2.html"));
});

$app->run();