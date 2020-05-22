<?php

namespace Controller;

use Model\CRUDInterface;

class TableController
{
    protected CRUDInterface $table;

    public function __construct(CRUDInterface $table)
    {
        $this->table = $table;
    }

    public function actionShow()
    {
        echo "Hello";
    }
}
