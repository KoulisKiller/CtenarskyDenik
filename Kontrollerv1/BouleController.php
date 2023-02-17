<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BouleController extends AbstractController {
        
    public function boule(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Pirre Boulle</title>
            </head>
            <body>
            
            
            <p>Život autora: Není znám.
            Autorovo další dílo: Není známo.
            DALŠÍ AUTOŘI TOHOTO OBDOBÍ: Jean-Paul Sartre, Samuel Beckett, Eugène Ionesco.
            </p>
            </body>
            </html>'
        );
    }
}
?>