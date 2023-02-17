<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {
        
    public function odkaz(): Response
    {

        return new Response(
            '<html>
            <head>
            <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
            </style>
            </head>
            <body>
            
            <h1>Ječňákův čtenářák</h1>
            <p><a href="/soulad">Soulad</p>
            
            <table>
              <tr>
                <th>Autor</th>
                <th>Dílo</th>
              </tr>
              <tr>
                <td><a href="/capek">Karel Čapek</a></td>
                <td><a href="/rur">R.U.R.</a></td>
              </tr>
              <tr>
                <td><a href="/bradbury">Ray Bradbury</a></td>
                <td><a href="/stupne">451 stupnu farenheita</a></td>
              </tr>
              <tr>
                <td><a href="/kohout">Pavel Kohout</a></td>
                <td><a href="/audience">Audience</a></td>
              </tr>
              <tr>
                <td><a href="/neruda">Jan Neruda</a></td>
                <td><a href="/romance">Balady a Romance</a></td>
              </tr>
              <tr>
                <td><a href="/michal">Michal Viewegh</a></td>
                <td><a href="/leto">Báječná léta pod psa</a></td>
              </tr>
              <tr>
                <td><a href="/polacek">Karel Poláček</a></td>
                <td><a href="/pet">Bylo nás pět</a></td>
              </tr>
              <tr>
                <td><a href="/jaroslav">Jaroslav Seifert</a></td>
                <td><a href="/basnik">Býti básníkem</a></td>
              </tr>
              <tr>
                <td><a href="/john">John Wyndham</a></td>
                <td><a href="/den">Den trifidů</a></td>
              </tr>
              <tr>
                <td><a href="/agatha">Agatha Christie</a></td>
                <td><a href="/deset">Deset malých černoušků</a></td>
              </tr>
              <tr>
                <td><a href="/orwell">George Orwell</a></td>
                <td><a href="/farma">Farma Zvířat</a></td>
              </tr>
              <tr>
                <td><a href="/villon">Francois Villion</a></td>
                <td><a href="/zavet">Závěť</a></td>
              </tr>
              <tr>
                <td><a href="/shakespeare">William Shakespeare</a></td>
                <td><a href="/hamlet">Hamlet</a></td>
              </tr>
              <tr>
                <td><a href="/karel">Karel Hynek Mácha</a></td>
                <td><a href="/havran">Havran</a></td>
              </tr>
              <tr>
                <td><a href="/kafka">Franz Kafka</a></td>
                <td><a href="/hlava">Hlava XXII</a></td>
              </tr>
            <tr>
              <td><a href="/petr">Petr Šabach</a></td>
              <td><a href="/hovno">Hovno Hoří</a></td>
            </tr>
            <tr>
            <td><a href="/ota">Ota Pavel</a></td>
            <td><a href="/ryby">Jak jsem potkal Ryby</a></td>
          </tr>
          <tr>
            <td><a href="/heller">Joseph Heller</a></td>
            <td><a href="/valka">Jak jsem vyhrál válku</a></td>
          </tr>
          <tr>
            <td><a href="/jan">Jan Amos Komenský</a></td>
            <td><a href="/raj">Labyrint světa a ráje srdce</a></td>
          </tr>
          <tr>
            <td><a href="/umberto">Umberto Eco</a></td>
            <td><a href="/ruze">Jméno Růže</a></td>
          </tr>
          <tr>
            <td><a href="/boule">Pirre Boulle</a></td>
            <td><a href="/krysa">Král Krysa</a></td>
          </tr>
          <tr>
            <td><a href="/dyk">Viktor Dyk</a></td>
            <td><a href="/krysar">Krysař</a></td>
          </tr>
          <tr>
            <td><a href="/charles">Charles Baudelaire</a></td>
            <td><a href="/zlo">Květy Zla</a></td>
          </tr>
          <tr>
            <td><a href="/karel">Karel Hynek Mácha</a></td>
            <td><a href="/kytice">Kytice</a></td>
          </tr>
          <tr>
            <td><a href="/moliere">Moliere</a></td>
            <td><a href="/lakomec">Lakomec</a></td>
          </tr>
          <tr>
            <td><a href="/karel">Karel Hynek Mácha</a></td>
            <td><a href="/maj">Máj</a></td>
          </tr>
          <tr>
            <td><a href="/de">Antoine de Saint-Exupéry</a></td>
            <td><a href="/princ">Malý Princ</a></td>
          </tr>
          <tr>
            <td><a href="/jin">Ha Jin</a></td>
            <td><a href="/kwai">Most přes řeku Kwai</a></td>
          </tr>
          <tr>
          <td><a href="/jan">Jan Amos Komenský</a></td>
          <td><a href="/raj">Labyrint světa a ráje srdce</a></td>
        </tr>
        <tr>
          <td><a href="/umberto">Umberto Eco</a></td>
          <td><a href="/ruze">Jméno Růže</a></td>
        </tr>
        <tr>
          <td><a href="/boule">Pirre Boulle</a></td>
          <td><a href="/krysa">Král Krysa</a></td>
        </tr>
        <tr>
          <td><a href="/dyk">Viktor Dyk</a></td>
          <td><a href="/krysar">Krysař</a></td>
        </tr>
        <tr>
          <td><a href="/hrubin">Frantisek Hrubin</a></td>
          <td><a href="/modlitba">Modlitba</a></td>
        </tr>
        <tr>
          <td><a href="/maria">Remarque</a></td>
          <td><a href="/klid">Na Západní frontě klid</a></td>
        </tr>
        <tr>
          <td><a href="/ivan">Ivan Olbracht</a></td>
          <td><a href="/suhaj">Nikola Suhaj Loupeznik</a></td>
        </tr>
        <tr>
          <td><a href="/hrabal">Bohumil Hrabal</a></td>
          <td><a href="/kral">Krále</a></td>
        </tr>
        <tr>
          <td><a href="/dickens">Charles Dickens</a></td>
          <td><a href="/twist">Oliwer Twist</a></td>
        </tr>
        <tr>
          <td><a href="/hasek">Jaroslav Hašek</a></td>
          <td><a href="/svejk">Osudy dobrého vojáka Švejka za světové války</a></td>
        </tr>
            </table>
            
            </body>
            </html>'
        );
    }
}
?>