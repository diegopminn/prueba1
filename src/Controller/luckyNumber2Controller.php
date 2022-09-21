<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class luckyNumber2Controller extends AbstractController //basicamente cuando extendiendes de abstractcontroller tienes acceso a más metodos
{
    /**
     * @Route("/lucky/number/{$max}", name="app_lucky_number")
     */

    public function number(int $max): Response
    {
        $number = random_int(0, $max);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'


        );
    }
}
