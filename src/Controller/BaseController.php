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
use App\Entity\Categorie;


class BaseController extends AbstractController
{
    #[Route('/', name: 'app_base')]
    public function index(MaillotRepository $maillotRepository): Response
    {
        $maillots = $maillotRepository->findBy(array(),array('nom'=>'ASC'));
        return $this->render('base/index.html.twig', [
         'maillots'=>$maillots   
        ]);
    }

    #[Route('/ventes', name: 'app_ventes')]
    public function ventes(): Response
    {
        return $this->render('base/ventes.html.twig', [
            
        ]);
    }

    

    #[Route('/contact', name: 'app_contact')]
    public function contact(Request $request, EntityManagerInterface $em): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isSubmitted()&&$form->isValid()){
                $em->persist($contact);
                $em->flush();
                $this->addFlash('notice','Message envoyé');
                return $this->redirectToRoute('app_contact');
            }
            }
        return $this->render('base/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/panier', name: 'app_panier')]
    public function panier(): Response
    {
        return $this->render('base/panier.html.twig', [
            
        ]);
    }

    #[Route('/categorie/{id}', name: 'app_categorie')]
    public function categorie(Categorie $categorie): Response
    {
        return $this->render('base/categorie.html.twig', [
            'categorie'=>$categorie
        ]);
    }
}
