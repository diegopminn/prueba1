<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * kjkjjkkj
     * @Route("/", name="app_conference")
     */
    //ahora nuestra url tiene una parte fija y otra dinamica representada por una variable name
    /*Esto de arriba es una ruta en annotacion como puse en los apuntes o en YAML o en Annotations pues aqui en anotacion el nombre de la ruta es el id*/
    public function index(): Response {
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'hola'
        ]);

        // vamos a reemplazar el return por un metodo render de la clase que estamos heredando osea nuestro saludo
    }

    /**
     * @Route("/pagina2", name="app_pagina2")
     */
    public function pagina2 () {
        return $this->render('conference/pagina2.html.twig');
    }

    /**
     * @Route("/paginaFormulario", name="formulario")
     */
    public function pagina3 () {
        return $this->render('conference/formulario.html.twig');
    }

    /**
     * la forma correcta de declarar un array es '' => $variable
     * @Route("/calculadora", name="calculadora")
     */
    public function calculadora() {
        $num1 = 1;
        $num2 = 2;
        $suma = $num1 + $num2;

        return $this->render('conference/calculadora.html.twig', [
            'sumadenumeros' => $suma
        ]);
    }


}
