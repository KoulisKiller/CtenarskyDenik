<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaladyController extends AbstractController {
        
    public function balady(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Romance pro křídlovku</title>
            </head>
            <body>
            
            
            <p>
            Literární druh a žánr: Epika, Povídka
            Literární směr: Pozitivismus, Mladá česká próza
            Slovní zásoba a jazyk: Prostý, výstižný jazyk s použitím nářečních výrazů
            Hlavní postavy: Dělníci, Křídlovka, Hlavní hrdina
            Kompozice: Chronologická, Popisná
            Prostor a čas: České země, 19. století
            Význam sdělení (hlavní myšlenky díla): Kritika současného společenského a hospodářského systému, Zobrazování života a útrap dělníků.
            SPOLEČENSKO-HISTORICKÉ POZADÍ: Industrializace v Českých zemích, vznik nových pracovních míst a tím i nových sociálních vrstev.
            
            děj:Autor se vrací pro neopakovatelný cit svého ži­vota do raného mládí, aby znovu prožil okamžiky letmých setkání s dív­kou z komediantského vozu, proměnu chlapce v muže, symbolizovanou otcovým nabídnutím břitvy k prvnímu holení, proměnu navždy spojenou s vůní kopru v srpnových nocích. Sloučením prostých a všedních obrazů se sugestivními motivy lásky a smrti, které se bez chronologické posloup­nosti časově prostupují (navracejí, předbíhají a zároveň obměňují), kon­frontuje básník subjektivní a obecné. Nad celou skladbou zní stříbrný hlas křídlovky jako metafora pro marnivost života, jeho jas i stíny, pro mládí „až k zbláznění živé“ i pro atmosféru české venkovské krajiny.</body>
            </html>'
        );
    }
}
?>