<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contact;
use App\Entity\Club;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MaillotRepository;
use App\Entity\Maillot;


class FootController extends AbstractController
{
#[Route('/ligue1', name: 'app_ligue1')]
    public function ligue1(): Response
    {
        return $this->render('base/foot/ligue1/ligue1.html.twig', [
            
        ]);
    }

    #[Route('/unclub/{id}', name: 'app_unclub')]
    public function unclub(Club $club): Response
    {
        
        return $this->render('base/unclub.html.twig', [
            'club' => $club
        ]);
    }

    #[Route('/monaco', name: 'app_monaco')]
    public function monaco(): Response
    {
        return $this->render('base/foot/Ligue 1/monaco.html.twig', [
            
        ]);
    }

    #[Route('/marseille', name: 'app_marseille')]
    public function marseille(): Response
    {
        return $this->render('base/foot/Ligue 1/marseille.html.twig', [
            
        ]);
    }

    #[Route('/lille', name: 'app_lille')]
    public function lille(): Response
    {
        return $this->render('base/foot/Ligue 1/lille.html.twig', [
            
        ]);
    }

    #[Route('/nice', name: 'app_nice')]
    public function nice(): Response
    {
        return $this->render('base/foot/Ligue 1/nice.html.twig',[

        ]);
    }

    #[Route('/lens', name: 'app_lens')]
    public function lens(): Response
    {
        return $this->render('base/foot/Ligue 1/lens.html.twig',[

        ]);
    }

    #[Route('/rennes', name: 'app_rennes')]
    public function rennes(): Response
    {
        return $this->render('base/foot/Ligue 1/rennes.html.twig',[

        ]);
    }

    #[Route('/brest', name: 'app_brest')]
    public function brest(): Response
    {
        return $this->render('base/foot/Ligue 1/brest.html.twig',[

        ]);
    }

    #[Route('/nantes', name: 'app_nantes')]
    public function nantes(): Response
    {
        return $this->render('base/foot/Ligue 1/nantes.html.twig',[

        ]);
    }

    #[Route('/reims', name: 'app_reims')]
    public function reims(): Response
    {
        return $this->render('base/foot/Ligue 1/reims.html.twig',[

        ]);
    }

    #[Route('/toulouse', name: 'app_toulouse')]
    public function toulouse(): Response
    {
        return $this->render('base/foot/Ligue 1/toulouse.html.twig',[

        ]);
    }

    #[Route('/lyon', name: 'app_lyon')]
    public function lyon(): Response
    {
        return $this->render('base/foot/Ligue 1/lyon.html.twig',[

        ]);
    }

    #[Route('/strasbourg', name: 'app_strasbourg')]
    public function strasbourg(): Response
    {
        return $this->render('base/foot/Ligue 1/strasbourg.html.twig',[

        ]);
    }

    #[Route('/lorient', name: 'app_lorient')]
    public function lorient(): Response
    {
        return $this->render('base/foot/ligue 1/lorient.html.twig',[

        ]);
    }

    #[Route('/lehavre', name: 'app_lehavre')]
    public function lehavre(): Response
    {
        return $this->render('base/foot/Ligue 1/lehavre.html.twig',[

        ]);
    }

    #[Route('/metz', name: 'app_metz')]
    public function metz(): Response
    {
        return $this->render('base/foot/Ligue 1/metz.html.twig',[

        ]);
    }

    #[Route('/clermont', name: 'app_clermont')]
    public function clermont(): Response
    {
        return $this->render('base/foot/Ligue 1/clermont.html.twig',[

        ]);
    }

    #[Route('/montpelier', name: 'app_montpelier')]
    public function montpelier(): Response
    {
        return $this->render('base/foot/Ligue 1/montpelier.html.twig',[

        ]);
    }

    #[Route('/premierleague', name: 'app_premierleague')]
    public function premierleague(): Response
    {
        return $this->render('base/foot/Premier League/premierleague.html.twig', [
            
        ]);
    }

