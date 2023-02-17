<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BasnikController extends AbstractController {
        
    public function basnik(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Býti básníkem</title>
            </head>
            <body>
            
            
            <p>Literární druh a žánr: lyricko-epické básně
            Literární směr: česká poezie 2. poloviny 20. století
            Slovní zásoba a jazyk: jazyk básní je věcný a srozumitelný, slovní zásoba je bohatá a autor se často využívá metafor a přirovnání.
            Hlavní postavy: autor sám, jeho životní situace a vztahy s okolím.
            Kompozice: básně jsou členěny do sbírek a jednotlivé básně jsou často věnovány konkrétním tématům jako láska, život, smrt, naděje a zklamání.
            Prostor a čas: prostor básní je neomezený, čas se neuvádí.
            Význam sdělení (hlavní myšlenky díla): hlavní myšlenky se točí kolem života a jeho významu, autor se často věnuje tématu smyslu života a hledání štěstí.
            SPOLEČENSKO-HISTORICKÉ POZADÍ: 2. polovina 20. století, Československo
            </p>
            <p>děj:<br>Sbírka veršů pokračuje na základě osobních prožitků v bilancování citově bohatě naplněného života.
            Autorovy verše, načrtnuty záměrně jednoduchou melodickou linkou, jsou protknuty láskou k ženě i pevným přátelstvím ke generačním umělcům, z nichž téměř všichni došli na konec své životní cesty. Svébytné místo v této sbírce zaujímá Praha v nejrůznějších proměnách. Smutek a nostalgie, které dýchají z většiny básní, však nejsou pocity rezignujícími.</p>
            </body>
            </html>'
        );
    }
}
?>