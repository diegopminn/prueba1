<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedireccionController extends AbstractController
{
    /**
     * @Route("/redi", name="app_conference1")
     */

    public function index(): RedirectResponse
    {
        return $this->redirectToRoute('app_lucky_numbersinvariable');
    }
}