    #[Route('/mancity', name: 'app_mancity')]
    public function mancity(): Response
    {
        return $this->render('base/foot/Premier League/mancity.html.twig', [
            
        ]);
    }

    #[Route('/manunited', name: 'app_manunited')]
    public function manunited(): Response
    {
        return $this->render('base/foot/Premier League/manunited.html.twig', [
            
        ]);
    }

    #[Route('/liverpool', name: 'app_liverpool')]
    public function liverpool(): Response
    {
        return $this->render('base/foot/Premier League/liverpool.html.twig', [
            
        ]);
    }

    #[Route('/tottenham', name: 'app_tottenham')]
    public function tottenham(): Response
    {
        return $this->render('base/foot/Premier League/tottenham.html.twig', [
            
        ]);
    }

    #[Route('/astonvilla', name: 'app_astonvilla')]
    public function astonvilla(): Response
    {
        return $this->render('base/foot/Premier League/astonvilla.html.twig', [
            
        ]);
    }

    #[Route('/arsenal', name: 'app_arsenal')]
    public function arsenal(): Response
    {
        return $this->render('base/foot/Premier League/arsenal.html.twig', [
            
        ]);
    }

    #[Route('/brighton', name: 'app_brighton')]
    public function brighton(): Response
    {
        return $this->render('base/foot/Premier League/brighton.html.twig', [
            
        ]);
    }

    #[Route('/westham', name: 'app_westham')]
    public function westham(): Response
    {
        return $this->render('base/foot/Premier League/westham.html.twig', [
            
        ]);
    }

    #[Route('/wolverhampton', name: 'app_wolverhampton')]
    public function wolverhampton(): Response
    {
        return $this->render('base/foot/Premier League/wolverhampton.html.twig', [
            
        ]);
    }

    #[Route('/newcastle', name: 'app_newcastle')]
    public function newcastle(): Response
    {
        return $this->render('base/foot/Premier League/newcastle.html.twig', [
            
        ]);
    }

    #[Route('/chelsea', name: 'app_chelsea')]
    public function chelsea(): Response
    {
        return $this->render('base/foot/Premier League/chelsea.html.twig', [
            
        ]);
    }

    #[Route('/fulham', name: 'app_fulham')]
    public function fulham(): Response
    {
        return $this->render('base/foot/Premier League/fulham.html.twig', [
            
        ]);
    }

    #[Route('/crystalpalace', name: 'app_crystalpalace')]
    public function crystalpalace(): Response
    {
        return $this->render('base/foot/Premier League/crystalpalace.html.twig', [
            
        ]);
    }

    #[Route('/bournemouth', name: 'app_bournemouth')]
    public function bournemouth(): Response
    {
        return $this->render('base/foot/Premier League/bournemouth.html.twig', [
            
        ]);
    }

    #[Route('/brentford', name: 'app_brentford')]
    public function brentford(): Response
    {
        return $this->render('base/foot/Premier League/brentford.html.twig', [
            
        ]);
    }

    #[Route('/everton', name: 'app_everton')]
    public function everton(): Response
    {
        return $this->render('base/foot/Premier League/everton.html.twig', [
            
        ]);
    }

    #[Route('/lutontown', name: 'app_lutontown')]
    public function lutontown(): Response
    {
        return $this->render('base/foot/Premier League/lutontown.html.twig', [
            
        ]);
    }

    #[Route('/nottinghamforest', name: 'app_nottinghamforest')]
    public function nottinghamforest(): Response
    {
        return $this->render('base/foot/Premier League/nottinghamforest.html.twig', [
            
        ]);
    }

    #[Route('/leeds', name: 'app_leeds')]
    public function leeds(): Response
    {
        return $this->render('base/foot/Premier League/leeds.html.twig', [
            
        ]);
    }

    #[Route('/sheffield', name: 'app_sheffield')]
    public function sheffield(): Response
    {
        return $this->render('base/foot/Premier League/sheffield.html.twig', [
            
        ]);
    }

    #[Route('/burnley', name: 'app_burnley')]
    public function burnley(): Response
    {
        return $this->render('base/foot/Premier League/burnley.html.twig', [
            
        ]);
    }

