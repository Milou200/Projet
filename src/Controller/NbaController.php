<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MaillotRepository;


class NbaController extends AbstractController
{
    #[Route('/conferenceest', name: 'app_conferenceest')]
    public function conferenceest(): Response
    {
        return $this->render('base/basket/est/conferenceest.html.twig', [

        ]);
    }

    #[Route('/celtics', name: 'app_celtics')]
    public function celtics(): Response
    {
        return $this->render('base/basket/est/celtics.html.twig', [

        ]);
    }

    #[Route('/cavs', name: 'app_cavs')]
    public function cavs(): Response
    {
        return $this->render('base/basket/est/cavs.html.twig', [

        ]);
    }

    #[Route('/bucks', name: 'app_bucks')]
    public function bucks(): Response
    {
        return $this->render('base/basket/est/bucks.html.twig', [

        ]);
    }

    #[Route('/pacers', name: 'app_pacers')]
    public function pacers(): Response
    {
        return $this->render('base/basket/est/pacers.html.twig', [

        ]);
    }

    #[Route('/knicks', name: 'app_knicks')]
    public function knicks(): Response
    {
        return $this->render('base/basket/est/knicks.html.twig', [

        ]);
    }

    #[Route('/magic', name: 'app_magic')]
    public function magic(): Response
    {
        return $this->render('base/basket/est/magic.html.twig', [

        ]);
    }

    #[Route('/phily', name: 'app_phily')]
    public function phily(): Response
    {
        return $this->render('base/basket/est/phily.html.twig', [

        ]);
    }

    #[Route('/heat', name: 'app_heat')]
    public function heat(): Response
    {
        return $this->render('base/basket/est/heat.html.twig', [

        ]);
    }

    #[Route('/bulls', name: 'app_bulls')]
    public function bulls(): Response
    {
        return $this->render('base/basket/est/bulls.html.twig', [

        ]);
    }

    #[Route('/hawks', name: 'app_hawks')]
    public function hawks(): Response
    {
        return $this->render('base/basket/est/hawks.html.twig', [

        ]);
    }

    #[Route('/nets', name: 'app_nets')]
    public function nets(): Response
    {
        return $this->render('base/basket/est/nets.html.twig', [

        ]);
    }

    #[Route('/raptors', name: 'app_raptors')]
    public function raptors(): Response
    {
        return $this->render('base/basket/est/raptors.html.twig', [

        ]);
    }

    #[Route('/pistons', name: 'app_pistons')]
    public function pistons(): Response
    {
        return $this->render('base/basket/est/pistons.html.twig', [

        ]);
    }

    #[Route('/hornets', name: 'app_hornets')]
    public function hornets(): Response
    {
        return $this->render('base/basket/est/hornets.html.twig', [

        ]);
    }

    #[Route('/wizards', name: 'app_wizards')]
    public function wizzards(): Response
    {
        return $this->render('base/basket/est/wizards.html.twig', [

        ]);
    }

    #[Route('/conferenceouest', name: 'app_conferenceouest')]
    public function conferenceouest(): Response
    {
        return $this->render('base/basket/ouest/conferenceouest.html.twig', [

        ]);
    }

    #[Route('/nuggets', name: 'app_nuggets')]
    public function nuggets(): Response
    {
        return $this->render('base/basket/ouest/nuggets.html.twig', [

        ]);
    }

    #[Route('/thunder', name: 'app_thunder')]
    public function thunder(): Response
    {
        return $this->render('base/basket/ouest/thunder.html.twig', [

        ]);
    }

    #[Route('/timberwolves', name: 'app_timberwolves')]
    public function timberwolves(): Response
    {
        return $this->render('base/basket/ouest/timberwolves.html.twig', [

        ]);
    }

    #[Route('/clippers', name: 'app_clippers')]
    public function clippers(): Response
    {
        return $this->render('base/basket/ouest/clippers.html.twig', [

        ]);
    }

    #[Route('/pelicans', name: 'app_pelicans')]
    public function pelicans(): Response
    {
        return $this->render('base/basket/ouest/pelicans.html.twig', [

        ]);
    }

    #[Route('/suns', name: 'app_suns')]
    public function suns(): Response
    {
        return $this->render('base/basket/ouest/suns.html.twig', [

        ]);
    }

    #[Route('/kings', name: 'app_kings')]
    public function kings(): Response
    {
        return $this->render('base/basket/ouest/kings.html.twig', [

        ]);
    }

    #[Route('/lakers', name: 'app_lakers')]
    public function lakers(): Response
    {
        return $this->render('base/basket/ouest/lakers.html.twig', [

        ]);
    }

    #[Route('/mavericks', name: 'app_mavericks')]
    public function mavericks(): Response
    {
        return $this->render('base/basket/ouest/mavericks.html.twig', [

        ]);
    }

    #[Route('/warriors', name: 'app_warriors')]
    public function warriors(): Response
    {
        return $this->render('base/basket/ouest/warriors.html.twig', [

        ]);
    }

    #[Route('/jazz', name: 'app_jazz')]
    public function jazz(): Response
    {
        return $this->render('base/basket/ouest/jazz.html.twig', [

        ]);
    }

    #[Route('/rockets', name: 'app_rockets')]
    public function rockets(): Response
    {
        return $this->render('base/basket/ouest/rockets.html.twig', [

        ]);
    }

    #[Route('/spurs', name: 'app_spurs')]
    public function spurs(): Response
    {
        return $this->render('base/basket/ouest/spurs.html.twig', [

        ]);
    }

    #[Route('/trailblazzers', name: 'app_trailblazzers')]
    public function trailblazzers(): Response
    {
        return $this->render('base/basket/ouest/trailblazzers.html.twig', [

        ]);
    }

    #[Route('/grizzlies', name: 'app_grizzlies')]
    public function grizzlies(): Response
    {
        return $this->render('base/basket/ouest/grizzlies.html.twig', [

        ]);
    }
}