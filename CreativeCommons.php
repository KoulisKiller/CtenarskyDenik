<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SouladController extends AbstractController {
        
    public function soulad(): Response
    {

        return new Response(
            '<a href="https://creativecommons.org/licenses/by/4.0/deed.cs">Licence Creative Commons</a>'
        );
    }
}
?>