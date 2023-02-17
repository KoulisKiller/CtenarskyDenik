<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgathaController extends AbstractController {
        
    public function agatha(): Response
    {

        return new Response(
            '
			<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Agatha Christie</title>
            </head>
            <body>
            
            
            <p>Život autora: Agatha Christie se narodila v roce 1890 v Anglii a zemřela v roce 1976. Byla jednou z nejprodávanějších autorek detektivních románů.
            Autorovo další dílo: "Mrtvý muž", "Muž v okně", "Vraždy v Midsomeru".
            DALŠÍ AUTOŘI TOHOTO OBDOBÍ: G. K. Chesterton, Dorothy L. Sayers, Edgar Allan Poe.
            </p>
            </body>
            </html>'
        );
    }
}
?>