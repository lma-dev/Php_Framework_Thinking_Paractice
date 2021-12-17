<?php
require "functions.php";
// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";
// require "core/Router.php";
// require "core/Request.php";
//you can write as like this
// $pdo=Connection::make($config['database']);
// $database=new QueryBuilder($pdo);
// $config=require "config.php";
// $database=new QueryBuilder(Connection::make($config['database']));

App::bind("config", require "config.php");
App::bind("database", new QueryBuilder(Connection::make(App::get("config")['database'])));
