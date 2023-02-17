<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SouladController extends AbstractController {
        
    public function soulad(): Response
    {

        return new Response(
            '<html>
            <head>
            </head>
            <body>
            Ječňákův Čtenářák se zavazuje k zpřístupnění své webové stránky jecnakcetba.chytrak.cz v souladu s vnitrostátními právními předpisy, které provádějí směrnici Evropského parlamentu a Rady (EU)
2016/2102 (1). 

Toto prohlášení o přístupnosti se vztahuje na jecnakcetba.chytrak.cz

jecnakcetba.chytrak.cz není v souladu. Tyto prvky
nesouladu jsou uvedeny níže. 


Vytvořte webové stránky, které jsou přizpůsobitelné pro zobrazení různým způsobem (např. zjednodušený vzhled, mobilní telefon, hlasová čtečka apod.) Pravidlo 1.3 WCAG splní obsah, který lze prezentovat více způsoby a nedojde přitom ke ztrátě informací nebo narušení struktury.
Usnadněte uživatelům vidět obsah, který je důležitý. Pravidlo 1.4 WCAG říká, že popředí musí být rozlišitelné od pozadí.
Zajistěte, aby všechny funkce byly dostupné z klávesnice.
Usnadněte uživatelům navigaci, vyhledávání konkrétního obsahu a určování aktuální pozice. Pravidla snadné navigace jsou výhodná pro všechny uživatele.
Snažte se o maximální kompatibilitu se současnými i budoucími přístupovými zařízeními včetně asistivních technologií.

V maximální míře dodržujte současné standardy. Pokud v budoucnu budete chtít použít inovativní technologii zobrazení stránek, tak zároveň poskytněte stejný obsah i ve zpětně kompatibilní formě.


Toto prohlášení bylo vypracováno dne 17.02.2023
            </body>
            </html>'
        );
    }
}
?>