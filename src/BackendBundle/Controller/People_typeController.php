<?php

namespace BackendBundle\Controller;

use BackendBundle\Entity\People_type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * People_type controller.
 *
 * @Route("people_type")
 */
class People_typeController extends Controller
{
    /**
     * Lists all people_type entities.
     *
     * @Route("/", name="people_type_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $people_types = $em->getRepository('BackendBundle:People_type')->findAll();

        return $this->render('people_type/index.html.twig', array(
            'people_types' => $people_types,
        ));
    }

    /**
     * Creates a new people_type entity.
     *
     * @Route("/new", name="people_type_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $people_type = new People_type();
        $form = $this->createForm('BackendBundle\Form\People_typeType', $people_type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($people_type);
            $em->flush();

            return $this->redirectToRoute('people_type_show', array('id' => $people_type->getId()));
        }

        return $this->render('people_type/new.html.twig', array(
            'people_type' => $people_type,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a people_type entity.
     *
     * @Route("/{id}", name="people_type_show")
     * @Method("GET")
     */
    public function showAction(People_type $people_type)
    {
        $deleteForm = $this->createDeleteForm($people_type);

        return $this->render('people_type/show.html.twig', array(
            'people_type' => $people_type,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing people_type entity.
     *
     * @Route("/{id}/edit", name="people_type_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, People_type $people_type)
    {
        $deleteForm = $this->createDeleteForm($people_type);
        $editForm = $this->createForm('BackendBundle\Form\People_typeType', $people_type);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('people_type_edit', array('id' => $people_type->getId()));
        }

        return $this->render('people_type/edit.html.twig', array(
            'people_type' => $people_type,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a people_type entity.
     *
     * @Route("/{id}", name="people_type_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, People_type $people_type)
    {
        $form = $this->createDeleteForm($people_type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($people_type);
            $em->flush();
        }

        return $this->redirectToRoute('people_type_index');
    }

    /**
     * Creates a form to delete a people_type entity.
     *
     * @param People_type $people_type The people_type entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(People_type $people_type)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('people_type_delete', array('id' => $people_type->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