    #[Route('/liga', name: 'app_liga')]
    public function liga(): Response
    {
        return $this->render('base/foot/Liga/liga.html.twig', [
            
        ]);
    }

    #[Route('/realmadrid', name: 'app_realmadrid')]
    public function realmadrid(): Response
    {
        return $this->render('base/foot/Liga/realmadrid.html.twig', [
            
        ]);
    }

    #[Route('/barcelone', name: 'app_barcelone')]
    public function barcelone(): Response
    {
        return $this->render('base/foot/Liga/barcelone.html.twig', [
            
        ]);
    }

    #[Route('/girona', name: 'app_girona')]
    public function girona(): Response
    {
        return $this->render('base/foot/Liga/girona.html.twig', [
            
        ]);
    }

    #[Route('/realsociedad', name: 'app_realsociedad')]
    public function realsociedad(): Response
    {
        return $this->render('base/foot/Liga/realsociedad.html.twig', [
            
        ]);
    }

    #[Route('/atleticomadrid', name: 'app_atleticomadrid')]
    public function atleticomadrid(): Response
    {
        return $this->render('base/foot/Liga/atleticomadrid.html.twig', [
            
        ]);
    }

    #[Route('/athleticbilbao', name: 'app_athelicbilbao')]
    public function athleticbilbao(): Response
    {
        return $this->render('base/foot/Liga/athleticbilbao.html.twig', [
            
        ]);
    }

    #[Route('/laspalmas', name: 'app_laspalmas')]
    public function laspalmas(): Response
    {
        return $this->render('base/foot/Liga/laspalmas.html.twig', [
            
        ]);
    }

    #[Route('/valence', name: 'app_valence')]
    public function valence(): Response
    {
        return $this->render('base/foot/Liga/valence.html.twig', [
            
        ]);
    }

    #[Route('/realbetis', name: 'app_realbetis')]
    public function realbetis(): Response
    {
        return $this->render('base/foot/Liga/realbetis.html.twig', [
            
        ]);
    }

    #[Route('/getafe', name: 'app_getafe')]
    public function getafe(): Response
    {
        return $this->render('base/foot/Liga/getafe.html.twig', [
            
        ]);
    }

    #[Route('/osasuna', name: 'app_osasuna')]
    public function osasuna(): Response
    {
        return $this->render('base/foot/Liga/osasuna.html.twig', [
            
        ]);
    }

    #[Route('/villareal', name: 'app_villareal')]
    public function villareal(): Response
    {
        return $this->render('base/foot/Liga/villareal.html.twig', [
            
        ]);
    }

    #[Route('/deportivoalaves', name: 'app_deportivoalaves')]
    public function deportivoalaves(): Response
    {
        return $this->render('base/foot/Liga/deportivoalaves.html.twig', [
            
        ]);
    }

    #[Route('/seville', name: 'app_seville')]
    public function seville(): Response
    {
        return $this->render('base/foot/Liga/seville.html.twig', [
            
        ]);
    }

    #[Route('/majorque', name: 'app_majorque')]
    public function majorque(): Response
    {
        return $this->render('base/foot/Liga/majorque.html.twig', [
            
        ]);
    }

    #[Route('/cadix', name: 'app_cadix')]
    public function cadix(): Response
    {
        return $this->render('base/foot/Liga/cadix.html.twig', [
            
        ]);
    }

    #[Route('/rayovallecano', name: 'app_rayovallecano')]
    public function rayovallecano(): Response
    {
        return $this->render('base/foot/Liga/rayovallecano.html.twig', [
            
        ]);
    }

    #[Route('/celtavigo', name: 'app_celtavigo')]
    public function celtavigo(): Response
    {
        return $this->render('base/foot/Liga/celtavigo.html.twig', [
            
        ]);
    }

    #[Route('/elche', name: 'app_elche')]
    public function elche(): Response
    {
        return $this->render('base/foot/Liga/elche.html.twig', [
            
        ]);
    }

