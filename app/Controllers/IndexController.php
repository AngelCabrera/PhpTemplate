<?php

namespace App\Controllers;

class IndexController extends BaseController
{
    public function getIndexAction()
    {
        return $this->renderHTML('index.twig');
    }
}
