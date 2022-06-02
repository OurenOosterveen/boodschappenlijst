<?php

require 'controllers/GroceriesController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    GroceriesController::createGrocery($app);

    header('Location: /groceries');
}

require "views/create.view.php";