    #[Route('/almeria', name: 'app_almeria')]
    public function almeria(): Response
    {
        return $this->render('base/foot/Liga/almeria.html.twig', [
            
        ]);
    }

    #[Route('/grenada', name: 'app_grenada')]
    public function grenada(): Response
    {
        return $this->render('base/foot/Liga/grenada.html.twig', [
            
        ]);
    }

    #[Route('/bundesligua', name: 'app_bundesligua')]
    public function bundesligua(): Response
    {
        return $this->render('base/foot/Bundesliga/bundesliga.html.twig', [
            
        ]);
    }

    #[Route('/leverkusen', name: 'app_leverkusen')]
    public function leverkusen(): Response
    {
        return $this->render('base/foot/Bundesliga/leverkusen.html.twig', [
            
        ]);
    }

    #[Route('/bayernmunich', name: 'app_bayernmunich')]
    public function bayernmunich(): Response
    {
        return $this->render('base/foot/Bundesliga/bayernmunich.html.twig', [
            
        ]);
    }

    #[Route('/stuttgart', name: 'app_stuttgart')]
    public function stuttgart(): Response
    {
        return $this->render('base/foot/Bundesliga/stuttgart.html.twig', [
            
        ]);
    }

    #[Route('/dortmund', name: 'app_dortmund')]
    public function dortmund(): Response
    {
        return $this->render('base/foot/Bundesliga/dortmund.html.twig', [
            
        ]);
    }
    
    #[Route('/rbleipzig', name: 'app_rbleipzig')]
    public function rbleipzig(): Response
    {
        return $this->render('base/foot/Bundesliga/rbleipzig.html.twig', [
            
        ]);
    }

    #[Route('/francfort', name: 'app_francfort')]
    public function francfort(): Response
    {
        return $this->render('base/foot/Bundesliga/francfort.html.twig', [
            
        ]);
    }

    #[Route('/fribourg', name: 'app_fribourg')]
    public function fribourg(): Response
    {
        return $this->render('base/foot/Bundesliga/fribourg.html.twig', [
            
        ]);
    }

    #[Route('/augsbourg', name: 'app_augsbourg')]
    public function augsbourg(): Response
    {
        return $this->render('base/foot/Bundesliga/augsbourg.html.twig', [
            
        ]);
    }

    #[Route('/hoffenheim', name: 'app_hoffenheim')]
    public function hoffenheim(): Response
    {
        return $this->render('base/foot/Bundesliga/hoffenheim.html.twig', [
            
        ]);
    }

    #[Route('/werderbreme', name: 'app_werderbreme')]
    public function werderbreme(): Response
    {
        return $this->render('base/foot/Bundesliga/werderbreme.html.twig', [
            
        ]);
    }

    #[Route('/heidenheim', name: 'app_heidenheim')]
    public function heidenheim(): Response
    {
        return $this->render('base/foot/Bundesliga/heidenheim.html.twig', [
            
        ]);
    }

    #[Route('/mönchengladbach', name: 'app_mönchengladbach')]
    public function mönchengladbach(): Response
    {
        return $this->render('base/foot/Bundesliga/mönchengladbach.html.twig', [
            
        ]);
    }

    #[Route('/bochum', name: 'app_bochum')]
    public function bochum(): Response
    {
        return $this->render('base/foot/Bundesliga/bochum.html.twig', [
            
        ]);
    }

    #[Route('/wolfsbourg', name: 'app_wolfsbourg')]
    public function wolfsbourg(): Response
    {
        return $this->render('base/foot/Bundesliga/wolfsbourg.html.twig', [
            
        ]);
    }

    #[Route('/unionberlin', name: 'app_unionberlin')]
    public function unionberlin(): Response
    {
        return $this->render('base/foot/Bundesliga/unionberlin.html.twig', [
            
        ]);
    }

    #[Route('/mainz05', name: 'app_mainz05')]
    public function mainz05(): Response
    {
        return $this->render('base/foot/Bundesliga/mainz05.html.twig', [
            
        ]);
    }

