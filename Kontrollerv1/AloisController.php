<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AloisController extends AbstractController {
        
    public function alois(): Response
    {

        return new Response(
            '
			<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Alois Jirásek</title>
            </head>
            <body>
            
            
            <p>Život autora: Alois Jirásek (1851-1930) byl český spisovatel a dramatik, považovaný za jednoho z nejvýznamnějších autorů českého naturalismu.
            Autorovo další dílo: "Vlasta", "Jan Hus", "Jak šel čas", "Pověsti národů".
            DALŠÍ AUTOŘI TOHOTO OBDOBÍ: Václav E. Kliment, Kateřina Tučková, Karolína Světlá, Božena Němcová.
            </p>
            </body>
            </html>'
        );
    }
}
?>