<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AudienceController extends AbstractController {
        
    public function audience(): Response
    {

        return new Response(
            '
			<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Audience</title>
            </head>
            <body>
            
            
            <p>Autor: Pavel Kohout <br>

            Literární druh a žánr: Drama<br>
            
            Literární směr: Česká moderna<br>
            
            Slovní zásoba a jazyk: Autor používá běžný jazyk s prvky složité syntaktické stavby.<br>
            
            Hlavní postavy: V díle se objevují různé postavy, z nichž některé hrají významnější roli, jiné jsou více epizodní.<br>
            
            Kompozice: Dílo je rozděleno do jednotlivých scén, ve kterých se odehrávají jednotlivé dějové linie.<br>
            
            Prostor a čas: Přesný čas a místo děje není v díle určeno.<br>
            
            Význam sdělení (hlavní myšlenky díla): Dílo se zabývá tématem identity a otázkou, kdo jsme a jakým způsobem se naše identity utváří.<br>
            
            Společensko-historické pozadí: Dílo vychází z období normalizace v Československu, kdy byla cenzura silně kontrolována a kdy byly některé názory a myšlenky potlačovány.<br>
            
            </p>
            <p>děj:<br>"Audience" je kniha od Dona DeLilla, která se zaměřuje na život hlavního hrdiny, televizního producenta. Kniha následuje jeho životní pouť, kdy se snaží najít smysl v materiálním světě, který se otáčí kolem slávy a peněz. Hrdina se snaží najít štěstí a duševní klid, ale čelí řadě komplikací, jako jsou vztahy, práce a krize středního věku. "Audience" je ironickým a kritickým pohledem na společnost a hledání štěstí v současném světě.</p>

            </body>
            </html>'
        );
    }
}
?>