    #[Route('/cologne', name: 'app_cologne')]
    public function cologne(): Response
    {
        return $this->render('base/foot/Bundesliga/cologne.html.twig', [
            
        ]);
    }

    #[Route('/dramstatd', name: 'app_dramstatd')]
    public function dramstatd(): Response
    {
        return $this->render('base/foot/Bundesliga/dramstatd.html.twig', [
            
        ]);
    }

    #[Route('/laseria', name: 'app_laseria')]
    public function laseria(): Response
    {
        return $this->render('base/foot/Serie A/laseria.html.twig', [
            
        ]);
    }

    #[Route('/juventus', name: 'app_juventus')]
    public function juventus(): Response
    {
        return $this->render('base/foot/Serie A/juventus.html.twig', [
            
        ]);
    }

    #[Route('/acmilan', name: 'app_acmilan')]
    public function acmilan(): Response
    {
        return $this->render('base/foot/Serie A/acmilan.html.twig', [
            
        ]);
    }

    #[Route('/inter', name: 'app_inter')]
    public function inter(): Response
    {
        return $this->render('base/foot/Serie A/inter.html.twig', [
            
        ]);
    }

    #[Route('/asroma', name: 'app_roma')]
    public function asroma(): Response
    {
        return $this->render('base/foot/Serie A/asroma.html.twig', [
            
        ]);
    }

    #[Route('/bologne', name: 'app_bologne')]
    public function bologne(): Response
    {
        return $this->render('base/foot/Serie A/bologne.html.twig', [
            
        ]);
    }

    #[Route('/atalanta', name: 'app_atalanta')]
    public function atalanta(): Response
    {
        return $this->render('base/foot/Serie A/atalanta.html.twig', [
            
        ]);
    }

    #[Route('/naples', name: 'app_naples')]
    public function naples(): Response
    {
        return $this->render('base/foot/Serie A/naples.html.twig', [
            
        ]);
    }

    #[Route('/lazio', name: 'app_lazio')]
    public function lazio(): Response
    {
        return $this->render('base/foot/Serie A/lazio.html.twig', [
            
        ]);
    }

    #[Route('/fiorentina', name: 'app_fiorentina')]
    public function fiorentina(): Response
    {
        return $this->render('base/foot/Serie A/fiorentina.html.twig', [
            
        ]);
    }

    #[Route('/monza', name: 'app_monza')]
    public function monza(): Response
    {
        return $this->render('base/foot/Serie A/monza.html.twig', [
            
        ]);
    }

    #[Route('/torino', name: 'app_torino')]
    public function torino(): Response
    {
        return $this->render('base/foot/Serie A/torino.html.twig', [
            
        ]);
    }

    #[Route('/genoa', name: 'app_genoa')]
    public function genoa(): Response
    {
        return $this->render('base/foot/Serie A/genoa.html.twig', [
            
        ]);
    }

    #[Route('/udinese', name: 'app_udinese')]
    public function udinese(): Response
    {
        return $this->render('base/foot/Serie A/udinese.html.twig', [
            
        ]);
    }

    #[Route('/lecce', name: 'app_lecce')]
    public function lecce(): Response
    {
        return $this->render('base/foot/Serie A/lecce.html.twig', [
            
        ]);
    }

    #[Route('/hellasverone', name: 'app_hellasverone')]
    public function hellasverone(): Response
    {
        return $this->render('base/foot/Serie A/hellasverone.html.twig', [
            
        ]);
    }

    #[Route('/cagliari', name: 'app_cagliari')]
    public function cagliari(): Response
    {
        return $this->render('base/foot/Serie A/cagliari.html.twig', [
            
        ]);
    }

    #[Route('/empoli', name: 'app_empoli')]
    public function empoli(): Response
    {
        return $this->render('base/foot/Serie A/empoli.html.twig', [
            
        ]);
    }

    #[Route('/frosinone', name: 'app_frosinone')]
    public function frosinone(): Response
    {
        return $this->render('base/foot/Serie A/frosinone.html.twig', [
            
        ]);
    }

