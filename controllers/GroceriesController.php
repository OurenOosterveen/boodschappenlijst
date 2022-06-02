<?php 

Class GroceriesController{
    public static function createGrocery($app) {
        $app['database']->insert('groceries', [
            'name' => $_POST['groceryname'],
            'number' => $_POST['grocerynum'],
            'price' => $_POST['grocerycost']
        ]);
    }
}