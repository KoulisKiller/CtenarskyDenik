<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BukowskiController extends AbstractController {
        
    public function bukowski(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
			<head>
			<title>Charles Bukowski</title>
            </head>
            <body>
            
            
            <p>
            </p>
            </body>
            </html>'
        );
    }
}
?>