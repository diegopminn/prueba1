<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="app_conference")
     */
    //ahora nuestra url tiene una parte fija y otra dinamica representada por una variable name
    /*Esto de arriba es una ruta en annotacion como puse en los apuntes o en YAML o en Annotations pues aqui en anotacion el nombre de la ruta es el id*/
    public function index(string $name): Response
    {

        return $this->render('conference/index.html.twig', [
            'name' => $name,

        ]);
        //vamos a reemplazar el return por un metodo render de la clase que estamos heredando osea nuestro saludo
    }
}