    #[Route('/parme', name: 'app_parme')]
    public function parme(): Response
    {
        return $this->render('base/foot/Serie A/parme.html.twig', [
            
        ]);
    }

    #[Route('/sassuolo', name: 'app_sassuolo')]
    public function sasuolo(): Response
    {
        return $this->render('base/foot/Serie A/sassuolo.html.twig', [
            
        ]);
    }

    #[Route('/salernitana', name: 'app_salernitana')]
    public function salernitana(): Response
    {
        return $this->render('base/foot/Serie A/salernitana.html.twig', [
            
        ]);
    }

    #[Route('/clubsdumonde', name: 'app_clubsdumonde')]
    public function autresligues(): Response
    {
        return $this->render('base/foot/Clubs du monde/clubsdumonde.html.twig', [

        ]);
    }

    #[Route('/alnassr', name: 'app_alnassr')]
    public function alnassr(): Response
    {
        return $this->render('base/foot/Clubs du monde/alnassr.html.twig', [

        ]);
    }

    #[Route('/alhilal', name: 'app_alhilal')]
    public function alhilal(): Response
    {
        return $this->render('base/foot/Clubs du monde/alhilal.html.twig', [

        ]);
    }

    #[Route('/alittihad', name: 'app_alittihad')]
    public function alittihad(): Response
    {
        return $this->render('base/foot/Clubs du monde/alittihad.html.twig', [

        ]);
    }

    #[Route('/intermiami', name: 'app_intermiami')]
    public function intermiami(): Response
    {
        return $this->render('base/foot/Clubs du monde/intermiami.html.twig', [

        ]);
    }

    #[Route('/celtic', name: 'app_celtic')]
    public function celtic(): Response
    {
        return $this->render('base/foot/Clubs du monde/celtic.html.twig', [

        ]);
    }

    #[Route('/rangers', name: 'app_rangers')]
    public function rangers(): Response
    {
        return $this->render('base/foot/Clubs du monde/rangers.html.twig', [

        ]);
    }

    #[Route('/flamengo', name: 'app_flamengo')]
    public function flamengo(): Response
    {
        return $this->render('base/foot/Clubs du monde/flamengo.html.twig', [

        ]);
    }

    #[Route('/fluminense', name: 'app_fluminense')]
    public function fluminense(): Response
    {
        return $this->render('base/foot/Clubs du monde/fluminense.html.twig', [

        ]);
    }

    #[Route('/botafogo', name: 'app_botafogo')]
    public function botafogo(): Response
    {
        return $this->render('base/foot/Clubs du monde/botafogo.html.twig', [

        ]);
    }


    #[Route('/nations', name: 'app_nations')]
    public function nations(): Response
    {
        return $this->render('base/foot/Nations/nations.html.twig', [

        ]);
    }


    #[Route('/europe', name: 'app_europe')]
    public function europe(): Response
    {
        return $this->render('base/foot/Nations/europe/europe.html.twig', [

        ]);
    }

    #[Route('/ecosse', name: 'app_ecosse')]
    public function ecosse(): Response
    {
        return $this->render('base/foot/Nations/europe/ecosse.html.twig', [

        ]);
    }

    #[Route('/paysdegalles', name: 'app_paysdegalles')]
    public function paysdegalles(): Response
    {
        return $this->render('base/foot/Nations/europe/paysdegalles.html.twig', [

        ]);
    }

    #[Route('/angleterre', name: 'app_angleterre')]
    public function anglettere(): Response
    {
        return $this->render('base/foot/Nations/europe/angleterre.html.twig', [

        ]);
    }

    #[Route('/france', name: 'app_france')]
    public function france(): Response
    {
        return $this->render('base/foot/Nations/europe/france.html.twig', [

        ]);
    }

    #[Route('/espagne', name: 'app_espagne')]
    public function espagne(): Response
    {
        return $this->render('base/foot/Nations/europe/espagne.html.twig', [

        ]);
    }


    #[Route('/portugal', name: 'app_portugal')]
    public function portugal(): Response
    {
        return $this->render('base/foot/natNationsions/europe/portugal.html.twig', [

        ]);
    }

