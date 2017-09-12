<?php

namespace BackendBundle\Controller;

use BackendBundle\Entity\People;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * People controller.
 *
 * @Route("people")
 */
class PeopleController extends Controller
{
    /**
     * Lists all People entities.
     *
     * @Route("/", name="people_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $people = $em->getRepository('BackendBundle:People')->findAll();

        return $this->render('people/index.html.twig', array(
            'people' => $people,
        ));
    }

    /**
     * Creates a new People entity.
     *
     * @Route("/new", name="people_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $people = new People();
        $form = $this->createForm('BackendBundle\Form\PeopleType', $people);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($people);
            $em->flush();

            return $this->redirectToRoute('people_show', array('id' => $people->getId()));
        }

        return $this->render('people/new.html.twig', array(
            'People' => $people,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a People entity.
     *
     * @Route("/{id}", name="people_show")
     * @Method("GET")
     */
    public function showAction(People $people)
    {
        $deleteForm = $this->createDeleteForm($people);

        return $this->render('people/show.html.twig', array(
            'People' => $people,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing People entity.
     *
     * @Route("/{id}/edit", name="people_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, People $people)
    {
        $deleteForm = $this->createDeleteForm($people);
        $editForm = $this->createForm('BackendBundle\Form\PeopleType', $people);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('people_edit', array('id' => $people->getId()));
        }

        return $this->render('people/edit.html.twig', array(
            'People' => $people,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a People entity.
     *
     * @Route("/{id}", name="people_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, People $people)
    {
        $form = $this->createDeleteForm($people);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($people);
            $em->flush();
        }

        return $this->redirectToRoute('people_index');
    }

    /**
     * Creates a form to delete a People entity.
     *
     * @param People $people The People entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(People $people)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('people_delete', array('id' => $people->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
