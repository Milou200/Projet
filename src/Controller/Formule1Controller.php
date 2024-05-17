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


class Formule1Controller extends AbstractController
{

#[Route('/redbull', name: 'app_redbull')]
    public function redbull(): Response
    {
        return $this->render('base/formule/redbull.html.twig', [

        ]);
    }

    #[Route('/mercedes', name: 'app_mercedes')]
    public function mercedes(): Response
    {
        return $this->render('base/formule/mercedes.html.twig', [

        ]);
    }

    #[Route('/ferrari', name: 'app_ferrari')]
    public function ferrari(): Response
    {
        return $this->render('base/formule/ferrari.html.twig', [

        ]);
    }

    #[Route('/alpine', name: 'app_alpine')]
    public function alpine(): Response
    {
        return $this->render('base/formule/alpine.html.twig', [

        ]);
    }
    
    #[Route('/mclaren', name: 'app_mclaren')]
    public function mclaren(): Response
    {
        return $this->render('base/formule/mclaren.html.twig', [

        ]);
    }

    #[Route('/stake', name: 'app_stake')]
    public function stake(): Response
    {
        return $this->render('base/formule/stake.html.twig', [

        ]);
    }

    #[Route('/racingbull', name: 'app_racingbull')]
    public function racingbull(): Response
    {
        return $this->render('base/formule/racingbull.html.twig', [

        ]);
    }

    #[Route('/astonmartin', name: 'app_astonmartin')]
    public function astonmartin(): Response
    {
        return $this->render('base/formule/astonmartin.html.twig', [

        ]);
    }

    #[Route('/williams', name: 'app_williams')]
    public function williams(): Response
    {
        return $this->render('base/formule/williams.html.twig', [

        ]);
    }

    #[Route('/haas', name: 'app_haas')]
    public function haas(): Response
    {
        return $this->render('base/formule/haas.html.twig', [

        ]);
        }
    }