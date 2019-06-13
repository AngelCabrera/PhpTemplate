<?php

namespace App\Controllers;

use Respect\Validation\Validator as validator;

class IndexController extends BaseController
{
    public function getIndexAction()
    {
        $number = 123;
        var_dump(validator::numeric()->validate($number));
        return $this->renderHTML('index.twig');
    }
}
