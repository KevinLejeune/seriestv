<?php

namespace BackendBundle\Controller;

use BackendBundle\Entity\Serie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Serie controller.
 *
 * @Route("serie")
 */
class SerieController extends Controller
{
    /**
     * Lists all serie entities.
     *
     * @Route("/", name="serie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $series = $em->getRepository('BackendBundle:Serie')->findAll();

        return $this->render('serie/index.html.twig', array(
            'series' => $series,
        ));
    }

    /**
     * Creates a new serie entity.
     *
     * @Route("/new", name="serie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $serie = new Serie();
        $form = $this->createForm('BackendBundle\Form\SerieType', $serie);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $serie->getAffiche();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                "uploads",
                $fileName
            );

            $serie->setAffiche($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_show', array('id' => $serie->getId()));
        }

        return $this->render('serie/new.html.twig', array(
            'serie' => $serie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a serie entity.
     *
     * @Route("/{id}", name="serie_show")
     * @Method("GET")
     */
    public function showAction(Serie $serie)
    {
        $deleteForm = $this->createDeleteForm($serie);

        return $this->render('serie/show.html.twig', array(
            'serie' => $serie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing serie entity.
     *
     * @Route("/{id}/edit", name="serie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Serie $serie)
    {
        $serie->setAffiche(
            new File('uploads/'.$serie->getAffiche())
        );
        $deleteForm = $this->createDeleteForm($serie);
        $editForm = $this->createForm('BackendBundle\Form\SerieType', $serie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $file = $serie->getAffiche();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                "uploads",
                $fileName
            );

            $serie->setAffiche($fileName);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('serie_edit', array('id' => $serie->getId()));
        }

        return $this->render('serie/edit.html.twig', array(
            'serie' => $serie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a serie entity.
     *
     * @Route("/{id}", name="serie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Serie $serie)
    {
        $form = $this->createDeleteForm($serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serie);
            $em->flush();
        }

        return $this->redirectToRoute('serie_index');
    }

    /**
     * Creates a form to delete a serie entity.
     *
     * @param Serie $serie The serie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Serie $serie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('serie_delete', array('id' => $serie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