    #[Route('/allemagne', name: 'app_allemagne')]
    public function allemagne(): Response
    {
        return $this->render('base/foot/Nations/europe/allemagne.html.twig', [

        ]);
    }

    #[Route('/italie', name: 'app_italie')]
    public function italie(): Response
    {
        return $this->render('base/foot/Nations/europe/italie.html.twig', [

        ]);
    }

    #[Route('/belgique', name: 'app_belgique')]
    public function belgique(): Response
    {
        return $this->render('base/foot/Nations/europe/belgique.html.twig', [

        ]);
    }

    #[Route('/finlande', name: 'app_finlande')]
    public function finlande(): Response
    {
        return $this->render('base/foot/Nations/europe/finlande.html.twig', [

        ]);
    }

    #[Route('/suede', name: 'app_suede')]
    public function suede(): Response
    {
        return $this->render('base/foot/Nations/europe/suede.html.twig', [

        ]);
    }

    #[Route('/norvege', name: 'app_norvege')]
    public function norvege(): Response
    {
        return $this->render('base/foot/Nations/europe/norvege.html.twig', [

        ]);
    }

    #[Route('/pologne', name: 'app_pologne')]
    public function pologne(): Response
    {
        return $this->render('base/foot/Nations/europe/pologne.html.twig', [

        ]);
    }

    #[Route('/danemark', name: 'app_danemark')]
    public function danemark(): Response
    {
        return $this->render('base/foot/Nations/europe/danemark.html.twig', [

        ]);
    }

    #[Route('/autriche', name: 'app_autriche')]
    public function autriche(): Response
    {
        return $this->render('base/foot/Nations/europe/autriche.html.twig', [

        ]);
    }

    #[Route('/ameriquedunord', name: 'app_ameriquedunord')]
    public function ameriquedunord(): Response
    {
        return $this->render('base/foot/Nations/ameriquedunord/ameriquedunord.html.twig', [

        ]);
    }

    #[Route('/usa', name: 'app_usa')]
    public function usa(): Response
    {
        return $this->render('base/foot/Nations/ameriquedunord/usa.html.twig', [

        ]);
    }

    #[Route('/mexique', name: 'app_mexique')]
    public function mexique(): Response
    {
        return $this->render('base/foot/Nations/ameriquedunord/mexique.html.twig', [

        ]);
    }

    #[Route('/canada', name: 'app_canada')]
    public function canada(): Response
    {
        return $this->render('base/foot/Nations/ameriquedunord/canada.html.twig', [

        ]);
    }

    #[Route('/costarica', name: 'app_costarica')]
    public function costarica(): Response
    {
        return $this->render('base/foot/Nations/ameriquedunord/costarica.html.twig', [

        ]);
    }

    #[Route('/cuba', name: 'app_cuba')]
    public function cuba(): Response
    {
        return $this->render('base/foot/Nations/ameriquedunord/cuba.html.twig', [

        ]);
    }

    #[Route('/jamaique', name: 'app_jamaique')]
    public function jamaique(): Response
    {
        return $this->render('base/foot/Nations/ameriquedunord/jamaique.html.twig', [

        ]);
    }

