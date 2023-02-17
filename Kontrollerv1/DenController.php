<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DenController extends AbstractController {
        
    public function den(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Den Trifidů</title>
            </head>
            <body>
            
            
            <p>Literární druh a žánr: sci-fi novela
            Literární směr: science fiction
            Slovní zásoba a jazyk: běžný jazyk s technickými a vědeckými termíny
            Hlavní postavy: Bill Masen, Josella Playton, kapitán Perkins, a další
            Kompozice: chronologická, vyprávění z více pohledů
            Prostor a čas: Anglie, v blízké budoucnosti
            Význam sdělení (hlavní myšlenky díla): Zkoumá vliv vědy a technologie na společnost a otázku kontroly nad přírodou.
            SPOLEČENSKO-HISTORICKÉ POZADÍ: 1950s, post-apokalyptická Anglie
            
            </p>
            <p>děj:<br>Kultovní sci-fi o zkáze lidstva a boji přeživších jedinců proti zvláštním, agresivním rostlinám. Jeden z nejlepších vědecko-fantastických románů... .
            Když vyšel poprvé v roce 1951 Den trifidů od Johna Wyndhama, měl autor knihy za sebou už řadu románů a povídek. S nimiž však literárně příliš neuspěl. I Den trifidů vycházel původně jen časopisecky na pokračování. Velký zájem čtenářů si však vynutil rychle za sebou hned několikeré knižní vydání a způsobil, že se Wyndham věnoval pak již nastálo vědeckofantastickému žánru.
            Román o tom, jak neznámý roj meteoritů způsobí u většiny pozemšťanů slepotu a jak toho využijí průmyslové rostliny "trifidi", které náhle vyvinou zcela nečekané vlastnosti a zaútočí na lidi, má v sobě dostatek prvků neobvyklosti, aby čtenáře přitahoval. Zároveň mu však nechybí onen welsovský obecný pohled na život a jeho reálné jádro, které z fantastického příběhu činí podobenství o skutečném ohrožení přírody člověkem a člověka přírodou.
            </p>
            </body>
            </html>'
        );
    }
}
?>