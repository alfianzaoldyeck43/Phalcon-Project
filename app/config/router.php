<?php

$router = $di->getRouter();

// Define your routes here

$router->addGet(
	"",
	[
		"controller"	=> "index",
		"action"		=> "index"
	]
);
$router->addGet(
	"/test",
	[
		"controller"	=> "test",
		"action"		=> "test"
	]
);

$router->addGet(
    "/user",
    [
        "controller"	=> "user",
        "action"        => "index"
    ]
);
$router->addGet(
    "/user/{userId}",
    [
        "controller"    => "user",
        "action"        => "show"
    ]
);
$router->addGet(
    "/user/create",
    [
        "controller"        => "user",
        "action"            => "create"
    ]
);
$router->addPost(
    "/user/create",
    [
        "controller"        => "user",
        "action"            => "save"
    ]
);
$router->addPut(
    "/user/edit/{userId}",
    [
        "controller"        => "user",
        "action"            => "edit"
    ]
);
$router->addPut(
    "/user/delete/{userId}",
    [
        "controller"        => "user",
        "action"            => "delete"
    ]
);

$router->handle($_GET['_url'] ?? '/');
