<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeController extends AbstractController {
        
    public function de(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Antoine de Saint-Exupéry</title>
            </head>
            <body>
            
            
            <p>Život autora: Antoine de Saint-Exupéry byl francouzský spisovatel a letec, který se proslavil jako pilót v letech mezi světovými válkami.
            Autorovo další dílo: Kniha Malý princ je nejslavnějším dílem autora, ale také napsal knihy jako novely Night Flight a Southern Mail.
            DALŠÍ AUTOŘI TOHOTO OBDOBÍ: Jean-Paul Sartre, Albert Camus, Gabriel Garcia Marquez.
            </p>
            </body>
            </html>'
        );
    }
}
?>