    #[Route('/ameriquedusud', name: 'app_ameriquedusud')]
    public function ameriquedusud(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/ameriquedusud.html.twig', [

        ]);
    }

    #[Route('/bresil', name: 'app_bresil')]
    public function bresil(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/bresil.html.twig', [

        ]);
    }

    #[Route('/argentine', name: 'app_argentine')]
    public function argentine(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/argentine.html.twig', [

        ]);
    }

    #[Route('/uruguay', name: 'app_uruguay')]
    public function uruguay(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/uruguay.html.twig', [

        ]);
    }

    #[Route('/chili', name: 'app_chili')]
    public function chili(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/chili.html.twig', [

        ]);
    }

    #[Route('/colombie', name: 'app_colombie')]
    public function colombie(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/colombie.html.twig', [

        ]);
    }

    #[Route('/perou', name: 'app_perou')]
    public function perou(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/perou.html.twig', [

        ]);
    }

    #[Route('/equateur', name: 'app_equateur')]
    public function equateur(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/equateur.html.twig', [

        ]);
    }

    #[Route('/bolivie', name: 'app_bolivie')]
    public function bolivie(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/bolivie.html.twig', [

        ]);
    }

    #[Route('/venezuela', name: 'app_venezuela')]
    public function venezuela(): Response
    {
        return $this->render('base/foot/Nations/ameriquedusud/venezuela.html.twig', [

        ]);
    }



    #[Route('/asie', name: 'app_asie')]
    public function asie(): Response
    {
        return $this->render('base/foot/Nations/asie/asie.html.twig', [

        ]);
    }

    #[Route('/japon', name: 'app_japon')]
    public function japon(): Response
    {
        return $this->render('base/foot/Nations/asie/japon.html.twig', [

        ]);
    }

    #[Route('/chine', name: 'app_chine')]
    public function chine(): Response
    {
        return $this->render('base/foot/Nations/asie/chine.html.twig', [

        ]);
    }

    #[Route('/coreedusud', name: 'app_coreedusud')]
    public function coreedusud(): Response
    {
        return $this->render('base/foot/Nations/asie/coreedusud.html.twig', [

        ]);
    }

    #[Route('/afrique', name: 'app_afrique')]
    public function afrique(): Response
    {
        return $this->render('base/foot/Nations/afrique/afrique.html.twig', [

        ]);
    }

    #[Route('/algerie', name: 'app_algerie')]
    public function algerie(): Response
    {
        return $this->render('base/foot/Nations/afrique/algerie.html.twig', [

        ]);
    }

    #[Route('/maroc', name: 'app_maroc')]
    public function maroc(): Response
    {
        return $this->render('base/foot/Nations/afrique/maroc.html.twig', [

        ]);
    }

    #[Route('/egypte', name: 'app_egypte')]
    public function egypte(): Response
    {
        return $this->render('base/foot/Nations/afrique/egypte.html.twig', [

        ]);
    }

    #[Route('/mali', name: 'app_mali')]
    public function mali(): Response
    {
        return $this->render('base/foot/Nations/afrique/mali.html.twig', [

        ]);
    }

    #[Route('/nigeria', name: 'app_nigeria')]
    public function nigeria(): Response
    {
        return $this->render('base/foot/Nations/afrique/nigeria.html.twig', [

        ]);
    }

    #[Route('/tunisie', name: 'app_tunisie')]
    public function tunisie(): Response
    {
        return $this->render('base/foot/Nations/afrique/tunisie.html.twig', [

        ]);
    }

    #[Route('/senegal', name: 'app_senegal')]
    public function senegal(): Response
    {
        return $this->render('base/foot/Nations/afrique/senegal.html.twig', [

        ]);
    }

    #[Route('/cameroun', name: 'app_cameroun')]
    public function cameroun(): Response
    {
        return $this->render('base/foot/Nations/afrique/cameroun.html.twig', [

        ]);
    }

    #[Route('/cotedivoire', name: 'app_cotedivoire')]
    public function cotedivoire(): Response
    {
        return $this->render('base/foot/Nations/afrique/cotedivoire.html.twig', [

        ]);
    }

    #[Route('/oceanie', name: 'app_oceanie')]
    public function oceanie(): Response
    {
        return $this->render('base/foot/Nations/oceanie/oceanie.html.twig', [

        ]);
    }

    #[Route('/australie', name: 'app_australie')]
    public function australie(): Response
    {
        return $this->render('base/foot/Nations/oceanie/australie.html.twig', [

        ]);
    }

    #[Route('/fidji', name: 'app_fidji')]
    public function fidji(): Response
    {
        return $this->render('base/foot/Nations/oceanie/fidji.html.twig', [

        ]);
    }

    #[Route('/nouvellezelande', name: 'app_nouvellezelande')]
    public function nouvellezelande(): Response
    {
        return $this->render('base/foot/Nations/oceanie/nouvellezelande.html.twig', [

        ]);
    }
}