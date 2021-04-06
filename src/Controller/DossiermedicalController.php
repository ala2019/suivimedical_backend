<?php

namespace App\Controller;

use App\Entity\Dossiermedical;
use App\Form\DossiermedicalType;
use App\Repository\DossiermedicalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dossiermedical")
 */
class DossiermedicalController extends AbstractController
{
    /**
     * @Route("/", name="dossiermedical_index", methods={"GET"})
     */
    public function index(DossiermedicalRepository $dossiermedicalRepository): Response
    {
        return $this->render('dossiermedical/index.html.twig', [
            'dossiermedicals' => $dossiermedicalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="dossiermedical_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dossiermedical = new Dossiermedical();
        $form = $this->createForm(DossiermedicalType::class, $dossiermedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dossiermedical);
            $entityManager->flush();

            return $this->redirectToRoute('dossiermedical_index');
        }

        return $this->render('dossiermedical/new.html.twig', [
            'dossiermedical' => $dossiermedical,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dossiermedical_show", methods={"GET"})
     */
    public function show(Dossiermedical $dossiermedical): Response
    {
        return $this->render('dossiermedical/show.html.twig', [
            'dossiermedical' => $dossiermedical,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dossiermedical_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Dossiermedical $dossiermedical): Response
    {
        $form = $this->createForm(DossiermedicalType::class, $dossiermedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dossiermedical_index');
        }

        return $this->render('dossiermedical/edit.html.twig', [
            'dossiermedical' => $dossiermedical,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dossiermedical_delete", methods={"POST"})
     */
    public function delete(Request $request, Dossiermedical $dossiermedical): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dossiermedical->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dossiermedical);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dossiermedical_index');
    }
}
