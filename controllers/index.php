<?php 

require "core/functions.php";
require "models/Grocery.php";

$groceries = $app['database']->selectAll('groceries', 'Grocery');

require "views/index.view.php";