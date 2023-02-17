<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DesetController extends AbstractController {
        
    public function deset(): Response
    {

        return new Response(
            '<!DOCTYPE html>
			<html lang="cs">
            <head>
			<title>Deset malých černoušků</title>
            </head>
            <body>
            
            
            <p>Literární druh a žánr: Kriminalistický/detektivní román
            Literární směr: Krimi
            Slovní zásoba a jazyk: Obecný jazyk, prostá slovní zásoba
            Hlavní postavy: Hosté a personál na odlehlém ostrově
            Kompozice: Děj se odehrává na ostrově, kde se nacházejí deset lidí, kteří se postupně začnou ztrácet.
            Prostor a čas: Ostrov, 20. století
            Význam sdělení (hlavní myšlenky díla): Autorka chtěla ukázat, že i v případě, kdy se člověk nachází v odlehlém prostředí, může dojít ke krádeži a vraždě.
            SPOLEČENSKO-HISTORICKÉ POZADÍ: 20. století, vývoj kriminalistických a detektivních románů
            </p>
            <p>děj:<br>Agatha Christie, "první dáma detektivky", nade vše milovala nejen spletité šarády, ale i nejrůznější dětské hříčky, básničky či lidové písničky. Kdo by neznal třeba Pět malých prasátek anebo právě Deset malých černoušků? V neúprosném rytmu známého popěvku tu černoušků ubývá stejně jako hostů v luxusním sídle na ostrově, bouří odříznutém od světa. Jakási ďábelská síla žene podle předem připraveného plánu jednoho po druhém do záhuby, až nezbude žádný. Kam však zmizel vrah? Napínavá detektivka, která se dočkala několika filmových zpracování a hrála se na desítkách světových jevišť, patří bezesporu k tomu nejznámějšímu, co velká anglická autorka napsala.
            Deset malých černoušků je detektivní román od Agathy Christie. Tento román patří mezi nejslavnější ze svého žánru, hrál se na desítkách světových jevišť a dosud se dočkal čtyř filmových verzí.
            Poprvé byl román publikován ve Velké Británii v roce 1939 pod titulem Ten Little Niggers. V USA byl následně (1940) vydán pod názvem And Then There Were None, některá vydání a filmy byly uvedeny pod titulem Ten Little Indians.
            Filmová zpracování: V roce 1945 vznikl film Ten Little Indians, jeho remake se stejným názvem pochází z roku 1965, třetí verze je z roku 1989. Ruská verze Десять негритят (Děsjať Něgriťat) je z roku 1987.
            V České republice vyšla kniha naposledy v roce 2005 v Knižním klubu (třetí vydání). Přeložil J. Z. Novák. ISBN: 80-242-1449-0, EAN: 9788024214498
            Vznikla také nahrávka Deset malých černoušků (2007 v režii Dmitrije Dudíka). Z překladu J. Z. Nováka čte Vladimír Čech. Nahrávka má 19 částí, celkový čas 8 hod. 15 min.</p>
            </body>
            </html>'
        );
    }
}
?>