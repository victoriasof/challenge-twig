<?php

namespace App\Controller;

use App\Utils\Master;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("", name="index")
     * @param Master $master
     * @return Response
     */
    public function index(Master $master): Response
    {
        $message = '';
        $request = Request::createFromGlobals();
        if ($request->isMethod('POST')) {
            $message = $request->request->get('message');
            echo $message;
            echo 'test';
            $message = $master->transform($message);
            $master->log();
        }
        return $this->render('index/index.html.twig', [
            'message' => $message
        ]);
    }
}
