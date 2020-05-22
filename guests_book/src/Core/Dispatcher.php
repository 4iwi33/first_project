<?php

namespace Core;


use Controller\TableController;
use Model\DbTable;
use mysqli;

class Dispatcher
{
    public function __construct()
    {
    }

    public function run()
    {
        include __DIR__ . "/../../config/config.php";
        // ?action=show
        // ?action=add
        // print_r($config);
        $controller = new TableController(new DbTable(
            new mysqli(
                $config['mysql']['host'],
                $config['mysql']['user'],
                $config['mysql']['password'],
                $config['mysql']['database']
            ),
            $config['mysql']['table']
        ));

        $action = "action" . $_GET["action"];

        if (method_exists($controller, $action)) {
            $controller->{$action}();
        }
        // $controller->actionShow();
        // $controller->{"actionShow"}();
    }
}
