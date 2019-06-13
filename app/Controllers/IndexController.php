<?php

namespace App\Controllers;

use Respect\Validation\Validator as validator;
use App\Models\Tool;

class IndexController extends BaseController
{
    public function getIndexAction()
    {
        return $this->renderHTML('index.twig', []);
    }
    public function postIndexAction($request)
    {
        $tools = Tool::all();
        $data = $request->getParsedBody();

        $validate = validator::stringType()->length(3, null)->validate($data['title']);
        if ($validate) {
            $tool = new Tool;
            $tool->title = $data['title'];
            try {
                $tool->save();
                echo "Guardado con éxito";
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo 'Datos inconsistentes';
        }
        return $this->renderHTML('index.twig', [
            'tools' => $tools
        ]);
    }
}
