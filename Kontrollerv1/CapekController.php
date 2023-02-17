<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CapekController extends AbstractController {
        
    public function capek(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
			<head>
			<title>Karel Čapek</title>
            </head>
            <body>
            
            
            <p>ŽIVOT AUTORA: Narodil se v roce 1890, zemřel v roce 1938 na následky nemoci způsobené nacistickými útoky na Praze<br>
                AUTOROVO DALŠÍ DÍLO: Válka s mloky, Matka, Továrna na absolutno<br>
                DALŠÍ AUTOŘI TOHOTO OBDOBÍ: Jaroslav Hašek, Franz Kafka, Jaroslav Seifert, Max Brod.
            </p>
            </body>
            </html>'
        );
    }
}
?>