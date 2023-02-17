<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BradburyController extends AbstractController {
        
    public function bradbury(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
			<head>
			<title>Ray Bradbury</title>
            </head>
            <body>
            
            
            <p>Život autora: Ray Bradbury byl americký spisovatel science fiction, fantazie a hororu. Narodil se v roce 1920 v Illionois a zemřel v roce 2012 v Kalifornii.<br>
            Autorovo další dílo: Martian Chronicles, The Illustrated Man, Something Wicked This Way Comes<br>
            DALŠÍ AUTOŘI TOHOTO OBDOBÍ: George Orwell, Aldous Huxley, Isaac Asimov, Arthur C. Clarke.            
            </p>
            </body>
            </html>'
        );
    }
}
?>