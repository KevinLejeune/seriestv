<?php

namespace BackendBundle\Controller;

use BackendBundle\Entity\EpisodePeople;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * EpisodePeople controller.
 *
 * @Route("episodepeople")
 */
class EpisodePeopleController extends Controller
{
    /**
     * Lists all episodePeople entities.
     *
     * @Route("/", name="episodepeople_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $episodePeoples = $em->getRepository('BackendBundle:EpisodePeople')->findAll();

        return $this->render('episodepeople/index.html.twig', array(
            'episodePeoples' => $episodePeoples,
        ));
    }

    /**
     * Creates a new episodePeople entity.
     *
     * @Route("/new", name="episodepeople_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $episodePeople = new EpisodePeople();
        $form = $this->createForm('BackendBundle\Form\EpisodePeopleType', $episodePeople);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episodePeople);
            $em->flush();

            return $this->redirectToRoute('episodepeople_show', array('id' => $episodePeople->getId()));
        }

        return $this->render('episodepeople/new.html.twig', array(
            'episodePeople' => $episodePeople,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a episodePeople entity.
     *
     * @Route("/{id}", name="episodepeople_show")
     * @Method("GET")
     */
    public function showAction(EpisodePeople $episodePeople)
    {
        $deleteForm = $this->createDeleteForm($episodePeople);

        return $this->render('episodepeople/show.html.twig', array(
            'episodePeople' => $episodePeople,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing episodePeople entity.
     *
     * @Route("/{id}/edit", name="episodepeople_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EpisodePeople $episodePeople)
    {
        $deleteForm = $this->createDeleteForm($episodePeople);
        $editForm = $this->createForm('BackendBundle\Form\EpisodePeopleType', $episodePeople);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('episodepeople_edit', array('id' => $episodePeople->getId()));
        }

        return $this->render('episodepeople/edit.html.twig', array(
            'episodePeople' => $episodePeople,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a episodePeople entity.
     *
     * @Route("/{id}", name="episodepeople_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EpisodePeople $episodePeople)
    {
        $form = $this->createDeleteForm($episodePeople);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episodePeople);
            $em->flush();
        }

        return $this->redirectToRoute('episodepeople_index');
    }

    /**
     * Creates a form to delete a episodePeople entity.
     *
     * @param EpisodePeople $episodePeople The episodePeople entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EpisodePeople $episodePeople)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('episodepeople_delete', array('id' => $episodePeople->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
