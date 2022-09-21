<?php

namespace App\Controller;

use http\Env\Request;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class luckyNumberController extends AbstractController //basicamente cuando extendiendes de abstractcontroller tienes acceso a más metodos
{
    /**
     * @Route("/lucky/number", name="app_lucky_numbersinvariable")
     */

    public function number()
    {
        $number = random_int(0, 100);


        return new Response(
            '<html>
                        <head>
                            <title>Hola numero</title>
                        </head>
                        <body>
                            Lucky number: '.$number.' </br>
                           <a href="/">Vuelta al inicio</a>
                        </body>
                    </html>'

        );
    }
}
